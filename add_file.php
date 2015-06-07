<?php session_start() ; ?>
<html>
<head>
    <link  href="css/add_file.css" rel="stylesheet"  type="text/css" />
    <script type="text/javascript" src="jquery.js" ></script>
    <script type="text/javascript" src="control.js" ></script>
</head>
    <?php if($_SESSION['admin']) {?> <!--если сеcсия admin то показываем кнопку выход-->
    <?php include_once("header.php"); ?>
        <div class="new">
            <h1>ADD FILE</h1>
            <form enctype="multipart/form-data" method="post" action="server.php">
                <input class="file" type="file" name="image" value="Upload file"><br>
                <input class="btn" type="submit" value="Upload">
            </form>
        </div>

    <?php ; }
else {?> <!--иначе выводим текст что  session has expired-->
    <div class="qwe">session has expired</div>
<?php } ?>
</html>