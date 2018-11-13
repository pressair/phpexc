<?php
/**
 * Created by PhpStorm.
 * User: Jacky
 * Date: 2017/5/5
 * Time: 8:20
 */

function double($i)
{
    return $i*2;
}
$b = $a = 5;        /* assign the value five into the variable $a and $b */
$c = $a++;          /* post-increment, assign original value of $a
                       (5) to $c */
$e = $d = ++$b;     /* pre-increment, assign the incremented value of
                       $b (6) to $d and $e */

echo $e."<br>";
echo $d."<br>";
echo $b."<br>";

/* at this point, both $d and $e are equal to 6 */

$f = double($d++);  /* assign twice the value of $d before
                       the increment, 2*6 = 12 to $f */

echo $f." "."$d"."<br>";
$g = double(++$e);  /* assign twice the value of $e after
                       the increment, 2*7 = 14 to $g */

echo $g."<br>";
$h = $g += 10;      /* first, $g is incremented by 10 and ends with the
                       value of 24. the value of the assignment (24) is
                       then assigned into $h, and $h ends with the value
                       of 24 as well. */
echo $g."<br>";
?>