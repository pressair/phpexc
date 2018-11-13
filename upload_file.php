//由 fileUP.php提交,处理文件上传和转移

<?php

	$uploads_dir ="D:\\";
	
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  echo "Type: " . $_FILES["file"]["type"] . "<br />";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
  
   $tmp_name = $_FILES["file"]["tmp_name"];
        $name = $_FILES["file"]["name"];
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
  }
?>