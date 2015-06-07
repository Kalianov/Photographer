<?php
	$name = $_FILES['image']['name'];
	$tmp_name = $_FILES['image']['tmp_name']; 
    $array = explode(",",name);
   // if (end($array) == "jpg" || end ($array) == "png"
if (copy($tmp_name,"files/$name")) {
		echo "<script>location.replace('view_files.php');</script>";
	}
else {
    echo "<script>location.replace('add_file.php');</script>";
}
?>