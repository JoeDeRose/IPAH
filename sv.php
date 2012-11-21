<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?PHP

foreach($_SERVER as $key_name => $key_value) {
print $key_name . " = " . $key_value . "<br>";
}

?>
<hr />
<?php
print '[' . preg_replace( '/\/(.+)\.php/i', '$1', $_SERVER['SCRIPT_NAME'] ) . ']';
?>
<?php
$test = "hello"
?>
<p class="<?=$test?>">test</p>
</body>
</html>
