<?php
require('header.php');
require_once '../include.php';
$rows=getAllCate();
if(!$rows){
	alertMes("没有相应分类，请先添加分类!!", "addCate.php");
}
?>
<!-- 内容 start -->
<script type="text/javascript" charset="utf-8" src="../plugins/kindeditor/kindeditor.js"></script>
<script type="text/javascript" charset="utf-8" src="../plugins/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
<script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
        });

</script>
<h2 class="sub-header">添加文章</h2>
<form class="form-horizontal" method="post" action="doAdminAction.php?act=addArticle" enctype="multipart/form-data">
	<div class="form-group">
		<label for="inputTitle" class="col-sm-2 control-label">文章标题</label>
		<div class="col-sm-9">
			<input name="title" type="text" class="form-control" id="inputTitle" placeholder="标题"></div>
	</div>
	<div class="form-group">
		<label for="inputAuthor" class="col-sm-2 control-label">作者</label>
		<div class="col-sm-9">
			<input name="author" type="text" class="form-control" id="inputAuthor" placeholder="作者"></div>
	</div>
	<div class="form-group">
		<label for="inputTitle" class="col-sm-2 control-label">所属分类</label>
		<div class="col-sm-9">
			<select class="form-control" name="cId">
				<?php foreach ($rows as $row):?>
					<option value="<?php echo $row['id'];?>"><?php echo $row['cName']; ?></option>
				<?php endforeach; ?>
			</select>

		</div>
	</div>
	<div class="form-group">
		<label for="inputAuthor" class="col-sm-2 control-label">文章简介</label>
		<div class="col-sm-9">
			<textarea name="description" class="form-control" rows="3"></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="inputAuthor"  class="col-sm-2 control-label">文章内容</label>
		<div class="col-sm-9">
			<textarea name="content" id="editor_id" class="form-control" style="width:100%;height:500px;"></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="inputAuthor" class="col-sm-2 control-label">首页焦点图</label>
		<div class="col-sm-9">
			<input name="imagePath" type="file" id="exampleInputFile">
    		<span class="help-block">上传图片将在首页焦点图显示</span>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-5">
			<button type="submit" class="btn btn-info">添加</button>
		</div>
	</div>
</form>

<!-- 内容 stop -->
<!-- phpadmin footer 部分 -->
<?php
require('footer.php');
?>