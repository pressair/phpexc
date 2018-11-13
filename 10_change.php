<?php
/**
 * Created by PhpStorm.
 * User: Jacky
 * Date: 2017/5/4
 * Time: 15:46
 */
$foo = 10;   // $foo is an integer
$bar = (boolean) $foo;   // $bar is a boolean
if ($bar)
{
    echo "yes bar=".$bar;
}
else
{
    echo "no bar=".$bar;
}
//echo $bar;
$string ="ABCDEF";
$binary = (binary)$string;
$binary = b"binary string";


echo '<br> $binary='.$binary;


$num = 0b10101;
echo $num;
echo "<br>";

$foo = 10;            // $foo 是一个整数
$str = "$foo";        // $str 是一个字符串
$fst = (string) $foo; // $fst 也是一个字符串

echo $str;

echo "<br>";
// 输出 "they are the same"
if ($fst === $str) {
    echo "they are the same";
}