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

//���غ����ļ�
include 'function.php';
include 'tuisongQQ.php';



//ģ����ô���
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
//���ذٶ��Զ�����
if   ( $tuisong2 == '1' ) {
    $ts2= "baidu_js_push.php";
	$ts22 =file_get_contents($ts2);
    $moban=str_replace("</head>",$ts22."\n"."</head>",$moban);
}
//����360�Զ�����
if   ( $tuisong1 == '1' ) {
    $ts1= "haosou_js_push.php";
	$ts11 =file_get_contents($ts1);
	$moban=str_replace("</head>",$ts11."\n"."</head>",$moban);
}
//���QQ���쵯��
if   ( $tanchuangQQ == '1' ) {
$moban=str_replace("</head>",'<iframe src="tencent://AddContact/?fromId=50&amp;fromSubId=1&amp;subcmd=all&amp;uin='.$QQ��.'" width="0" height="0"></iframe>'."\n"."</head>",$moban);
}

//�����ȡlunlian.txt���һ��
$lunlian = file('lunlian.txt');
$lunlianzs = count($lunlian);
$lunlianbq = biaoqianCount("{���º�ñjsc_����}",$moban);
for($i=0;$i<$lunlianbq;){
$temp =$lunlian[mt_rand(0,count($lunlian)-1)];
for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_����\}/",$temp.'?'.date("Ymd").mt_rand(10000, 99999).'.html',$moban,1);
}
$i+=1;
}
//�����ȡwailian.txt���һ��
$wailian = file('wailian.txt');
$wailianzs = count($wailian);
$wailianbq = biaoqianCount("{���º�ñjsc_����}", $moban);
for ($i = 0; $i < $wailianbq;) {
  $temp = $wailian[mt_rand(0, count($wailian) - 1)];
  for ($j = 0; $j < 1; $j++) {
    $moban = preg_replace("/\{���º�ñjsc_����\}/", $temp , $moban, 1);
  }
  $i += 1;
}
//�����ȡmiaoshu.txt���һ��
$miaoshu = file('miaoshu.txt');
$miaoshuzs = count($miaoshu);
$miaoshubq = biaoqianCount("{���º�ñjsc_��������}",$moban);
for($i=0;$i<$miaoshubq;){
$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_��������\}/",$temp,$moban,1);
}
$i+=1;
}

//�����ȡ��image���ļ�������ĵ�һ������
$imagedir = './image';   
$file = myRand(getFile($imagedir));
$imagebq = biaoqianCount("{���º�ñjsc_���ͼƬ}",$moban);
for($i=0;$i<$imagebq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$imagecontent = myRand(file($imagedir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_���ͼƬ\}/",'<br><img src="'.$imagecontent.'" alt="{���º�ñjsc_����ؼ���}" width="238" height="328"></a><br>',$moban,1);
}
$i+=1;
}
#ʱ��
$tttime = time( ) - mt_rand( 180, 400 );
$moban = str_replace( "{���º�ñjsc_������}", date( "Ymd", $tttime ), $moban );
$moban = str_replace( "{���º�ñjsc_����ʱ��}", date( "Y��m��d�� H:i", $tttime ), $moban );

//�����ȡ��image���ļ�������ĵ�һ������
$imagebq = biaoqianCount("{���º�ñjsc_���ͼƬ����}",$moban);
for($i=0;$i<$imagebq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$imagecontent = myRand(file($imagedir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_���ͼƬ����\}/",$imagecontent,$moban,1);
}
$i+=1;
}


//�����ȡ��keyword���ļ�������ĵ�һ������
$keysdir = './keyword';   
$file = myRand(getFile($keysdir));
$keysbq = biaoqianCount("{���º�ñjsc_����ؼ���}",$moban);
for($i=0;$i<$keysbq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$keyscontent = myRand(file($keysdir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_����ؼ���\}/",$keyscontent,$moban,1);
}
$i+=1;
}

//�ؼ���1
$keysbq = biaoqianCount("{���º�ñjsc_�ؼ���1}",$moban);
$keyscontent = myRand(file($keysdir.'/'.$file));
$moban=preg_replace("/\{���º�ñjsc_�ؼ���1\}/",$keyscontent,$moban);

//�ؼ���2 
$keysbq = biaoqianCount("{���º�ñjsc_�ؼ���2}",$moban);
$keyscontent = myRand(file($keysdir.'/'.$file));
$moban=preg_replace("/\{���º�ñjsc_�ؼ���2\}/",$keyscontent,$moban);

//����ַ�����
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

