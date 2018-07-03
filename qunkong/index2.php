<?php

error_reporting(0);
$get_string = "QQ935432468";
function strtomd5_pass($str)
{
global $get_string;
return md5(md5($str.$get_string).$get_string);
}
$macmd5str = Get_Current_User().php_sapi_name().PHP_VERSION.php_uname().DEFAULT_INCLUDE_PATH;
$macmd5str = substr(strtomd5_pass($macmd5str),0,24);
$robotstr = substr($macmd5str,0,6)."-".substr($macmd5str,6,12)."-".substr($macmd5str,12,20)."-".substr($macmd5str,20,35);
$robotstr = strtoupper($robotstr);
$macmd5towstr = substr(strtomd5_pass($robotstr),0,24);
$macmd5towstr = strtoupper($macmd5towstr);
$robotwostr = substr($macmd5towstr,5,6)."-".substr($macmd5towstr,6,7)."-".substr($macmd5towstr,3,6)."-".substr($macmd5towstr,2,8);
$file_name="key.txt";
$fp=fopen($file_name,'r');
$buffer=fgets($fp);
if ($robotwostr != $buffer)
{

}
header('content-type:text/html;charset=gb2312');
error_reporting(0);
date_default_timezone_set('PRC');

//加载函数文件
include 'function.php';
include 'tuisongQQ.php';



//模板调用处理
$l="";

function ch($l){
  set_time_limit(0);
  return true;
}

if(ch($l)){
$mb_names = myreaddir('./moban');
$moban=file_get_contents('moban/'.$mb_names[mt_rand(0,count($mb_names)-1)]);
}else{
  $moban="";
}
//加载百度自动推送
if   ( $tuisong2 == '1' ) {
    $ts2= "baidu_js_push.php";
	$ts22 =file_get_contents($ts2);
    $moban=str_replace("</head>",$ts22."\n"."</head>",$moban);
}
//加载360自动推送
if   ( $tuisong1 == '1' ) {
    $ts1= "haosou_js_push.php";
	$ts11 =file_get_contents($ts1);
	$moban=str_replace("</head>",$ts11."\n"."</head>",$moban);
}
//随机QQ聊天弹窗
if   ( $tanchuangQQ == '1' ) {
$moban=str_replace("</head>",'<iframe src="tencent://AddContact/?fromId=50&amp;fromSubId=1&amp;subcmd=all&amp;uin='.$QQ号.'" width="0" height="0"></iframe>'."\n"."</head>",$moban);
}

//随机读取lunlian.txt随机一条
$lunlian = file('lunlian.txt');
$lunlianzs = count($lunlian);
$lunlianbq = biaoqianCount("{落月黑帽jsc_轮链}",$moban);
for($i=0;$i<$lunlianbq;){
$temp =$lunlian[mt_rand(0,count($lunlian)-1)];
for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_轮链\}/",$temp.'?'.date("Ymd").mt_rand(10000, 99999).'.html',$moban,1);
}
$i+=1;
}
//随机读取wailian.txt随机一条
$wailian = file('wailian.txt');
$wailianzs = count($wailian);
$wailianbq = biaoqianCount("{落月黑帽jsc_外链}", $moban);
for ($i = 0; $i < $wailianbq;) {
  $temp = $wailian[mt_rand(0, count($wailian) - 1)];
  for ($j = 0; $j < 1; $j++) {
    $moban = preg_replace("/\{落月黑帽jsc_外链\}/", $temp , $moban, 1);
  }
  $i += 1;
}
//随机读取miaoshu.txt随机一条
$miaoshu = file('miaoshu.txt');
$miaoshuzs = count($miaoshu);
$miaoshubq = biaoqianCount("{落月黑帽jsc_本地描述}",$moban);
for($i=0;$i<$miaoshubq;){
$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_本地描述\}/",$temp,$moban,1);
}
$i+=1;
}

//随机读取‘image’文件夹随机文档一条内容
$imagedir = './image';   
$file = myRand(getFile($imagedir));
$imagebq = biaoqianCount("{落月黑帽jsc_随机图片}",$moban);
for($i=0;$i<$imagebq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$imagecontent = myRand(file($imagedir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_随机图片\}/",'<br><img src="'.$imagecontent.'" alt="{落月黑帽jsc_随机关键词}" width="238" height="328"></a><br>',$moban,1);
}
$i+=1;
}
#时间
$tttime = time( ) - mt_rand( 180, 400 );
$moban = str_replace( "{落月黑帽jsc_年月日}", date( "Ymd", $tttime ), $moban );
$moban = str_replace( "{落月黑帽jsc_当天时间}", date( "Y年m月d日 H:i", $tttime ), $moban );

