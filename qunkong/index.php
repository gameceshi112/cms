<?php 
include "DB.php";

$db = DB::getIntance();
if(isset($_GET['key'])){
	$key = $_GET['key'];
  $where='main_url like "%'.$key.'%"';
}else{
  $where = '1=1';
}

$a = $db->getRow("select count(*) as p  from qk_list where ".$where);
$pages = ceil($a['p']/10)+1;

if(isset($_GET['page'])){
	$page_start = 10*(intval($_GET['page'])-1);
}else{
	$page_start = 0;
}
$res = $db->selectAll('qk_list',$where,"*","id desc",$page_start,10);
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<!-- CSS goes in the document HEAD or added to your external stylesheet -->

<style>
.container {
  background: #fdfdfd;
  padding: 1rem;
  margin: 3rem auto;
  border-radius: 0.2rem;
  counter-reset: pagination;
  text-align: center;
}
.container:after {
  clear: both;
  content: "";
  display: table;
}
.container ul {
  width: 100%;
}

.large {
  width: 45rem;
}


.pagination ul, li {
  list-style: none;
  display: inline;
  padding-left: 0px;
}

.pagination li {
  counter-increment: pagination;
}
.pagination li:hover a {
  color: #fdfdfd;
  background-color: #1d1f20;
  border: solid 1px #1d1f20;
}
.pagination li.active a {
  color: #fdfdfd;
  background-color: #1d1f20;
  border: solid 1px #1d1f20;
}

.pagination li:first-child a:after {
  content: "<";
}

.pagination li:nth-child(2) {
  counter-reset: pagination;
}

.pagination li:last-child a:after {
  content: ">";
}
.pagination li a {
  border: solid 1px #d6d6d6;
  border-radius: 0.2rem;
  color: #7d7d7d;
  text-decoration: none;
  text-transform: uppercase;
  display: inline-block;
  text-align: center;
  padding: 0.5rem 0.9rem;
}
.pagination li a:after {
  content: " " counter(pagination) " ";
}

.large li a {
  display: none;
}
.large li:first-child a {
  display: inline-block;
}
.large li:first-child a:after {
  content: "<";
}
.large li:nth-child(2) a {
  display: inline-block;
}
.large li:nth-child(3) a {
  display: inline-block;
}
.large li:nth-child(4) a {
  display: inline-block;
}
.large li:nth-child(5) a {
  display: inline-block;
}
.large li:nth-child(6) a {
  display: inline-block;
}
.large li:nth-child(7) a {
  display: inline-block;
}
.large li:nth-child(8) a {
  display: inline-block;
}
.large li:last-child a {
  display: inline-block;
}
.large li:last-child a:after {
  content: ">";
}
.large li:nth-last-child(2) a {
  display: inline-block;
}
.large li:nth-last-child(3) {
  display: inline-block;
}
.large li:nth-last-child(100):after {
  padding: 0 1rem;
  content: "...";
}
</style>



<style type="text/css">
table.imagetable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #999999;
	border-collapse: collapse;
}
table.imagetable th {
	background:#b5cfd2 url('cell-blue.jpg');
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #999999;
}
table.imagetable td {
	background:#dcddc0 url('cell-grey.jpg');
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #999999;
}
</style>

<!-- Table goes in the document BODY -->
<table class="imagetable">

<tr>
	<th><a href="/add.php" >添加</a></th>
	
</tr>

<tr>
        <th><a href="/cate_index.php" >分类列表</a></th>

</tr>
<tr>
	 <th><form action="/index.php" method="get">
  <p><input type="text" name="key" /></p>
  <input type="submit" value="搜索" />
</form></th>
</tr>
<tr>
	<th>主站域名</th>
	<th>远程配置</th>
	<th>自定义前网址</th>
	<th>生成目录内页</th>
	<th>每次生成页数</th>
	<th>自定义目录名</th>
	<th>一级目录规则</th>
	<th>二级目录规则</th>
	<th>新闻标题页面</th>
	<th>脚本每天次数</th>
	<th>是否开启脚本</th>
	<th>状态</th>
	<th>分类</th>
	<th>最后生成时间</th>
	<th>操作</th>
	
</tr>
<?php $cates = $db->selectAll('qk_cate',$where,"*"); ?>
<?php foreach($res as $v ) { ?>
<tr>
	<td><?php echo $v['main_url'];?></td>
	<td><?php echo $v['durl'];?></td>
	<td><textarea  cols="40">
<?php echo $v['kwz'];?>
</textarea></td>
	<td><?php if($v['ext']==1){echo '内页';}if($v['ext']==6){echo '目录';};?></td>
	<td><?php echo $v['pn'];?></td>
	<td><?php echo $v['zmlm'];?></td>
	<td><?php if($v['yml']==0){echo "数字 ";}
			   if($v['yml']==3){echo "字母 ";}
			    if($v['yml']==4){echo "组合 ";}
				 if($v['yml']==99){echo "关闭一级目录";}
	?></td>
	<td><?php
	 if($v['eml']==0){echo "数字 ";}
			   if($v['eml']==3){echo "字母 ";}
			    if($v['eml']==4){echo "组合 ";}?></td>
	<td><?php 
	if($v['xwbt']==1){echo "是 ";}
			   if($v['xwbt']==2){echo "否 ";}
	?></td>


<td><?php echo $v['times_per_day'];?></td>
<td><?php if($v['is_atuo']==1){echo '<a style="color:green">开启</a>';}else{echo ' <a style="color:red">关闭</a>';}?>
</td>
	<td><?php 
	if($v['status']==0){echo "空闲 ";}
			   if($v['status']==1){echo "执行中 ";}
			   if($v['status']==2){echo "< a color='red'>异常</a> ";}
	?></td>
	<td>
	<?php foreach($cates as $cat){ ?>
	<?php if($cat['id']==$v['cate_id']) {echo $cat['name']; } ;?>
	<?php } ?>

	</td>
	<td><?php 
	echo date("Y-m-d H:i:s",$v['last_end_time']-6960);
	?></td>
	<td><a href="/edit.php?id=<?php echo $v['id'];?>">编辑</a>    &nbsp;&nbsp;  <a href="/del.php?id=<?php echo $v['id'];?>">删除</a>
	<a href="/do.php?id=<?php echo $v['id'];?>">生成</a>
	</td>
</tr>
<?php }?>
</table>
<div class="container large">
  <div class="pagination">
    <ul>
<li> <a href="/index.php?page=<?php echo $_GET['page']-1;?>"></a> </li>
	<?php for($i=1;$i<$pages;$i++) { ?>
		<li> <a href="/index.php?page=<?php echo $i;?>"></a> </li>
	<?php } ?>  
    <li> <a href="/index.php?page=<?php echo $_GET['page']+1;?>"></a> </li>

 </ul>
  </div>
</div>




