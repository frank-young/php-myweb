<?php
/**
 * [弹出提示框和跳转页面]
 * @param  [type] $mes [提示信息]
 * @param  [type] $url [跳转链接]
 * @return [type]      []
 */
function alertMes($mes,$url){ 
	echo "<script>alert('{$mes}');</script>";
	echo "<script>window.location='{$url}';</script>";
}

