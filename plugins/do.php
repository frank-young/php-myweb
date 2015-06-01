<?php
if (get_magic_quotes_gpc()) {
    function stripslashes_deep($value)
    {
        $value = is_array($value) ?
                    array_map('stripslashes_deep', $value) :
                    stripslashes($value);

        return $value;
    }

    $_POST = array_map('stripslashes_deep', $_POST);
    $_GET = array_map('stripslashes_deep', $_GET);
    $_COOKIE = array_map('stripslashes_deep', $_COOKIE);
    $_REQUEST = array_map('stripslashes_deep', $_REQUEST);
}


?>
<html>
<head>
<meta charset="utf-8">
<title>-.-</title>

<script type="text/javascript" charset="utf-8" src="kindeditor/kindeditor.js"></script>
<script type="text/javascript" charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
        });

</script>
</head>
<body>
	<?php $text = $_POST['pDesc'];
echo $text;?>
</body>