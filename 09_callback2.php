<?php
/**
 * Created by PhpStorm.
 * User: Jacky
 * Date: 2017/5/4
 * Time: 13:58
 */

//
// Our closure
$double = function($a) {
    return $a * 2;
};

// This is our range of numbers
$numbers = range(1, 5);

$


// Use the closure as a callback here to
// double the size of each element in our
// range

// array_map 的第一个参数就是callback，它把后面的数组依次计算生成新数组

$new_numbers = array_map($double, $numbers);

print implode(' ', $new_numbers);
?>