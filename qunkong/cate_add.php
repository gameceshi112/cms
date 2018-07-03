<?php 
include "DB.php";
if(isset($_GET['button'])){
	$db = DB::getIntance();
$insert_data['name'] = trim($_GET['name']);

$res = $db->insert('qk_cate',$insert_data);

echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 添加成功，转向列表面<script>setTimeout(function(){window.location.href="/cate_index.php"},2000)</script>';
return false;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>添加分类</title>
</head>
<body>
<div style="border-bottom:#ccc 1px dashed;height:45px;"><h1>添加分类</h1></div>
<form id="form1" name="form1" method="get" action="/cate_add.php">
<div style="border-bottom:#ccc 1px dashed;height:50px;">
分类名称<input name="name" type="text" id="name" value="" size="30"><br>
</div>
<div style="border-bottom:#ccc 1px dashed;height:2px;">
</div>

  <input type="submit" name="button" id="button" value="提交分类">
</form>
</body>
</html>
