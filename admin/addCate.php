<?php
require('header.php');
?>
        <!-- 内容 start -->
        <h2 class="sub-header">添加分类</h2>
        <form class="form-horizontal form-admin" action="doAdminAction.php?act=addCate" method ="post">
          <div class="form-group">
            <label for="inputCate" class="col-sm-2 control-label">分类名称</label>
            <div class="col-sm-7">
              <input type="text" name="cName" class="form-control" id="inputCate" placeholder="分类名称">
            </div>
          </div>
    
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-5">
              <button type="submit" class="btn btn-info">添加</button>
            </div>
          </div>
        </form>
        <!-- 内容 stop -->
<?php
require('footer.php');
?>