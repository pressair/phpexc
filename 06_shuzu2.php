<?php
/**
 * Created by PhpStorm.
 * User: Jacky
 * Date: 2017/4/28
 * Time: 14:35
 */

// Show all errors
error_reporting(E_ALL);

$arr = array('fruit' => 'apple', 'veggie' => 'carrot');

// Correct
print $arr['fruit']."<br>";  // apple
print $arr['veggie']."<br>"; // carrot

// Incorrect.  This works but also throws a PHP error of level E_NOTICE because
// of an undefined constant named fruit
//
// Notice: Use of undefined constant fruit - assumed 'fruit' in...
print $arr[fruit];    // apple
echo "<br>";
echo "<br>";

// This defines a constant to demonstrate what's going on.  The value 'veggie'
// is assigned to a constant named fruit.
define('fruit', 'veggie');

// Notice the difference now
print $arr['fruit'];  // apple
echo "<br>";
print $arr[fruit];    // carrot

echo "<br>";

// The following is okay, as it's inside a string. Constants are not looked for
// within strings, so no E_NOTICE occurs here
print "Hello $arr[fruit]";      // Hello apple
echo "<br>";
// With one exception: braces surrounding arrays within strings allows constants
// to be interpreted
print "Hello {$arr[fruit]}";    // Hello carrot
echo "<br>";
print "Hello {$arr['fruit']}";  // Hello apple

echo "<br>";

// Concatenation is another option
print "Hello " . $arr['fruit']; // Hello apple

