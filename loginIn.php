<ul class="nav navbar-nav navbar-right">
	<li>
		<a href="#">欢迎登录  
		<?php 
          if(isset($_SESSION['username'])){
              echo $_SESSION['username'];
            }elseif(isset($_COOKIE['username'])){
              echo $_COOKIE['username'];
          }
        ?></a>
	</li>
	<li>
		<a href="doAction.php?act=userOut">退出</a>
	</li>
</ul>