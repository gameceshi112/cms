<?php
define('_VALID', 1);
define('_ENTER', true);
define('_CLI', true);


// Argvs
$video_name = $_SERVER['argv'][1];
$vid = (int) $_SERVER['argv'][2];
$video_path = $_SERVER['argv'][3];

// Required
$basedir = dirname(dirname(__FILE__));
require $basedir. '/include/config.php';
require $basedir. '/include/function_video.php';
require $basedir. '/include/function_conversion.php';
require $basedir. '/include/function_server.php';
$vi = array();
$video_info = array();
$nl = "=========================================================\n";

echo "\n".$nl."Video Details:\n".$nl;
echo "\n".$nl."-----------------:\n".$nl;
echo "Parameters:\n";
echo "Video Name: $video_name\n";
echo "Vidoe ID: $vid\n";
echo "Video Path: $video_path\n\n";
// Error Checks
if (!preg_match("/^[0-9]{1,5}\.[a-z0-9]{2,4}$/i", $video_name)) {
	echo "Video Name: $video_name is invalid. Err #1. Exiting ..."; exit();
} else {
	$ffp_data = get_ffprobe_data($video_path);
	$video_info = ffpInfo($ffp_data);
}
// Get Encoder
$encodings = getEncodings();
foreach($encodings as $encoding) {
	convert($encoding, $vid, $video_name, $video_info);
	$output = $config['H264_DIR']."/".$vid."_".$encoding['label'].".".$encoding['format'];
	echo "\n".$nl."Multi Server\n".$nl;
	$flv = $config['FLVDO_DIR'].'/'.$vid.'.flv';
	$iphone = $config['IPHONE_DIR'].'/'.$vid.'.mp4';
	$hd = $output;
	$m3u8_path = convert_m3u8($output,$encoding,$vid);
	//转化成m3u8视频
	if($config['multi_server'] == '1'){
		$server = get_server();
		upload_m3u8_video($m3u8_path, $server['server_ip'], $server['ftp_username'], $server['ftp_password'], $server['ftp_root']);	
		$sql = "UPDATE video SET server = '".$server['video_url']."' WHERE VID = '".(int)$vid."'";
		executeQuery($sql);
		upload_video($flv, $iphone, $hd, $server['server_ip'], $server['ftp_username'], $server['ftp_password'], $server['ftp_root']);
		echo "\n ==Video Uploaded to multi server==";
		if(file_exists($flv) && filesize($flv) > 100){
			$skip = true;
		}
		@chmod($flv, 0777);
		@unlink($flv);
		@chmod($hd, 0777);
		@unlink($hd);
		@chmod($iphone, 0777);
		@unlink($iphone);	
	}	
}

//postThumbs($vid,$video_path);
//postConversion($vid,$video_path);
// Display :: Encoder Core End
echo "\n<-- End of Script -->\n\n";
exit();
?>

