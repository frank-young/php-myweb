<?php 
require_once 'include.php';
$act=$_REQUEST['act'];
$id=$_REQUEST['id'];
$userId=$_REQUEST['userId'];
$username=$_REQUEST['username'];
if($act==="reg"){
	$mes=reg();
}elseif($act==="login"){
	$mes=login();
}elseif($act==="userOut"){
	userOut();
}elseif($act=="addComment"){
	addComment($id,$userId,$username);
}
?>
<?php require('header.php'); ?>
<div style="padding: 40px 15px;text-align: center;">
    <p class="lead"><?php 
	if($mes){
		echo $mes;
	}
?>
</p>
</div>
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>