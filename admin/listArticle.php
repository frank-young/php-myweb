<?php
require('header.php');
require_once '../include.php';
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
$sql = "select a.id,a.title,a.author,a.dateline,c.cName from info_article as a join info_cate c on a.cId=c.id limit {$offset},{$pageSize}";
$rows = fetchAll($sql);
if(!$rows){ 
    alertMes("sorry，没有文章，请添加","addArticle.php");
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
                <th>文章名称</th>
                <th>所属分类</th>
                <th>作者</th>
                <th>发布时间</th>
                <th>操作</th>
              </tr>
            </thead>
            <tbody>
             <?php $i=1; foreach ($rows as $row): ?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $row['title'];?></td>
                  <td><?php echo $row['cName'];?></td>
                  <td><?php echo $row['author'];?></td>
                  <td><?php echo date('Y-m-d', $row['dateline']);?></td>
                  <td>
                    <a class="btn btn-sm btn-success" href="#" role="button" onclick="aboutArticle(<?php echo $row['id'];?>)">详情</a>
                    <a class="btn btn-sm btn-info" href="#" role="button" onclick="editArticle(<?php echo $row['id'];?>)">修改</a>
                    <a class="btn btn-sm btn-danger" href="#" role="button" onclick="delArticle(<?php echo $row['id'];?>)">删除</a>
                  </td>
                </tr>
              <?php $i++; endforeach; ?>
            </tbody>
          </table>
        </div>
         <nav><ul class='pagination'>
            <?php if($rows>$pageSize):
                echo showPage($page,$totalPage);
            endif; ?>
            </ul></nav>
        <!-- 内容 stop -->
<script>
function aboutArticle(id){ 
    window.location="../article.php?id="+id;
}
function editArticle(id){ 
    window.location="editArticle.php?id="+id;
}
function delArticle(id){ 
    if(window.confirm("你确定要删除吗？")){
        window.location = "doAdminAction.php?act=delArticle&id="+id;
    }
}
</script>
<?php
require('footer.php');
?>