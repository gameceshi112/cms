<?php
define('_VALID', true);
require 'include/config.php';
require 'include/function_global.php';
require 'include/function_smarty.php';
require 'include/function_user.php';


$title = $_POST['title'];
$link = $_POST['video_url'];
$thumb_img = $_POST['thumb_img'];;
echo "222chenggong222";

$key = md5(time().mt_rand(1,100000));
$add_date = date("Y-m-d");
$record_date = date("Y-m-d");
$add_time = time();
$sql = "INSERT INTO video (UID,title,is_link,vkey,active,thumb_img,link,addtime,adddate,record_date) VALUES(1,'$title',1,'$key',1,'$thumb_img','$link','$add_time','$add_date','$record_date')";

$res = $conn->execute($sql);
if ($conn->Affected_Rows()) {
	
}