<?php session_start() ?>
<html>
    <head>
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="control.js"></script>
        <link  href="css/in.css" rel="stylesheet"  type="text/css" />
        <meta charset="utf-8">

    </head>
    <body>
        <?php if($_SESSION['admin']) {?> <!--если сеcсия admin то показываем кнопку выход-->
            <?php include_once("header.php"); ?>
            <div class="zona">
                <a href="view_files.php"> <div class="view"><strong>VIEW</strong><br>MY PHOTOS</div></a>
                <a href="add_file.php"> <div class="add_file"><strong>ADD FILE</strong><br>TO GALERY</div></a>
            </div>
            <div class="qq">PHOTOGRAPHY © 2014.</div>

            <?php ; }
        else {?> <!--иначе выводим текст что  session has expired-->
            <div class="qwe">session has expired</div>
        <?php } ?>

    </body>
</html>