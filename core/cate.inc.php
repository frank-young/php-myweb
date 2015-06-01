<?php
/**
 * [添加文章分类]
 */
function addCate(){ 
	$arr = $_POST;
	if(insert("info_cate",$arr)){ 
		$mes = "分类添加成功！ <br><a href='addCate.php'>继续添加</a>|<a href='listCate.php'>查看分类</a><br>";
	}else{ 
		$mes = "分类添加失败！ <br> <a href='addCate.php'>重新添加</a>|<a href='listCate.php'>查看分类</a><br>";
	}
	return $mes;
}
/**
 * [根据id得到指定的信息]
 * @param  [type] $id [id]
 * @return [type]     []
 */
function getCateById($id){ 
	$sql = "select id,cName from info_cate where id ='{$id}'";
	return fetchOne($sql);
}
/**
 * [修改分类]
 * @param  [type] $id []
 * @return [type]     []
 */
function editCate($id){
	$arr = $_POST;
	if(update("info_cate",$arr,"id={$id}")){ 
		$mes = "分类修改成功！<br> <a href='addCate.php'>重新修改</a>|<a href='listCate.php'>查看分类</a><br>";
	}else{ 
		$mes = "分类修改失败！<br> <a href='addCate.php'>重新修改</a>|<a href='listCate.php'>查看分类</a><br>";
	}
	return $mes;
}
/**
 * [删除分类]
 * @param  [type] $id []
 * @return [type]     []
 */
function delCate($id){ 
	$res=checkArticleExist($id);
	if(!$res){
		if(delete1("info_cate","id={$id}")){ 
			$mes = "删除成功! <br /><a href='listCate.php'>查看分类列表</a><a href='addCate.php'></a>";
		}else{ 
			$mes = "删除失败！<br /> <a href='listCate.php'>重新删除</a>";
		}
	}else{
		alertMes("不能删除分类，请先删除该分类下的商品", "listArticle.php");
	}
	return $mes;
}
/**
 * [得到所有分类]
 * @return [type] [返回所有结果集]
 */
function getAllCate(){
	$sql = "select id,cName from info_cate";
	$rows = fetchAll($sql);
	return $rows;
}
/**
 * [得到分类下文章数量]
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
function getCateNum($id){
$sql = "select * from info_article where cId={$id}";
return getResultNum($sql);
}