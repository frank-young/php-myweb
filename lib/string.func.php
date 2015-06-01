<?php
//生成唯一字符串
function getUniName(){
	return md5(uniqid(microtime(true),true));
}
//得到文件扩展名
function getExit($filename){
	return strtolower(end(explode(".", $filename)));
}