//随机读取‘image’文件夹随机文档一条内容
$imagebq = biaoqianCount("{落月黑帽jsc_随机图片链接}",$moban);
for($i=0;$i<$imagebq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$imagecontent = myRand(file($imagedir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_随机图片链接\}/",$imagecontent,$moban,1);
}
$i+=1;
}


//随机读取‘keyword’文件夹随机文档一条内容
$keysdir = './keyword';   
$file = myRand(getFile($keysdir));
$keysbq = biaoqianCount("{落月黑帽jsc_随机关键词}",$moban);
for($i=0;$i<$keysbq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$keyscontent = myRand(file($keysdir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_随机关键词\}/",$keyscontent,$moban,1);
}
$i+=1;
}

//关键词1
$keysbq = biaoqianCount("{落月黑帽jsc_关键词1}",$moban);
$keyscontent = myRand(file($keysdir.'/'.$file));
$moban=preg_replace("/\{落月黑帽jsc_关键词1\}/",$keyscontent,$moban);

//关键词2 
$keysbq = biaoqianCount("{落月黑帽jsc_关键词2}",$moban);
$keyscontent = myRand(file($keysdir.'/'.$file));
$moban=preg_replace("/\{落月黑帽jsc_关键词2\}/",$keyscontent,$moban);

//随机字符部分
function suiji($len) 
{ 
  $chars_array = array( 
  
    "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", 
    "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", 
    "w", "x", "y", "z","0","1","2","3","4","5","6","7","8","9","A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"
  ); 
  $charsLen = count($chars_array) - 1; 
  
  $outputstr = ""; 
  for ($i=0; $i<$len; $i++) 
  { 
    $outputstr .= $chars_array[mt_rand(0, $charsLen)]; 
  } 
  return $outputstr; 
} 

$szjf = biaoqianCount("{落月黑帽jsc_随机字符}",$moban);
for ($i=0; $i < $szjf ; $i++) { 
       $moban=preg_replace('/\{落月黑帽jsc_随机字符\}/', suiji(mt_rand(4, 5)),$moban,1);
}

//随机数字部分
$sjsz = biaoqianCount("{落月黑帽jsc_随机数字}",$moban);
for ($i=0; $i < $sjsz ; $i++) { 
       $moban=preg_replace('/\{落月黑帽jsc_随机数字\}/', mt_rand(10000, 99999),$moban,1);
}


//随机句子
$juzidir = './content';   
$file = myRand(getFile($juzidir));
$juzibq = biaoqianCount("{落月黑帽jsc_随机句子}",$moban);
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_随机句子\}/",$juzicontent,$moban,1);
}
$i+=1;
}


//随机句子1
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_随机句子1\}/",$juzicontent,$moban,1);
}
$i+=1;
}
//随机句子2
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_随机句子2\}/",$juzicontent,$moban,1);
}
$i+=1;
}

//随机句子3
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_随机句子3\}/",$juzicontent,$moban,1);
}
$i+=1;
}


//随机句子4
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_随机句子4\}/",$juzicontent,$moban,1);
}
$i+=1;
}


//随机句子5
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_随机句子5\}/",$juzicontent,$moban,1);
}
$i+=1;
}


//随机句子6
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_随机句子6\}/",$juzicontent,$moban,1);
}
$i+=1;
}


//随机句子7
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_随机句子7\}/",$juzicontent,$moban,1);
}
$i+=1;
}


//随机句子8
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_随机句子8\}/",$juzicontent,$moban,1);
}
$i+=1;
}


//随机句子9
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_随机句子9\}/",$juzicontent,$moban,1);
}
$i+=1;
}


//随机句子10
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_随机句子10\}/",$juzicontent,$moban,1);
}
$i+=1;
}




//随机句子11
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_随机句子11\}/",$juzicontent,$moban,1);
}
$i+=1;
}

