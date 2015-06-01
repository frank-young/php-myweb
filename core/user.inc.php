<?php 
function reg(){
	$arr=$_POST;
	$arr['password']=trim($_POST['password']);
	$arr['regTime']=time();
	$arr['face']="images/face/".rand(1,7).".png";
	//print_r($arr);
	if(insert("info_user", $arr)){
		$mes="注册成功!<br/>3秒钟后跳转到首面!<meta http-equiv='refresh' content='3;url=index.php'/>";
	}else{
		$mes="注册失败!<br/><a href='index.php'>返回首页，重新注册</a>";
	}
	return $mes;
}
function login(){
	$username=$_POST['username'];
	$username=mysql_escape_string($username);//防止sql注入
	// $password=substr(md5($_POST['password']),0,-1);
	$password=$_POST['password'];
	$autoFlag = $_POST['autoFlag'];
	$sql="select * from info_user where username='{$username}' and password=' {$password} '";
	$row=fetchOne($sql);
	if($row){
		if($autoFlag){ 
			setcookie("userId",$row['id'],time()+7*24*3600);
			setcookie("username",$row['username'],time()+7*24*3600);
		}
		$_SESSION['userId']=$row['id'];
		$_SESSION['username']=$row['username'];
		$mes="登陆成功！<br/>3秒钟后跳转到首页<meta http-equiv='refresh' content='3;url=index.php'/>";
	}else{
		$mes="登陆失败！<a href='index.php'>重新登陆</a>";
	}
	return $mes;
}
function userOut(){
	$_SESSION=array();
	if(isset($_COOKIE[session_name()])){
		setcookie(session_name(),"",time()-3600);
	}
	if(isset($_COOKIE['userId'])){ 
		setcookie('userId',"",time()-3600);
	}
	if(isset($_COOKIE['username'])){ 
		setcookie('username',"",time()-3600);
	}
	session_destroy();
	header("location:index.php");
}
/**
 * [判断用户是否登录]
 * @return [type] [description]
 */
function userCheck(){
  if(!isset($_COOKIE['username'])&&!isset($_SESSION['username'])){
  }else{
    $userId = $_SESSION['userId'];
    $username = $_SESSION['username'];
  }
}
