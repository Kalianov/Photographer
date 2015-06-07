<?php
	$dir_list = scandir("files");
	unset($dir_list [0]);
	unset($dir_list [1]);
	$dir_list = array_values($dir_list);
?>