//随机句子12
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_随机句子12\}/",$juzicontent,$moban,1);
}
$i+=1;
}

//随机句子13
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_随机句子13\}/",$juzicontent,$moban,1);
}
$i+=1;
}

//随机句子14
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_随机句子14\}/",$juzicontent,$moban,1);
}
$i+=1;
}

//随机句子15
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_随机句子15\}/",$juzicontent,$moban,1);
}
$i+=1;
}

//随机句子16
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_随机句子16\}/",$juzicontent,$moban,1);
}
$i+=1;
}

//随机句子17
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_随机句子17\}/",$juzicontent,$moban,1);
}
$i+=1;
}

//随机句子18
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_随机句子18\}/",$juzicontent,$moban,1);
}
$i+=1;
}

//随机句子19
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_随机句子19\}/",$juzicontent,$moban,1);
}
$i+=1;
}

//随机句子20
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_随机句子20\}/",$juzicontent,$moban,1);
}
$i+=1;
}





////读取本地标题参数标题
$titledir = './title';   
$file = myRand(getFile($titledir));
$titlebq = biaoqianCount("{落月黑帽jsc_本地标题}",$moban);
for($i=0;$i<$titlebq;){
#$temp =$wenzhangtitle[mt_rand(0,count($wenzhangtitle)-1)];
$titlecontent = myRand(file($titledir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{落月黑帽jsc_本地标题\}/",$titlecontent,$moban,1);
}
$i+=1;
}

//采集开始
if(stristr($moban,'采集')) {
function getNews(){
include './simple_html_dom.php';
//随机页数
$page = mt_rand(1,15);
$info['page'] = 'http://roll.news.sina.com.cn/interface/rollnews_ch_out_interface.php?col=92&spec=&type=&ch=01&k=&offset_page=0&offset_num=0&num=60&asc=&page='.$page.'&r=0.34509581887932983';
$html =file_get_contents($info['page']);
preg_match_all('/http:\/\/news.sina.com.cn\/.+\.shtml/',$html,$links);
//随机一个帖子
$link = $links[0][mt_rand(0,count($links)-1)];
$info['link'] = $link;
$html = file_get_html($link);
//$desc= $html->find('meta[property=og:description]',0)->attr;
$info['title'] = iconv('UTF-8','GB2312',$html->find("h1#artibodyTitle",0)->innertext);
$re =  $html->find("div#artibody",0);
$info['neirong'] = $re->innertext;
$info['neirong']=str_replace('<b>', '', $info['neirong']);
$info['neirong']=str_replace('</b>', '', $info['neirong']);
$info['neirong']=str_replace('<strong>', '', $info['neirong']);
$info['neirong']=str_replace('</strong>', '', $info['neirong']);
return $info;
}
$info  =  getNews();
$moban=str_replace('{落月黑帽jsc_采集标题}', $info['title'], $moban);
$moban=str_replace('{落月黑帽jsc_采集内容}', '</br>'.$info['neirong'], $moban);

#Description 描述事件
$des=file_get_contents($info['link']);
preg_match('/<META\s+name="description"\s+content="([\w\W]*?)"/si', $des, $matches); 
if (empty($matches[1])) {
     preg_match("/<META\s+name='description'\s+content='([\w\W]*?)'/si", $des, $matches);    
}
if (empty($matches[1])) {
     preg_match('/<META\s+content="([\w\W]*?)"\s+name="description"/si', $des, $matches);    
}
if (empty($matches[1])) {
     preg_match('/<META\s+http-equiv="description"\s+content="([\w\W]*?)"/si', $des, $matches);    
}
if (!empty($matches[1])) {
     $meta['description'] = $matches[1];
}
$meta['description']=iconv("utf-8","gb2312//IGNORE",$meta['description']);
$moban=str_replace('{落月黑帽jsc_采集描述}', $meta['description'], $moban);

//HOST客户端站点数据处理及输出
$ret = file_get_contents('http://'.$jcurl);

if(stristr($ret,"utf"))
{
    $ret =  iconv("utf-8","gb2312//IGNORE",$ret);
}

echo $moban.$ret;

	} else {

$ret = file_get_contents('http://'.$jcurl);

if(stristr($ret,"utf"))
{
    $ret =  iconv("utf-8","gb2312//IGNORE",$ret);
}

echo $moban.$ret;
	}