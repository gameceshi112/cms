<?php 
include "DB.php";

$db = DB::getIntance();
$where = '1=1';
$res = $db->selectAll('qk_cate',$where,"*");
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
.large li:nth-last-child(10):after {
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
	<th><a href="/cate_add.php" >添加</a></th>
	
</tr>
<tr><th><a href="/index.php">返回网站列表</a></th></tr>
<tr>
	<th>ID</th>
	<th>类型名字</th>
	<th>操作</th>
</tr>

<?php foreach($res as $v ) { ?>
<tr>
	<td><?php echo $v['id'];?></td>
	<td><?php echo $v['name'];?></td>
	<td><a href="/cate_edit.php?id=<?php echo $v['id'];?>">编辑</a>    &nbsp;&nbsp;  <a href="/cate_del.php?id=<?php echo $v['id'];?>">删除</a>
	</td>
</tr>
<?php }?>
</table>
</div>




