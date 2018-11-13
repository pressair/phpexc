<?php
/**
 * Created by PhpStorm.
 * User: Jacky
 * Date: 2017/4/28
 * Time: 11:24
 */

// 取得字符串的第一个字符
$str = 'This is a test.';
$first = $str[0];

// 取得字符串的第三个字符
$third = $str[2];

// 取得字符串的最后一个字符
$str = 'This is still a test.';
$last = $str[strlen($str)-1];

// 修改字符串的最后一个字符
$str = 'Look at the sea';
$str[strlen($str)-1] = 'e';
echo $first."<br>";
echo $first = 'Hello World';


$input = array('A: XXX', 'B: XXX', 'C: XXX');
$replace = array('AAA', 'BBB', 'CCC');
echo implode('; ', substr_replace($input, $replace, 3, 3))."\n";




?>