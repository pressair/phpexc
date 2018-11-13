<?php
/**
 * Created by PhpStorm.
 * User: Jacky
 * Date: 2017/4/28
 * Time: 10:53
 */
header("Content-type: text/html; charset=utf-8");

/* 含有变量的更复杂示例 */
class foo
{
    var $foo;
    var $bar;

    function foo()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'MyName';

echo <<<"EOT1"
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should print a capital 'A': \x41
EOT1;
echo "<br>";
echo <<<'EOT2'
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should print a capital 'A': \x41
EOT2;
echo "<br>";echo "<br>";


$juices = array("apple", "orange", "koolaid1" => "purple");

echo "He drank some $juices[0] juice.".PHP_EOL;
echo "He drank some $juices[1] juice.".PHP_EOL;
echo "He drank some juice made of $juice[0]s.".PHP_EOL; // Won't work
echo "He drank some $juices[koolaid1] juice.".PHP_EOL;

class people {
    public $john = "John Smith";
    public $jane = "Jane Smith";
    public $robert = "Robert Paulsen";
    public $smith = "Smith";
}

$people = new people();

echo "$people->john drank some $juices[0] juice.".PHP_EOL."<br>";
echo "$people->john then said hello to $people->jane.".PHP_EOL."<br>";
echo "$people->john"."'s wife greeted $people->robert.".PHP_EOL."<br>";
echo "$people->robert greeted the two $people->smiths."."<br>"; // Won't work

error_reporting(E_ALL);

$great = 'fantastic';
echo "This is { $great}"."<br>";
echo "This is {$great}"."<br>";
echo "This is ${great}"."<br>";
$arr['key'] = 'My key';
$arr['key1'] = 'My key';
echo "This works: {$arr['key']}"."<br>";

$arr['foo'][3] ="每月foo";
echo "This works: {$arr['foo'][3]}";
?>