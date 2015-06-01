<?php
// 上一篇：
$queryQ = 'select * from article where id < '.$id.' order by id desc limit 0,1';
$resultQ = mysql_query($queryQ) or die ('错误：' . mysql_error());
$rsQ = mysql_fetch_object($resultQ);
// 下一篇：
$queryH = 'select * from article where id > '.$id.' order by id asc limit 0,1';
$resultH = mysql_query($queryH) or die ('错误：' . mysql_error());
$rsH = mysql_fetch_object($resultH);
// 原理，查询比当前ID小（where id < '.$id.'上一篇）和比当前ID大（where id > '.$id.'下一篇）的1条（limit 0,1）数据，并按倒序（desc，上一篇）和正序（asc，下一篇）显示出来，当只取一篇的时候，可以省略倒序或正序。