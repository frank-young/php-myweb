<?php
require('header.php');
?>
        <!-- 内容 start -->

        <h2 class="sub-header">添加管理员</h2>
        <form class="form-horizontal form-admin" action="doAdminAction.php?act=addAdmin" method ="post">
          <div class="form-group">
            <label for="inputUser" class="col-sm-2 control-label">管理员用户名</label>
            <div class="col-sm-6">
              <input type="text" name="username" class="form-control" id="inputUser" placeholder="管理员用户名">
              <span id="helpBlock" class="help-block">请输入管理员用户名</span>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword1" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-6">
              <input type="password" name="password" class="form-control" id="inputPassword1" placeholder="Password">
              <span id="helpBlock" class="help-block">请输入密码</span>
            </div>
          </div>
          <!-- <div class="form-group">
            <label for="inputPassword2" class="col-sm-2 control-label">再次输入</label>
            <div class="col-sm-6">
              <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
              <span id="helpBlock" class="help-block">请再次输入密码</span>
            </div>
          </div> -->
          <div class="form-group">
            <label for="inputEmail1" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-6">
              <input type="email" name="email" class="form-control" id="inputEmail1" placeholder="邮箱">
              <span id="helpBlock" class="help-block">请输入正确的邮箱</span>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-5">
              <button type="submit" class="btn btn-info">添加管理员</button>
            </div>
          </div>
        </form>

        <!-- 内容 stop -->
<?php
require('footer.php');
?>