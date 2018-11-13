<?php
/**
 * Created by PhpStorm.
 * User: Jacky
 * Date: 2017/5/4
 * Time: 8:30
 */
// Type 6: Objects implementing __invoke can be used as callables (since PHP 5.3)
class C {
    public function __invoke($name) {
        echo 'Hello ', $name, "\n";
    }
}

$c = new C();
call_user_func($c, 'PHP!');