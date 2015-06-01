<?php
require('header.php');
require_once 'include.php';
$sql = "select * from info_article";
$totalRows = getResultNum($sql);
$pageSize = 5;
$totalPage = ceil($totalRows/$pageSize);
$page = $_REQUEST['page']?(int)$_REQUEST['page']:1;
if($page<1||$page == null|| !is_numeric($page)){
    $page=1;
}
if($page>=$totalPage){ 
    $page = $totalPage;
}
  $offset = ($page-1)*$pageSize;
  $sql = "select id,title,description from info_article limit {$offset},{$pageSize}";
  $rows = fetchAll($sql);

?>

<div class="container">
  <div class="row row-offcanvas row-offcanvas-right">
    <div class="col-xs-12 col-sm-9" style="background:#fff;">
      <ol class="breadcrumb">
        <li>
          <a href="index.php">首页</a>
        </li>
        <li class="active">列表页</li>
      </ol>
      <p class="pull-right visible-xs">
        <a href="#" type="button" class="glyphicon glyphicon-menu-left" data-toggle="offcanvas"></a>
      </p>
      <?php foreach ($rows as $row):?>
        <h2 style="margin-top:30px;"><?php echo $row['title']; ?></h2>
        <p><?php echo $row['description']; ?> </p>
        <p>
          <a class="btn btn-default" href="article.php?id=<?php echo $row['id']?>" role="button">详情 »</a>
        </p>
        <hr>
        <?php endforeach;?>
      <!--page-->
       <nav><ul class='pagination'>
            <?php if($rows>$pageSize):
                echo showPage($page,$totalPage);
            endif; ?>
        </ul></nav>
    </div>

    <?php
require('sidebar.php');
?>
</div>
</div>
<?php
require('footer.php');
?>