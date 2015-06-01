<?php
require('header.php');
require_once '../include.php';
$page = $_REQUEST['page']?(int)$_REQUEST['page']:1;
$sql = "select * from info_cate";
$totalRows = getResultNum($sql);
$pageSize = 3;
$totalPage = ceil($totalRows/$pageSize);
if($page<1||$page == null|| !is_numeric($page)){ 
    $page=1;
}
if($page>=$totalPage){ 
    $page = $totalPage;
}
$offset = ($page-1)*$pageSize;
$sql = "select id,cName from info_cate limit {$offset},{$pageSize}";
$rows = fetchAll($sql);
if(!$rows){ 
    alertMes("sorry，没有分类，请添加","addCate.php");
    exit;
}
?>
        <!-- 内容 start -->
        <h2 class="sub-header">文章列表</h2>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>编号</th>
                <th>分类名称</th>
                
                <th>操作</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1; foreach ($rows as $row): ?>
              <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $row['cName'];?></td>
                <td>
                  <a class="btn btn-sm btn-info" href="#" role="button" onclick = "editCate(<?php echo $row['id'];?>)">修改</a>
                  <a class="btn btn-sm btn-danger" href="#" role="button" onclick = "delCate(<?php echo $row['id'];?>)">删除</a>
                </td>
              </tr>
              <?php $i++; endforeach; ?>
              

            </tbody>
          </table>
        </div>
        <nav>
          <ul class='pagination'>
          <?php if($rows>$pageSize):
            echo showPage($page,$totalPage);
          endif; ?>
          </ul>
         </nav>
        <!-- 内容 stop -->
  <script>
  function editCate(id){ 
    window.location="editCate.php?id="+id;
  }
  function delCate(id){ 
    if(window.confirm("你确定要删除吗？")){
      window.location = "doAdminAction.php?act=delCate&id="+id;
    }
  }
  </script>
<?php
require('footer.php');
?>