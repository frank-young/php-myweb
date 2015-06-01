<?php 
header("content-type:text/html;charset=utf-8");
session_start();
require_once 'lib/mysql.func.php';
require_once 'lib/image.func.php';
require_once 'lib/common.func.php';
require_once 'lib/string.func.php';
require_once 'lib/page.func.php';
require_once 'lib/upload.func.php';
require_once "configs/configs.php";
require_once 'core/admin.inc.php';
require_once 'core/cate.inc.php';
require_once 'core/user.inc.php';
require_once 'core/article.inc.php';
require_once 'core/comment.inc.php';
connect();