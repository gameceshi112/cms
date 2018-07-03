
<?php
//获取目录下所有文件名
function myreaddir($dir) {
$handle=opendir($dir);
$i=0;
while($file=readdir($handle)) {
if (($file!=".")and($file!="..")) {
$list[$i]=$file;
$i=$i+1;
}
}
closedir($handle); 
return $list;
}

//替换回调函数
function rep($match){
  global $jz;
  foreach($match as $v){
       
	   switch($v){
	   
		  case '{dongtaijuzi}':return $jz[mt_rand(0,count($jz))];break;
	   }

   }
}

//随机读取一个函数
function myRand($arr){
    
	return $arr[mt_rand(0,count($arr)-1)];
}

//取标签存在数量
function biaoqianCount($reg,$moban){
preg_match_all($reg,$moban,$count);

return count($count[0]);

}

//获取文件列表
function getFile($dir) {
    $fileArray[]=NULL;
    if (false != ($handle = opendir ( $dir ))) {
        $i=0;
        while ( false !== ($file = readdir ( $handle )) ) {
            //去掉"“.”、“..”以及带“.xxx”后缀的文件
            if ($file != "." && $file != ".."&&strpos($file,".")) {
                $fileArray[$i]=$file;
                if($i==100){
                    break;
                }
                $i++;
            }
        }
        //关闭句柄
        closedir ( $handle );
    }
    return $fileArray;
}