<?php
/**
 * [检测是否有管理员]
 * @return [type] [检测账号密码]
 */
function checkAdmin(){
	return fetchOne($sql);
}
/**
 * [检测是否有管理员登录]
 * @return [type] []
 */
function checkLogined(){ 
	if (!isset($_SESSION['adminId'])&&!isset($_COOKIE['adminId'])){ 
		alertMes("请登录","login.php");
	}
}
/**
 * [注销管理员]
 * @return [type] []
 */
function logout(){ 
	$_SESSION = array();
	if(isset($_COOKIE[session_name()])){ 
		setcookie(session_name(),"",time()-3600);
	}
	if(isset($_COOKIE['adminId'])){ 
		setcookie('adminId',"",time()-3600);
	}
	if(isset($_COOKIE['adminName'])){ 
		setcookie('adminName',"",time()-3600);
	}
	session_destroy();//销毁session会话
	header("location:login.php");
}
/**
 * [添加管理员]
 */
function addAdmin(){ 
	$arr = $_POST;
	$arr['password'] = md5($_POST['password']);
	if(insert("info_admin",$arr)){ 
		$mes = "添加成功! <br /><a href='addAdmin.php'>继续添加</a>|<a href='listAdmin.php'>查看管理员列表</a>";
	}else{ 
		$mes = "添加失败！<br /> <a href='addAdmin.php'>重新添加</a>";
	}
	return $mes;
}
/**
 * [编辑管理员]
 * @param  [type] $id [id]
 * @return [type]     []
 */
function editAdmin($id){ 
	$arr = $_POST;
	$arr['password'] =$_POST['password'];
	if(update("info_admin",$arr,"id={$id}")){ 
		$mes = "编辑成功! <br /><a href='listAdmin.php'>查看管理员列表</a>";
	}else{ 
		$mes = "编辑失败！<br /> <a href='listAdmin.php'>重新修改</a>";
	}
	return $mes;
}
/**
 * [删除管理员]
 * @param  [type] $id [id]
 * @return [type]     []
 */
function delAdmin($id){ 
	if(delete1("info_admin","id={$id}")){ 
		$mes = "删除成功! <br /><a href='listAdmin.php'>查看管理员列表</a>";
	}else{ 
		$mes = "删除失败！<br /> <a href='listAdmin.php'>重新删除</a>";
	}
	return $mes;
}
/**
 * [得到所有的管理员]
 * @param  [type] $where [description]
 * @return [type]        [description]
 */
function getAllAdmin($where =null){ 
	$sql = "select * from info_admin {$where}";
	$rows = fetchAll($sql);
	return $rows;
}
/**
 * [添加用户的操作]
 */
function addUser(){
	$arr=$_POST;
	$arr['password']=trim($_POST['password']);
	$arr['face']="images/face/".rand(1,7).".png";
	$arr['regTime']=time();
	//print_r($arr);
	if(insert("info_user", $arr)){
		$mes="添加成功!<br/><a href='addUser.php'>继续添加</a>|<a href='listUser.php'>查看列表</a>";
	}else{
		$mes="添加失败!<br/><a href='arrUser.php'>重新添加</a>|<a href='listUser.php'>查看列表</a>";
	}
	return $mes;
}
/**
 * [删除用户]
 * @param  [type] $id [id]
 * @return [type]     []
 */
function delUser($id){
	$sql="select username from info_user where id=".$id;
	$row=fetchOne($sql);
	if(delete1("info_user","id={$id}")){
		$mes="删除成功!<br/><a href='listUser.php'>查看用户列表</a>";
	}else{
		$mes="删除失败!<br/><a href='listUser.php'>请重新删除</a>";
	}
	return $mes;
}

/**
 * [编辑用户]
 * @param  [type] $id []
 * @return [type]     []
 */
function editUser($id){
	$arr=$_POST;
	$arr['password']=md5($_POST['password']);
	if(update("info_user", $arr,"id={$id}")){
		$mes="编辑成功!<br/><a href='listUser.php'>查看用户列表</a>";
	}else{
		$mes="编辑失败!<br/><a href='listUser.php'>请重新修改</a>";
	}
	return $mes;
}
/**
 * [添加网站配置]
 * @param  [type] $id [id]
 * @return [type]     []
 */
function manager($id){
	$arr = $_POST;
	if(update("info_manager",$arr,"id={$id}")){
		$mes = "网站配置成功！<br> <a href='manager.php'>重新配置</a>";
	}else{
		$mes = "网站配置失败！<br> <a href='manager.php'>重新配置</a>";
	}
	return $mes;
}
// function manager(){
// 	$arr = $_POST;
// 	$path="./uploads";
// 	$uploadFiles=uploadFile($path);
// 	if(insert("info_manager",$arr)){
// 		$mes = "网站配置成功！<br> <a href='manager.php'>重新配置</a>";
// 	}else{ 
// 		$mes = "网站配置失败！<br> <a href='manager.php'>重新配置</a>";
// 	}
// 	return $mes;
// }