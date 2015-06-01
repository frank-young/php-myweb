<?php
/**
 * [分页函数]
 * @param  [type] $page      [页数]
 * @param  [type] $totalPage [总页数]
 * @param  string $sep       [分割符]
 * @return [type]            []
 */
function showPage($page,$totalPage,$sep="&nbsp;"){
    $index = ($page ==1)?"<li><a href='#'>首页</a></li>":"<li><a href='{$url}?page=1'>首页</a></li>";
	$last = ($page ==$totalPage)?"<li><a href='#'>尾页</a></li>":"<li><a href='{$url}?page={$totalPage}'>尾页</a></li>";
	$prev = ($page ==1)?"<li><a href='#' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>":"<li><a href='{$url}?page=".($page-1)."aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>";
	$next = ($page ==$totalPage)?"<li><a href='#' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>":"<li><a href='{$url}?page=".($page+1)."aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>";
	$offset = ($page-1)*$pageSize;
	$url = $_SERVER['PHP_SELF'];
	for($i=1;$i<=$totalPage;$i++){ 
	//当前页无链接
		if($page ==$i){
		$p.="<li><a href='#'>{$i}</a></li>";
	 	}else{ 
	 	$p.="<li><a href='{$url}?page={$i}'>{$i}</a></li>";
	 	}
	}
	$pageStr = $index.$prev.$p.$next.$last;
	return $pageStr;
}
 