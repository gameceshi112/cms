<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<?php 
include "DB.php";
$db = DB::getIntance();
$where['id'] = intval($_GET['id']);
$res = $db->deleteOne('qk_cate', $where);
echo '删除成功，转向列表面<script>setTimeout(function(){window.location.href="/cate_index.php"},1000)</script>';

?>
