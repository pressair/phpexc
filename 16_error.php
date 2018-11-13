<?php
/**
 * Created by PhpStorm.
 * User: Jacky
 * Date: 2017/5/5
 * Time: 13:15
 * http://php.net/manual/zh/reserved.variables.phperrormsg.php
 */

header("Content-type: text/html; charset=gb2312");
$key = @10/0;

echo $php_errormsg;

$output = `dir /w`;
echo "<pre>$output</pre>";


$output = @`c:\windows\system32\notepad.exe`;

echo "<pre>$output</pre>";
echo $php_errormsg;


?>

