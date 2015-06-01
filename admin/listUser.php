<?php
require('header.php');
require_once '../include.php';
$sql = "select * from info_user";//获取结果集；
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
$sql = "select id,username,email from info_user limit {$offset},{$pageSize}";
$rows = fetchAll($sql);
if(!$rows){
  alertMes("sorry,没有用户,请添加!","addUser.php");
  exit;
}
?>
        <!-- 内容 start -->
        <h2 class="sub-header">用户列表</h2>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>编号</th>
                <th>用户名称</th>
                <th>用户邮箱</th>
                <th>操作</th>
              </tr>
            </thead>
            <tbody>
            <?php  foreach($rows as $row):?>
              <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['email'];?></td>
               
                <td>
                  <a class="btn btn-sm btn-info" href="#" role="button" onclick="editUser(<?php echo $row['id'];?>)">修改</a>
                  <a class="btn btn-sm btn-danger" href="#" role="button" onclick="delUser(<?php echo $row['id'];?>)">删除</a>
                </td>
              </tr>
            <?php endforeach;?>

            </tbody>
          </table>
        </div>
        <nav><ul class='pagination'>
            <?php if($rows>$pageSize):
                echo showPage($page,$totalPage);
            endif; ?>
        </ul></nav>
        <!-- 内容 stop -->
<script type="text/javascript">
  function editUser(id){
      window.location="editUser.php?id="+id;
  }
  function delUser(id){
      if(window.confirm("您确定要删除吗？删除之后不可以恢复哦！！！")){
        window.location="doAdminAction.php?act=delUser&id="+id;
      }
  }
</script>
<?php
require('footer.php');
?>