<?php
/**
 * Created by PhpStorm.
 * User: Jacky
 * Date: 2017/4/28
 * Time: 14:09
 */

$array = array(
    "foo" => "bar",
    "bar" => "foo",
);


var_dump($array);

echo "<br>";
$array = array(
    -50 => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);

var_dump($array);
echo "<br>";
echo "<br>";
$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
        "dimensional" => array(
            "array" => "foo"
        )
    )
);

echo "<br>";

$arr = array(5 => 1, 12 => 2);

$arr[] = 56;    // This is the same as $arr[13] = 56;
// at this point of the script

$arr["x"] = 42; // This adds a new element to
// the array with key "x"

unset($arr[5]); // This removes the element from the array
var_dump($arr);


?>