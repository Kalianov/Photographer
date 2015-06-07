<?php
     session_start();  //из control.js получили запрос .при нажатии на кнопку exit ,обрабатываем ...
    if ($_SESSION['admin']) { // если сессия admin
        session_destroy(); // розриваем ,и дальше в файле control.js оно возращает на страницу авторизации
    }
?>