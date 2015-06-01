<?php
require('header.php');
require_once 'include.php';
$id=$_REQUEST['id'];
$sql="select * from info_article where id='{$id}'";
$row=fetchOne($sql);
//上下篇翻页
$sqlFirst = "select id from info_article order by id limit 1";//第一条记录的id
$rowFirst = fetchOne($sqlFirst);
$sqlLast = "select id from info_article order by id desc limit 1";//最后一条记录的id
$rowLast =fetchOne($sqlLast);
$sqlP = 'select id from info_article where id < '.$id.' order by id desc limit 0,1';//上一篇记录的id
$rowP = fetchOne($sqlP);
$sqlN = 'select id from info_article where id >'.$id.' order by id asc limit 0,1';//下一篇记录的id
$rowN = fetchOne($sqlN);
//判断用户是否登录
userCheck();
//获取评论信息
$sqlC = "select c.id,c.userName,c.comment,c.time,u.face from info_comment as c join info_user u on  c.userId=u.id where articleId='{$id}'";
$rowsComment = fetchAll($sqlC);
?>
<div class="container">
  <div class="row row-offcanvas row-offcanvas-right">
    <div class="col-xs-12 col-sm-9 article-left" style="background:#fff;">
      <ol class="breadcrumb">
        <li>
          <a href="index.php">首页</a>
        </li>
        <li>
          <a href="list.php">列表页</a>
        </li>
        <li class="active">
          <?php echo $row['title']; ?></li>
      </ol>
      <p class="pull-right visible-xs">
        <a href="#" type="button" class="glyphicon glyphicon-menu-left" data-toggle="offcanvas"></a>
      </p>
      <h2 class="text-center" style="margin-top:50px;">
        <?php echo $row['title']; ?></h2>
      <h4 class="text-center" style=" margin-bottom:50px;">
        <small>
          作者：<?php echo $row['author']; ?>&nbsp;&nbsp; 时间：<?php echo date('Y-m-d', $row['dateline']);?></small>
      </h4>
      <p>
        <?php echo $row['content']; ?></p>
      <nav style="margin:40px 100px;">
        <ul class="pager">
          <li class="previous">
            <a href="<?php if($id==$rowFirst['id']){echo '';}else{echo 'article.php?id='.$rowP['id'];}?>">
              <span aria-hidden="true">&larr;</span>上一篇
            </a>
          </li>
          <li class="next">
            <a href="<?php if($id==$rowLast['id']){echo '';}else{echo 'article.php?id='.$rowN['id'];}?>">下一篇
              <span aria-hidden="true">&rarr;</span>
            </a>
          </li>
        </ul>
      </nav>
      <hr>
      <!--comment start-->
      <?php 
        if($rowsComment){
          foreach($rowsComment as $rowC): ?>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object img-circle" width="64" height="64" src="<?php if($rowC['face']){echo $rowC['face'];}else{echo 'images/face/'.rand(1,7).".png";} ;?>" alt="face"></a>
              </div>
              <div class="media-body">
                <h4 class="media-heading"><a href="#"><?php echo $rowC['userName'];?></a>&nbsp;&nbsp; <small> <?php echo date('Y-m-d h:m:s', $rowC['time']);?></small></h4>
                <p>
                    <?php echo $rowC['comment'];?>
                </p>
              </div>
            </div>
             <hr>
      <?php endforeach;}?>
      <form class="form-horizontal form-admin" action="doAction.php?act=addComment&id=<?php echo $id; ?>&userId=<?php echo $userId; ?>&username=<?php echo $username; ?>" method ="post">
        <div class="form-group">
          <label for="inputCate" class="col-sm-2 control-label">发表评论</label>
          <div class="col-sm-10">
            <textarea name="comment" rows="4" class="form-control" id="inputCate" placeholder="在这里写评论..."></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-3">
            <span id="helpBlock1" class="help-block">登陆后才可以发表评论~</span>
          </div>
          <div class="col-sm-offset-4 col-sm-2">
            <button id="buttonComment" type="submit" class="btn btn-info" disabled>发表评论</button>
          </div>
        </div>
      </form>
      <!--comment stop--> 
    </div>
    <!-- 左边框架 stop -->
<?php if(isset($_SESSION['username'])){ ?>
<script>
var button=document.getElementById('buttonComment');
      button.removeAttribute('disabled');
      var help=document.getElementById('helpBlock1');
      help.innerHTML="尊敬的 <?php echo $_SESSION['username']; ?>，您可以发表评论了~";
</script>
<?php } ?>
<?php
  require('sidebar.php');
?>
  </div>
</div>
<?php
  require('footer.php');
?>