<?php
/**
 * Created by PhpStorm.
 * User: Jacky
 * Date: 2017/5/5
 * Time: 8:09
 */
// 合法的常量名
define("FOO",     "something");
define("FOO2",    "something else");
define("FOO_BAR", "something more");

echo FOO;
define("FOO",     "something1");
echo FOO.'<br>';