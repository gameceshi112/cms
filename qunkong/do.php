<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<?php 
include "DB.php";
$max_allow_task = 2;
$time_per_day = 2; //0.5表示1天执行2次
function task_log($text) {
        $log_file =  dirname(__FILE__).'/logs/'.'task_log_'.date('Y_m_d').'.txt';
        if (!is_file($log_file)){
            @touch($log_file);
        }
        if (is_file($log_file)){
			$text = date('Y_m_d H:i:s').' '.$text;
            @file_put_contents($log_file, $text . "\n", FILE_APPEND);
        }
}
function do_quest_step1($task){
	$task['ing'] = 'update';	
	$main_url = $task['main_url'];
	unset($task['id']);
	unset($task['main_url']);
	unset($task['status']);
	unset($task['last_end_time']);
	$query = http_build_query($task);
	$query_string = $main_url.'d58.php'.'?'.$query;
	$conent = file_get_contents($query_string);	
	return $conent;
}
function do_quest_step2($task,$num,$zmlm,$pn){
	$task['zmlm'] = $zmlm;
	$task['pn'] = $pn;
	$task['allnum'] = $num;
	$task['ing'] = 'run';
	$main_url = $task['main_url'];
	unset($task['id']);
	unset($task['main_url']);
	unset($task['status']);
	unset($task['last_end_time']);
	$query = http_build_query($task);
	$query_string = $main_url.'d58.php'.'?'.$query;
	task_log($query_string);
	$conent = file_get_contents($query_string);
	return $conent;
}
function do_quest_step3($task,$num,$zmlm,$pn){
	$task['allnum'] = $num;
	$task['ing'] = 'run';
	$task['pn'] = $pn;
	$task['page'] = 2;
	$task['zmlm'] = $zmlm;
	$main_url = $task['main_url'];
	unset($task['id']);
	unset($task['main_url']);
	unset($task['status']);
	unset($task['last_end_time']);
	$query = http_build_query($task);
	$query_string = $main_url.'d58.php'.'?'.$query;
	task_log($query_string);
	$conent = file_get_contents($query_string);
	return $conent;
}
$db = DB::getIntance();

$task = $db->getRow("select * from qk_list where id=".$_GET['id']);
if(empty($task)){
	echo '失败了，转向列表面<script>setTimeout(function(){window.location.href="/index.php"},1000)</script>';
}


$res = do_quest_step1($task);
$arr = explode("=",$res);
$arr3 = explode("&",$arr[3]);
if(empty($arr3[1])|| $arr3[1]!='pn' ){
	$where['id'] = $task['id'];
	$insert_data ['status'] = 2;
	$db->update('qk_list',$insert_data,$where);
	echo '第一步数据异常，请检查配置，转向列表面<script>setTimeout(function(){window.location.href="/index.php"},1000)</script>';
}

$a=explode("'",$res);
$query_string = $task["main_url"].'d58.php'.$a[1];
$conent = file_get_contents($query_string);
$i = 0;
while(1){
$i++;
$a=explode("'",$conent);
$query_string = $task["main_url"].'d58.php'.$a[1];
task_log($query_string);
$conent= file_get_contents($query_string);
if(strpos($conent,'map.txt')){
	break;
}
if($i>4){
   break;
}
}
unset($where);
unset($insert_data);
$where['id'] = $task['id'];
$insert_data ['status'] = 0;
$insert_data ['last_end_time'] = time();
$db->update('qk_list',$insert_data,$where);
echo '执行成功，转向列表面<script>setTimeout(function(){window.location.href="/index.php"},1000)</script>';






















