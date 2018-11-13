<?php
/**
 * Created by PhpStorm.
 * User: Jacky
 * Date: 2017/4/28
 * Time: 11:17
 */

// 显示所有错误
error_reporting(E_ALL);

class beers {
    const softdrink = 'rootbeer';
    public static $ale = 'ipa';
}

$rootbeer = 'A & W';
$ipa = 'Alexander Keith\'s';

// 有效，输出： I'd like an A & W
echo "I'd like an {${beers::softdrink}}\n"."<br>";

// 也有效，输出： I'd like an Alexander Keith's
echo "I'd like an {${beers::$ale}}\n"."<br>";

echo "I'd like an ".beers::$ale."\n"."<br>"
?>