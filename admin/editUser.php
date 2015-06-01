<?php
require('header.php');
require_once '../include.php';
$id=$_REQUEST['id'];
$sql="select id,username,password,email,sex from info_user where id='{$id}'";
$row=fetchOne($sql);
?>

        <!-- 内容 start -->

        <h2 class="sub-header">添加用户</h2>
        <form class="form-horizontal form-admin" action="doAdminAction.php?act=editUser&id=<?php echo $id;?>" method="post" >
          <div class="form-group">
            <label for="inputUser" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-6">
              <input name="username" type="text" class="form-control" id="inputUser" placeholder="<?php echo $row['username'];?>">
              <span id="helpBlock" class="help-block">请输入用户名</span>
            </div>
          </div>
          <div class="form-group">
            <label name="password" for="inputPassword1" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-6">
              <input type="password" class="form-control" id="inputPassword1" placeholder="<?php echo $row['password'];?>">
              <span id="helpBlock" class="help-block">请输入密码</span>
            </div>
          </div>
          <div class="form-group">
            <label name="email" for="inputEmail1" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-6">
              <input name="email" type="email" class="form-control" id="inputEmail1" placeholder="<?php echo $row['email'];?>">
              <span id="helpBlock" class="help-block">请输入正确的邮箱</span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">性别</label>
           <div class="radio col-sm-6">
             <label>
               <input type="radio" name="sex" id="sex1" value="1" <?php echo $row['sex']=="男"?"checked='checked'":null;?> />男
             </label>
      
             <label>
               <input type="radio" name="sex" id="sex1" value="2"<?php echo $row['sex']=="女"?"checked='checked'":null;?> />女
             </label>
           </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-5">
              <button type="submit" class="btn btn-info">编辑用户</button>
            </div>
          </div>
        </form>

        <!-- 内容 stop -->
<?php
require('footer.php');
?>