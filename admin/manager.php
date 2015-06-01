<?php 
require ('header.php');
$id = 1;
$sql = "select * from info_manager where id ='{$id}'";
$row = fetchOne($sql);
?>
<!-- 内容 start-->
  <h2 class="sub-header">站点配置</h2>
        <form class="form-horizontal form-admin" action="doAdminAction.php?act=manager&id=1" method ="post">
          <div class="form-group">
            <label  class="col-sm-2 control-label">站点名称</label>
            <div class="col-sm-7">
              <input name="webTitle" type="text" class="form-control" value="<?php echo $row['webTitle']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-2 control-label">meta描述</label>
            <div class="col-sm-7">
              <input name="webMeta" type="text" class="form-control"  value="<?php echo $row['webMeta'];?>">
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-2 control-label">网站功能简介</label>
            <div class="col-sm-7">
            	<textarea rows="5" name="webDescription" type="text" class="form-control"><?php echo $row['webDescription'];?></textarea>
            </div>
          </div>
           <div class="form-group">
            <label  class="col-sm-2 control-label">网站作者</label>
            <div class="col-sm-7">
            	<input rows="5" name="webAuthor" type="text" class="form-control" value="<?php echo $row['webAuthor'];?>">
            </div>
          </div>
           <div class="form-group">
            <label  class="col-sm-2 control-label">个人博客</label>
            <div class="col-sm-7">
            	<input rows="5" name="webBlog" type="text" class="form-control" value="<?php echo $row['webBlog'];?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-5">
              <button type="submit" class="btn btn-info">保存</button>
            </div>
          </div>
        </form>
<!-- 内容 stop-->
<?php 
require ('footer.php');
?>