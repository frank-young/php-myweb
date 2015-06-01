<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>后台登录页面</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style type="text/css">
</style>
</head>
<body>  
  <div class="container">
      <form class="form-signin" action="doLogin.php" method="post">
        <h2 class="form-signin-heading">请登录</h2>
        <label  class="sr-only">用户名</label>
        
        <input type="text" name="username"  class="form-control" placeholder="用户名" required autofocus>
        <label class="sr-only">密码</label>
        <input type="password" name="password"class="form-control" placeholder="密码" required>
        <div class="captcha" >
          <label class="sr-only">验证码</label>
          <input name="captcha" id="captcha" type="text" class="form-control" placeholder="验证码" required> 
        </div>
        <div class="captcha">
          <img id="captcha_img" src="./getCaptcha.php?r=<?php echo rand(); ?>" alt="验证码" />
      <a href="javascript:;" onclick="captchaChange()">换一个</a>
        </div>
        <div style="clear: both;"></div>
        <div class="checkbox">
          <label>
            <input name="autoFlag" type="checkbox" value="remember-me">一周内自动登陆
          </label>
        </div>
        <button class="btn btn-lg btn-info btn-block" type="submit">登录</button>
      </form>

    </div> <!-- /container -->

  <script src="../js/jquery-2.1.4.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script type="text/javascript">
  function captchaChange(){
    var cap = document.getElementById("captcha_img");
    cap.src = './getCaptcha.php?r='+Math.random();
  }
  </script>
</body>
</html>