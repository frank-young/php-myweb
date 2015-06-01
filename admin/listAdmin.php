<?php
require('header.php');
require_once '../include.php';
$sql = "select * from info_admin";//获取结果集；
$totalRows = getResultNum($sql);//获取中结果集的数量
$pageSize = 3;//每个页面的条数
$totalPage = ceil($totalRows/$pageSize);//总页码，用ceil取整，进一取整
$page = $_REQUEST['page']?(int)$_REQUEST['page']:1;
if($page<1||$page == null|| !is_numeric($page)){ //转换不是1，或者是空，或者不是整形的$page;
    $page=1;
}
if($page>=$totalPage){ 
    $page = $totalPage;
}
$offset = ($page-1)*$pageSize;
$sql = "select id,username,email from info_admin limit {$offset},{$pageSize}";
$rows = fetchAll($sql);
if(!$rows){ 
    alertMes("sorry，没有管理员，请添加","addAdmin.php");
    exit;
}
?>
<!-- 内容 start -->
        <h2 class="sub-header">管理员列表</h2>
        <div class="table-responsive">
          <table class="table table-striped">
        <thead>
            <tr>
                <th>编号</th>
                <th>管理员名称</th>
                <th>管理员邮箱</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; foreach ($rows as $row): ?>
            <tr>
                <td>
                    <?php echo $i;?></td>
                <td>
                    <?php echo $row['username'];?></td>
                <td>
                    <?php echo $row['email'];?></td>
                <td>
                    <a class="btn btn-sm btn-info" href="#" role="button" onclick="editAdmin(<?php echo $row['id'];?>)">修改</a>
                    <a class="btn btn-sm btn-danger"  href="#" role="button" onclick="delAdmin(<?php echo $row['id'];?>)">删除</a>
                </td>
            </tr>
            <?php $i++; endforeach; ?></tbody>
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
function editAdmin(id){ 
    window.location="editAdmin.php?id="+id;
}
function delAdmin(id){ 
    if(window.confirm("你确定要删除吗？")){
        window.location = "doAdminAction.php?act=delAdmin&id="+id;
    }
}
</script>
<?php
require('footer.php');
?>