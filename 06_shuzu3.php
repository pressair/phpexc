    <?php
/**
 * Created by PhpStorm.
 * User: Jacky
 * Date: 2017/5/5
 * Time: 13:45
 * http://php.net/manual/zh/language.operators.array.php
 */

    $a = array("a" => "apple", "b" => "banana");
    $b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

    $c = $a + $b; // Union of $a and $b
    echo "Union of \$a and \$b: \n";
    var_dump($c);

    $c = $b + $a; // Union of $b and $a
    echo "Union of \$b and \$a: \n";
    var_dump($c);

    $a += $b; // Union of $a += $b is $a and $b
    echo "Union of \$a += \$b: \n";
    var_dump($a);



    $a = array("apple", "banana");
    $b = array(1 => "banana", "0" => "apple");

    var_dump($a == $b); // bool(true)
    var_dump($a === $b); // bool(false)
    ?>