<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/3
 * Time: 22:18
 */
$str = 6;
$str1 = "hello";
unset($str1);
echo "<br>";
echo "str1=".$str1;
echo (unset)$str;
echo "<br>";
echo "str=".$str;

function destroy_foo() {
    global $foo;
    unset($foo);
}

$foo = 'bar';
destroy_foo();
echo $foo;