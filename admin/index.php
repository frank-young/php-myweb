<?php
require('header.php');
require_once '../include.php';
$sql1 = "select * from info_admin";
$adminNum = getResultNum($sql1);
$sql2 = "select * from info_user";
$userNum = getResultNum($sql2);
$sql3 = "select * from info_article";
$articleNum = getResultNum($sql3);
$sql4 = "select * from info_manager where id ='1'";
$webDescription = fetchOne($sql);
?>
        <!-- 内容 start -->
        <!-- jumbotrn start-->
        <div class="jumbotron">
          <h1>欢迎登陆</h1>
          <p class="lead">这是一个简单的信息平台系统,点击下面链接查看详细功能。</p>
          <p>
            <a class="btn btn-lg btn-success" href="../index.php" role="button">预览首页</a>
            <a class="btn btn-lg btn-info" href="#" role="button" data-toggle="modal" data-target="#myModal">功能简介</a>
          </p>

        </div>

        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">功能简介</h4>
              </div>
              <div class="modal-body">
              <?php echo $webDescription['webDescription'];?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-info">知道了</button>
              </div>
            </div>
          </div>
        </div>
        <!-- jumbotrn stop-->
          <div class="row num-total">
            <div class="col-xs-4 col-md-4 ">
              <h3>文章总数</h3>
              <p><span class="badge"><?php echo $articleNum; ?></span></p>
            </div>
            <div class="col-xs-4 col-md-4">
            <h3>用户总数</h3>
              <p><span class="badge"><?php echo $userNum; ?></span></p>
            </div>
            <div class="col-xs-4 col-md-4">
            <h3>管理员总数</h3>
             <p><span class="badge"><?php echo $adminNum; ?></span></p>
            </div>
          </div>

        <h2 class="sub-header">系统信息</h2>
        <div class="table-responsive">
          <table class="table table-striped table-bordered center">
            <tr>
              <th>操作系统</th>
              <td>
                <?php echo PHP_OS;?></td>
            </tr>
            <tr>
              <th>Apache版本</th>
              <td>
                <?php echo apache_get_version();?></td>
            </tr>
            <tr>
              <th>PHP版本</th>
              <td>
                <?php echo PHP_VERSION;?></td>
            </tr>
            <tr>
              <th>运行方式</th>
              <td>
                <?php echo PHP_SAPI;?></td>
            </tr>
          </table>
          </div>

         <h2 class="sub-header">软件信息</h2>
          <div class="table-responsive">
            <table class="table table-striped table-bordered center">
              <tr>
                <th>系统名称</th>
                <td><?php echo $webDescription['webTitle'];?></td>
              </tr>
              <tr>
                <th>开发人</th>
                <td><?php echo $webDescription['webAuthor'];?></td>
              </tr>
              <tr>
                <th>个人博客</th>
                <td>
                  <a href="<?php echo $webDescription['webBlog'];?>"><?php echo $webDescription['webBlog'];?></a>
                </td>
              </tr>
            
            </table>
          </div>
        <!-- 内容 stop -->
<?php
require('footer.php');
?>