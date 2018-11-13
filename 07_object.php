<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/3
 * Time: 21:08
 */
header("Content-type: text/html; charset=utf-8");
$myarr = array("3"=>5,6,7,8,9,"10");
$ob = (object)$myarr;
var_dump($ob);
echo "<br>";
$ob_Array= (array)$ob;

var_dump("转回来了：",$ob_Array);
//echo $ob->{1};
echo "<br>";
$obj = (object) array('1' => 'foo');
var_dump(isset($obj->{'1'})); // outputs 'bool(false)'
echo "<br>";
var_dump($obj->{'1'});
echo "<br>";
var_dump(key($obj)); // outputs 'int(1)'
echo "<br>";
?>