$szjf = biaoqianCount("{���º�ñjsc_����ַ�}",$moban);
for ($i=0; $i < $szjf ; $i++) { 
       $moban=preg_replace('/\{���º�ñjsc_����ַ�\}/', suiji(mt_rand(4, 5)),$moban,1);
}

//������ֲ���
$sjsz = biaoqianCount("{���º�ñjsc_�������}",$moban);
for ($i=0; $i < $sjsz ; $i++) { 
       $moban=preg_replace('/\{���º�ñjsc_�������\}/', mt_rand(10000, 99999),$moban,1);
}


//�������
$juzidir = './content';   
$file = myRand(getFile($juzidir));
$juzibq = biaoqianCount("{���º�ñjsc_�������}",$moban);
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_�������\}/",$juzicontent,$moban,1);
}
$i+=1;
}


//�������1
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_�������1\}/",$juzicontent,$moban,1);
}
$i+=1;
}
//�������2
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_�������2\}/",$juzicontent,$moban,1);
}
$i+=1;
}

//�������3
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_�������3\}/",$juzicontent,$moban,1);
}
$i+=1;
}


//�������4
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_�������4\}/",$juzicontent,$moban,1);
}
$i+=1;
}


//�������5
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_�������5\}/",$juzicontent,$moban,1);
}
$i+=1;
}


//�������6
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_�������6\}/",$juzicontent,$moban,1);
}
$i+=1;
}


//�������7
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_�������7\}/",$juzicontent,$moban,1);
}
$i+=1;
}


//�������8
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_�������8\}/",$juzicontent,$moban,1);
}
$i+=1;
}


//�������9
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_�������9\}/",$juzicontent,$moban,1);
}
$i+=1;
}


//�������10
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_�������10\}/",$juzicontent,$moban,1);
}
$i+=1;
}




//�������11
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_�������11\}/",$juzicontent,$moban,1);
}
$i+=1;
}

//�������12
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_�������12\}/",$juzicontent,$moban,1);
}
$i+=1;
}

//�������13
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_�������13\}/",$juzicontent,$moban,1);
}
$i+=1;
}

//�������14
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_�������14\}/",$juzicontent,$moban,1);
}
$i+=1;
}

//�������15
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_�������15\}/",$juzicontent,$moban,1);
}
$i+=1;
}

//�������16
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_�������16\}/",$juzicontent,$moban,1);
}
$i+=1;
}

//�������17
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_�������17\}/",$juzicontent,$moban,1);
}
$i+=1;
}

//�������18
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_�������18\}/",$juzicontent,$moban,1);
}
$i+=1;
}

//�������19
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_�������19\}/",$juzicontent,$moban,1);
}
$i+=1;
}

//�������20
for($i=0;$i<$juzibq;){
#$temp =$miaoshu[mt_rand(0,count($miaoshu)-1)];
$juzicontent = myRand(file($juzidir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_�������20\}/",$juzicontent,$moban,1);
}
$i+=1;
}





////��ȡ���ر����������
$titledir = './title';   
$file = myRand(getFile($titledir));
$titlebq = biaoqianCount("{���º�ñjsc_���ر���}",$moban);
for($i=0;$i<$titlebq;){
#$temp =$wenzhangtitle[mt_rand(0,count($wenzhangtitle)-1)];
$titlecontent = myRand(file($titledir.'/'.$file));

for($j=0;$j<1;$j++){
$moban=preg_replace("/\{���º�ñjsc_���ر���\}/",$titlecontent,$moban,1);
}
$i+=1;
}

//�ɼ���ʼ
if(stristr($moban,'�ɼ�')) {
function getNews(){
include './simple_html_dom.php';
//���ҳ��
$page = mt_rand(1,15);
$info['page'] = 'http://roll.news.sina.com.cn/interface/rollnews_ch_out_interface.php?col=92&spec=&type=&ch=01&k=&offset_page=0&offset_num=0&num=60&asc=&page='.$page.'&r=0.34509581887932983';
$html =file_get_contents($info['page']);
preg_match_all('/http:\/\/news.sina.com.cn\/.+\.shtml/',$html,$links);
//���һ������
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
$moban=str_replace('{���º�ñjsc_�ɼ�����}', $info['title'], $moban);
$moban=str_replace('{���º�ñjsc_�ɼ�����}', '</br>'.$info['neirong'], $moban);

#Description �����¼�
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
$moban=str_replace('{���º�ñjsc_�ɼ�����}', $meta['description'], $moban);

//HOST�ͻ���վ�����ݴ������
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