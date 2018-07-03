<?php 
include "DB.php";
$max_allow_task = 4;
$time_per_day = 6; //0.5表示1天执行2次


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
function do_quest_step2($task,$num,$zmlm){
	$task['allnum'] = $num;
	$task['ing'] = 'run';
	$task['zmlm'] = $zmlm;
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
function do_quest_step3($task,$num,$zmlm){
	$task['page'] = 2;
	$task['allnum'] = $num;
	$task['ing'] = 'run';
	$task['zmlm'] = $zmlm;
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
$db = DB::getIntance();

$res = $db->getRow("select count(*) as num from qk_list where status=1");
if($res['num']>$max_allow_task){
	$text ="正在执行的任务大于".$max_allow_task."个,退出";
	task_log($text);die();
}
$now = time();
$task = $db->getRow("select * from qk_list where status=0 and is_atuo=1 and last_end_time+86400/times_per_day<".$now);
if(empty($task)){
	$text = "此时没有正要执行的任务,退出脚本!";
	task_log($text);
	die();
}
$text = "开始执行任务，任务ID为".$task['id']." 任务域名为".$task['main_url'];
task_log($text);
$where['id'] = $task['id'];
$insert_data ['status'] = 1;
$db->update('qk_list',$insert_data,$where);
$res = do_quest_step1($task);
$arr = explode("=",$res);
$arr3 = explode("&",$arr[3]);

if(empty($arr3[1]) || $arr3[1]!='pn' ){
	$where['id'] = $task['id'];
	$insert_data ['status'] = 2;
	$insert_data ['last_end_time'] = time();
	$db->update('qk_list',$insert_data,$where);
	$text = "异常结束任务，第一步请求出错，任务ID为".$task['id']." 任务域名为".$task['main_url'];
	task_log($text);
	$text = "异常数据:".$res;
	task_log($text);
}
$a=explode("'",$res);
$query_string = $task["main_url"].'d58.php'.$a[1];
$conent = file_get_contents($query_string);
$a=explode("'",$conent);
$query_string = $task["main_url"].'d58.php'.$a[1];
$conent = file_get_contents($query_string);
$text = "正常结束任务，任务ID为".$task['id']." 任务域名为".$task['main_url'];
task_log($text);


unset($where);
unset($insert_data);
$where['id'] = $task['id'];
$insert_data ['status'] = 0;
$insert_data ['last_end_time'] = time();
$db->update('qk_list',$insert_data,$where);
