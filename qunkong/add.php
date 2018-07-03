<?php 
include "DB.php";
$db =DB::getIntance();
if(isset($_GET['button'])){
$insert_data['main_url'] = trim($_GET['main_url']);
$insert_data['durl'] = trim($_GET['durl']);
$insert_data['kwz'] = trim($_GET['kwz']);
$insert_data['pn'] =  intval($_GET['pn']);
$insert_data['zmlm'] = trim($_GET['zmlm']);
$insert_data['yml'] = intval($_GET['yml']);
$insert_data['ext'] = intval($_GET['ext']);
$insert_data['eml'] = intval($_GET['eml']);
$insert_data['xwbt'] = intval($_GET['xwbt']);
$insert_data['is_atuo'] = intval($_GET['is_atuo']);
$insert_data['times_per_day'] = intval($_GET['times_per_day']);
$insert_data['cate_id'] = intval($_GET['cate_id']);
$res = $db->insert('qk_list',$insert_data);

echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 添加成功，转向列表面<script>setTimeout(function(){window.location.href="/index.php"},2000)</script>';
return false;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>静态文件生成程序 BY d58.net</title>
</head>
<body>
<div style="border-bottom:#ccc 1px dashed;height:45px;"><h1>静态文件生成程序</h1></div>
<form id="form1" name="form1" method="get" action="/add.php">
<div style="border-bottom:#ccc 1px dashed;height:50px;">
主站网址<input name="main_url" type="text" id="main_url" value="" size="30"><br>
<font color="red">1.主站的网址一定要设置</font>
</div>
<div style="border-bottom:#ccc 1px dashed;height:90px;">
远程配置地址<input name="durl" type="text" id="durl" value="http://n1.d58.net/1206/" size="30"><br>
<font color="red">1.使用本地txt数据设置为空；<br>
2.使用远程云数据新闻标题和段落设置http://n1.d58.net/1206/<br>
3.云数据地址更换联系qq4781335</font>
</div>
<div style="border-bottom:#ccc 1px dashed;height:50px;">
自定义前网址<input name="kwz" type="text" id="kwz" value="" size="30"><br>
<font color="red">1.自定义前地址一般默认设置 或者按需要设置你要显示使用的域名</font>
</div>
<div style="border-bottom:#ccc 1px dashed;height:30px;">
生成目录内页<input type="radio" name="ext" value="1" checked="checked">内页 <input type="radio" name="ext" value="6">目录 <font color="red">*设置生成内页 或者目录格式</font></div>
<div style="border-bottom:#ccc 1px dashed;height:50px;">
每次生成页数<input name="pn" type="text" id="pn" value="300" size="30"><br>
<font color="red">生成多少个页面，建议默认100不用设置</font></div>
<div style="border-bottom:#ccc 1px dashed;height:50px;">
自定义目录名<input name="zmlm" type="text" id="zmlm" value="" size="30"><br>
<font color="red">填写自定义前第一级目录 留空为随机一级目录</font>
</div>
<div style="border-bottom:#ccc 1px dashed;height:70px;">
一级目录规则<input type="radio" name="yml" value="0">数字 
<input type="radio" name="yml" value="3">字母 
<input type="radio" name="yml" value="4" checked="checked">组合 <input type="radio" name="yml" value="99">关闭一级目录<br>
<font color="red">1.自定义目录设置时 该行选无效<br>
2.选择关闭一级目录时不生成一级目录程序直接根目录下生成
</font></div>

<div style="border-bottom:#ccc 1px dashed;height:30px;">
二级目录规则<input type="radio" name="eml" value="0">数字 
<input type="radio" name="eml" value="3">字母 
<input type="radio" name="eml" value="4" checked="checked">组合</div>
<div style="border-bottom:#ccc 1px dashed;height:30px;">
新闻标题页面<input type="radio" name="xwbt" value="1">是 
<input type="radio" name="xwbt" value="2" checked="checked">否  <br>
</div>

<div style="border-bottom:#ccc 1px dashed;height:50px;">
每天执行的次数<input name="times_per_day" type="text" id="times_per_day" value="3" size="30"><br>
<font color="red">一天该脚本执行的次数</font></div>

<div style="border-bottom:#ccc 1px dashed;height:30px;">
请选择分类：<select name="cate_id">
<?php $where = '1=1';
$res = $db->selectAll('qk_cate',$where,"*"); ?>
<?php foreach($res as $v){ ?>
  <option value ="<?php echo $v[id];?>"><?php echo $v[name];?></option>
<?php }?>

</select>
</div>

<div style="border-bottom:#ccc 1px dashed;height:30px;">
是否开启定时任务<input type="radio" name="is_atuo" value="0">关闭
<input type="radio" name="is_atuo" value="1" checked="checked">开启
</div>

<input name="ing" type="hidden" id="ing" value="update" size="10">
  <input type="submit" name="button" id="button" value="提交生成页面">
</form>
</body>
</html>
