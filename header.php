<?php
require_once 'include.php';
$sql = "select * from info_manager where id ='1'";
$webDescription = fetchOne($sql);
$id=$_REQUEST['id'];
$sql="select title from info_article where id='{$id}'";
$row=fetchOne($sql);
?>
<!--php header-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
  <?php 
    if($row['title']){
        echo $row['title'];
    }else{
      echo $webDescription['webTitle'];
    }
  ?>
  </title>
  <link rel="icon" href="images/favicon.ico" type="image/x-icon" /> 
  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/common.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

  <!-- nva start -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container" >
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a style="color:skyblue;" class="navbar-brand" href="index.php"><span><?php echo $webDescription['webTitle'];?></span></a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li>
            <a href="index.php">
              首页
              <span class="sr-only"></span>
            </a>
          </li>
          <li>
            <a href="list.php">科技</a>
          </li>
          <li>
            <a href="#">关于我</a>
          </li>
          <!-- <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              Dropdown
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="#">Action</a>
              </li>
            </ul>
          </li> -->
        </ul>
        <form class="navbar-form navbar-right" role="search" action="search.php" method="post">
          <div class="form-group">
            <input name="key" type="text" class="form-control" placeholder="Search"></div>
          <button type="submit" class="btn btn-info glyphicon glyphicon-search"></button>
        </form>
        <?php 
          if(isset($_SESSION['username'])){
             require('loginIn.php');
            }elseif(isset($_COOKIE['username'])){
              require('loginIn.php');
          }else{
            require('noLogin.php');
          }
        ?>
      </div>
      <!-- /.navbar-collapse -->

      <!-- /.container-fluid --> 
      </div>
  </nav>
  <!-- nav stop -->
 <!-- 模态弹出窗内容 -->
<div class="modal  fade" id="mymodal-login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h4 class="modal-title">登录</h4>
      </div>
      <div class="modal-body">

        <form class="form-signin" method="post" action="doAction.php?act=login">
          <h2 class="form-signin-heading">请登录</h2>
          <label for="inputEmail" class="sr-only">用户名</label>
          <input name="username" type="text"  class="form-control" placeholder="用户名" required autofocus>
          <label for="inputPassword" class="sr-only">密码</label>
          <input name="password" type="password" id="inputPassword" class="form-control" placeholder="密码" required>
          <!-- <div class="captcha" >
            <label class="sr-only">验证码</label>
            <input id="captcha_in" type="text" class="form-control" placeholder="验证码" required></div>
          <div class="captcha">
            <img id="captcha_img" src="./getCaptcha.php?r=<?php echo rand(); ?>
            " alt="验证码" />
            <a href="javascript:;" onclick="captchaChange()">换一个</a>
          </div>
          <div style="clear: both;"></div> -->
          <div class="checkbox">
            <label>
              <input name="autoFlag" type="checkbox" value="remember-me">自动登陆</label>
          </div>
          <button class="btn btn-lg btn-info btn-block" type="submit">登录</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>

      </div>
    </div>
  </div>
</div>
<!-- login in alert stop -->
<!-- 注册 alert start-->
<!-- 模态弹出窗内容 -->
<div class="modal  fade" id="mymodal-reg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h4 class="modal-title">注册</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal form-admin" action="doAction.php?act=reg" method="post" id="regForm">
          <div class="form-group" id="inputUser">
            <label for="inputUser" class="col-sm-3 control-label">用户名</label>
            <div class="col-sm-7">
              <input name="username" type="text" class="form-control"  placeholder="用户名">
              <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
              <span id="helpBlock" class="help-block">5-25个字符，一个汉字为两个字符</span>
            </div>
          </div>
          <div class="form-group" id="inputPassword1">
            <label for="inputPassword1" class="col-sm-3 control-label">密码</label>
            <div class="col-sm-7">
              <input name="password" type="password" class="form-control"  placeholder="请输入密码">
              <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
              <span id="helpBlock" class="help-block">6-16个字符，使用字母加数字或符号的组合密码</span>
            </div>
          </div>
          <div class="form-group"  id="inputPassword2">
            <label for="inputPassword2" class="col-sm-3 control-label">再次输入密码</label>
            <div class="col-sm-7">
              <input type="password" class="form-control" placeholder="请再次输入密码" disabled>
              <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
              <span id="helpBlock" class="help-block">请再次输入密码</span>
            </div>
          </div>
          <div class="form-group" id="inputEmail" >
            <label for="inputEmail" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-7 " >
              <input name="email" type="email" class="form-control" placeholder="请输入邮箱">
              <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
              <span id="helpBlock" class="help-block">请输入你的邮箱</span>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail1" class="col-sm-3 control-label">头像</label>
            <div class="col-sm-7">
              <span id="helpBlock" class="help-block">将随机为您产生一个头像</span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">性别</label>
            <div class="radio col-sm-7">
              <label>
                <input type="radio" name="sex" id="sex1" value="1" checked>男</label>
              <label>
                <input type="radio" name="sex" id="sex1" value="2">女</label>
            </div>

          </div>
          <div class="form-group">
            <div class="col-sm-offset-5 col-sm-5">
              <button id="submit1" type="submit" class="btn btn-info">注册</button>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button  type="button" class="btn btn-default" data-dismiss="modal" >关闭</button>

      </div>
    </div>
  </div>
</div>
<!-- 注册 alert stop -->
  <!--php header-->