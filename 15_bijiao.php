<?php
/**
 * Created by PhpStorm.
 * User: Jacky
 * Date: 2017/5/5
 * Time: 8:39
 */

$arr = array(1,2,3,4);
$arr1 = array(1,2,3,4,5);

class hh
{
    var $aa ;

}

$myclass = new hh;

$myclass->aa="office";

echo  ($arr1>$arr) ? "yes":"no";
echo "<br>";
echo  ($arr1<$myclass) ? "yes":"no";

$a = null;
$b = null;
$c = "dsds";
echo $a??$b??$c;

define('__ROOT__', __DIR__);
echo __ROOT__;