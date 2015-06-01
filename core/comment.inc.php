<?php
function addComment($id,$userId,$username){ 
	$arr = $_POST;
	$arr['articleId']=$id;
	$arr['userId'] = $userId;
	$arr['userName'] = $username;
	$arr['time']=time();
	if(insert("info_comment",$arr)){ 
		echo "<div style='padding: 40px 15px;text-align: center;'><p class='lead'>评论成功!<br/>1 秒钟后跳转回去!</p></div><meta http-equiv='refresh' content='1;url=article.php?id=".$id."'/>";
	}else{ 
		echo "<div style='padding: 40px 15px;text-align: center;'><p class='lead'>评论失败!<br/>1 秒钟后跳转回去!</p></div><meta http-equiv='refresh' content='1;url=article.php?id=".$id."'/>";
	}
	return $mes;
}