<?php
	session_start() ;

	$login = $_POST['login']; //в переменные пост догин и пароль
	$pass = $_POST['pass'];  //в переменные пост догин и пароль
	//print_r($_POST);
	if ($login == "admin"){  //если логин admin
		if ($pass == "123"){ //и если пароль 123
			//setcookie("admin",true,time()+2*60*60);//в control.js передается значение 2

			$_SESSION['admin'] = true ;
			echo "2"; //- это 2
		}
		else {
			echo "1";// иначе 1 ,тоесть не правильный пароль
		}
	}
	
	else {
		echo "0"; //передает 0 , неправильный логин
	}
?>
