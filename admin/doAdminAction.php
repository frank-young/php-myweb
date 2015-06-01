<?php 
require_once '../include.php';
$act = $_REQUEST['act'];//接收act；
$id = $_REQUEST['id'];//接收id；
if($act == "logout"){
	logout();
}elseif($act == "addAdmin"){ 
	$mes = addAdmin();
}elseif($act=="editAdmin"){ 
	$mes = editAdmin($id);
}elseif($act=="delAdmin"){
	$mes = delAdmin($id);
}elseif($act=="addCate"){
	$mes = addCate();
}elseif ($act=="editCate") {
	$mes = editCate($id);
}elseif ($act=="delCate") {
	$mes = delCate($id);
}elseif($act=="addUser"){
	$mes=addUser();
}elseif($act=="delUser"){
		$mes=delUser($id);
}elseif($act=="editUser"){
	$mes=editUser($id);	
}elseif($act=="addArticle"){
	$mes=addArticle();
}elseif($act=="editArticle"){
	$mes=editArticle($id);
}elseif($act=="delArticle"){
	$mes=delArticle($id);
}elseif($act=="manager"){
	$mes=manager($id=1);
}
?>
<?php
require('header.php');
?>
        <!-- 内容 start -->
    <p class="lead">
        <?php
			if($mes){
				echo $mes;
		}
		?>
	</p>
        <!-- 内容 stop -->
<?php
require('footer.php');
?>