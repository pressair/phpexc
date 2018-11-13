<?php
//变量 GET，POST,文件链接到cookie.php
	header("Content-type: text/html; charset=utf-8");
	echo 'Hello ' . htmlspecialchars($_GET["n"]) . '!';
	
	if ( ! session_id() ) @ session_start();
	$_SESSION['name']="JACKY_SESSION";
	setcookie("name1","看看",time()+20);
	setcookie("name2","看看name2");
	//$_COOKIE["name1"]="jacky";
	echo 'Hello ' . htmlspecialchars($_COOKIE["name1"]) . '!<br>';
	
    $myArray = array(5,6,7,8,9);
    $myserialize = serialize($myArray);
    $myArray1 =(object)$myArray;
    var_dump($myArray);
    $str1="helloworld";
?>

<form action="cookie.php" method="post">
 <p>姓名: <input type="text" name="name" /></p>
 <p>年龄: <input type="text" name="age" /></p>
 <p><input type="submit" /></p>
</form>

<a href="cookie.php?user=<?=$myserialize?>" >Cookie</a>