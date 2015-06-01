<?php
/**
 * [数据库链接]
 * @return [type] $link []
 */
function connect(){
	/*连接数据库*/
	$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD)or die("数据库连接失败!");
	/*设定字符集*/
	mysql_set_charset(DB_CHARSET);
	/*选择数据库*/
	mysql_select_db(DB_DBNAME) or die("指定数据库打开失败!");
	return $link;
}
/**
 * [插入操作]
 * @param  [string] $table [表名]
 * @param  [array] $array [POST过来的数组]
 * @return [type]  mysql_insert_id()  []
 */
function insert($table,$array){
	$keys = join(",",array_keys($array));//得到数组中的键名，变成字段名
	$vals = "'".join(" ',' ",array_values($array))."'"; //  'a,b,c'
	$sql = "insert into {$table} ($keys) values ({$vals})";
	mysql_query($sql);
	return mysql_insert_id();
}
/**
 * [更新操作]
 * @param  [string] $table [表名]
 * @param  [array] $array [POST过来的数组]
 * @param  [string] $where [where]
 * @return [type]        []
 */
 function update($table,$array,$where=null){
 	foreach ($array as $key => $val) {
 		if($str==null){
 			$sep ="";
 		}else{ 
 			$sep = ",";
 		}
 		$str .=$sep.$key."='".$val."'";
 	}
 		$sql = "update {$table} set {$str} ".($where ==null?null:" where ".$where);//一定要有空格
 		$result = mysql_query($sql);
 		if($result){
 			return mysql_affected_rows();
 		}else{ 
 			return false;
 		}
 }
 /**
  * [删除操作]
  * @param  [type] $table [表]
  * @param  [type] $where [POST过来的数组]
  * @return [type]        [返回记录集]
  */
  function delete1($table,$where=null){ 
 	$where=$where==null?null:" where ".$where;
 	$sql = "delete from {$table} {$where}";
 	mysql_query($sql);
 	return mysql_affected_rows();
 }
 /**
  * [查询一条记录]
  * @param  [type] $sql         [sql语句]
  * @param  [type] $result_type [结果集默认是关联数组类型]
  * @return [type] $row         [返回查询记录]
  */
 function fetchOne($sql,$result_type=MYSQL_ASSOC){ 
 	$result = mysql_query($sql);
 	@$row = mysql_fetch_array($result,$result_type);
 	return $row;
 }
/**
 * [得到结果集中所有记录]
 * @param  [type] $sql         []
 * @param  [type] $result_type []
 * @return [type]              []
 */
 function fetchAll($sql,$result_type=MYSQL_ASSOC){
	 $result = mysql_query($sql);
	 while(@$row = mysql_fetch_array($result,$result_type)){ 
	 	$rows[] = $row;
	 }
	 return $rows;
}
/**
 * [得到结果集中的记录条数]
 * @param  [type] $sql []
 * @return [type]      []
 */
function getResultNum($sql){ 
	$result = mysql_query($sql);
	return mysql_num_rows($result);
}
/**
 * [得到上一步插入记录id号]
 * @return [type] []
 */
function getInsertId(){
	return mysql_insert_id();
}
