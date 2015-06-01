<?php
require_once '../include.php';
checkLogined();
$sql = "select * from info_manager where id ='1'";
$webDescription = fetchOne($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo $webDescription['webTitle'];?>后台管理系统</title>
  <link rel="icon" href="../images/favicon.ico" type="image/x-icon" /> 
  <link href="dashboard.css" rel="stylesheet">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/adminCommon.css">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header" >
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only"><?php echo $webDescription['webTitle'];?>后台管理系统</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><?php echo $webDescription['webTitle'];?>后台管理系统</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#">欢迎登录
              <?php 
                if(isset($_SESSION['adminName'])){
                    echo $_SESSION['adminName'];
                }elseif(isset($_COOKIE['adminName'])){
                    echo $_COOKIE['adminName'];
                }
             ?>
            </a>
          </li>
          <li>
            <a href="doAdminAction.php?act=logout">退出</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right nav-dis">
          <li>
            <a href="index.php" >后台首页</a>
          </li>
          <li>
            <a href="#" data-toggle="dropdown">
              文章管理
              <span class="caret"></span>
            </a>
             <ul class="dropdown-menu">
              <li>
                <a href="addArticle.php">添加文章</a>
              </li>
              <li>
                <a href="listArticle.php">文章列表</a>
              </li>
            </ul>

          </li>
          <li>
            <a href="#" data-toggle="dropdown">
              分类管理
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="addCate.php">添加分类</a>
              </li>
              <li>
                <a href="listCate.php">分类列表</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#" data-toggle="dropdown">
              用户管理
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="addUser.php">添加用户</a>
              </li>
              <li>
                <a href="listUser.php">用户列表</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#" data-toggle="dropdown">
              管理员管理
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="addAdmin.php">添加管理员</a>
              </li>
              <li>
                <a href="listAdmin.php">管理员列表</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="manager.php" >后台管理</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
          <li>
            <a href="index.php" >后台首页</a>
          </li>
          <li>
            <a href="#" data-toggle="dropdown">
              文章管理
              <span class="caret"></span>
            </a>
             <ul class="dropdown-menu">
              <li>
                <a href="addArticle.php">添加文章</a>
              </li>
              <li>
                <a href="listArticle.php">文章列表</a>
              </li>
            </ul>

          </li>
          <li>
            <a href="#" data-toggle="dropdown">
              分类管理
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="addCate.php">添加分类</a>
              </li>
              <li>
                <a href="listCate.php">分类列表</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#" data-toggle="dropdown">
              用户管理
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="addUser.php">添加用户</a>
              </li>
              <li>
                <a href="listUser.php">用户列表</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#" data-toggle="dropdown">
              管理员管理
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="addAdmin.php">添加管理员</a>
              </li>
              <li>
                <a href="listAdmin.php">管理员列表</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="manager.php" >后台管理</a>
          </li>
        </ul>
      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<!-- phpadmin footer 部分 -->