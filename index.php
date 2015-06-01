<?php
require('header.php');
require_once 'include.php';
$sql = "select * from info_article";
$totalRows = getResultNum($sql);
$pageSize = 6;
$totalPage = ceil($totalRows/$pageSize);
$page = $_REQUEST['page']?(int)$_REQUEST['page']:1;
if($page<1||$page == null|| !is_numeric($page)){
    $page=1;
}
if($page>=$totalPage){ 
    $page = $totalPage;
}
$offset = ($page-1)*$pageSize;
$sql = "select id,title,description,imagePath from info_article  limit {$offset},{$pageSize}";
$rows = fetchAll($sql);
?>
<style type="text/css">
body{padding-top: 50px;}
</style>
  <!-- 轮换图 start-->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <!-- <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li> -->
    <?php $i=1; foreach ($rows as $row): if($row['imagePath']){?>
      <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>" ></li>
    <?php }$i++; endforeach; ?>

    </ol>
    <div class="carousel-inner" role="listbox">

    <!--  <div class="item active">
          <img src="images/41f2aa33aa88eea5c87cfec4108915c4.jpg" alt="...">
          <div class="carousel-caption">
            <h1>Example headline.</h1>
            <p>
              Note: If you're viewing this page via a file:// URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.
            </p>
            <p>
              <a class="btn-lg btn-img" href="#" role="button">more</a>

            </p>
          </div>
        </div> -->
      <?php foreach ($rows as $row): if($row['imagePath']){ ?>
        <div class="item "  name="items">
          <img src="images/<?php echo trim($row['imagePath']);?>" alt="<?php echo $row['title']; ?>" >
          <div class="carousel-caption">
            <h1 style="white-space:nowrap;overflow:hidden;text-overflow:clip;"><?php echo $row['title']?></h1>
            <p style="white-space:nowrap;overflow:hidden;text-overflow:ellipsis">
              <?php echo $row['description']?>
            </p>
            <p>
              <a class="btn-lg btn-img" href="article.php?id=<?php echo $row['id']?>" role="button">more</a>

            </p>
          </div>
        </div>
       <?php } endforeach; ?>
      <!--  start-->
      <script type="text/javascript">
        //给循环的轮换图加上active属性
        var items = document.getElementsByName('items');
        items[0].setAttribute('class','item active');
      </script>
      <!--  stop -->
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <!-- 轮换图 stop-->
  <!-- 内容 start -->
  <div class="container" >
    <div class="row">
     <?php foreach ($rows as $row):?>
      <div class="col-sm-6 col-md-4" style="min-height:300px;">
        <h2><?php echo $row['title']; ?></h2>
        <p>
         <?php echo $row['description']; ?>
        </p>
        <p>
          <a class="btn btn-default" href="article.php?id=<?php echo $row['id']?>" role="button">详情 »</a>
        </p>
      </div>
        <?php endforeach;?>
    </div>
  </div>
  <!-- 内容 stop -->
<?php
require('footer.php');
?>