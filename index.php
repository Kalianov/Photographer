
<html>
	<head>
		<link  href="css/2.css" rel="stylesheet"  type="text/css" />
		<script type="text/javascript" src="jquery.js" ></script>
		<script type="text/javascript" src="control.js" ></script>
	</head>
		<body >
			<header class="text-center"  >
                <?php if(!$_SESSION['admin']) {?>
                     <input  type="text" id="login" name="Login" placeholder="Login..."><br>
                     <input type="password" id="pass" placeholder="Password..."><br>
                    <button class="send" id="send" >LOG IN</button>
                <?php  }
                else {?> <!--иначе выводим текст что  session has expired-->
                <div class="qwe">You have already entered</div>
                <?php } ?>
                <div id="text"></div>
			</header>
        </body>
</html>