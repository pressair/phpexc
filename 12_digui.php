<?php
/**
 * Created by PhpStorm.$
 * User: Administrator
 * Date: 2017/5/4
 * Time: 22:32
 */
function test()
{
    static $count = 0;

    $count++;
    echo "see:".$count;
    if ($count < 10) {
        test();
        echo  $count."<br>";
    }
    $count--;
}
test();

$a="hao";
$$a = "Happy";
echo $hao."<br>";
$$$a = "123";

echo $Happy."<br>";