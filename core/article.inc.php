<?php 
/**
 * [添加文章]
 */
function addArticle(){
	$arr=$_POST;
	$path="../images";
	$uploadFiles=uploadFile($path);
	$arr['imagePath']=trim($uploadFiles[0]['name']);
	$arr['dateline']=time();
	// print_r($arr['imagePath']);
	$res=insert("info_article",$arr);
	if($res){
		$mes="添加成功!<br/><a href='addArticle.php'>继续添加</a>|<a href='listArticle.php'>查看文章列表</a>";
	}else{
		$mes="<p>添加失败!</p><a href='addArticle.php'>重新添加</a>";
	}
	return $mes;
}
/**
 *[编辑文章]
 * @param  [type] $id [id]
 * @return [type] 
 */
function editArticle($id){
	$arr=$_POST;
	$arr['dateline']=time();
	$res=update("info_article",$arr,"id={$id}");
	if($res){
		echo $res;
		$mes="<p>编辑成功!</p><a href='listArticle.php'>查看文章列表</a>";
	}else{
		$mes="<p>编辑失败!</p><a href='listArticle.php' >重新编辑</a>";
	}
	return $mes;
}
/**
 * [删除文章]
 * @param  [type] $id [id]
 * @return [type]    
 */
function delArticle($id){
	if(delete1("info_article","id={$id}")){
		$mes="删除成功!<br/><a href='listArticle.php'>查看文章列表</a>";
	}else{
		$mes="删除失败!<br/><a href='listArticle.php'>请重新删除</a>";
	}
	return $mes;
}
/**
 * [检查分类下是否有文章]
 * @param int $cid
 * @return 
 */
function checkArticleExist($cid){
	$sql="select * from info_article where cId={$cid}";
	$rows=fetchAll($sql);
	return $rows;
}
