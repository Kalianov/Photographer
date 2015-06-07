<?php include("get_file_list.php");
	 ?>
<html> 
	<head>
		<link  href="css/view.css" rel="stylesheet"  type="text/css" />
		<script type="text/javascript" src="jquery.js" ></script>
		<script type="text/javascript" src="control.js" ></script>
        <script type="text/javascript" src="photo.js" ></script>

</head>

		<body >

				<?php if (!$_SESSION['admin'] ) {?>
                <?php include_once("header.php"); ?>

							<ul class="thumbnails">
								<?php foreach ($dir_list  as $name ) {?>
								  <li class="span4">
								    <a href="#" class="thumbnail">
								      <img src="files/<?php echo $name; ?>" alt="">
								    </a>
								  </li>
								<?php } ?>
							</ul>
						</div>
					<?php } else {?>
						<header class="text-center">
					 	ти кто такой ?
					 <?php } ?>

			</header>

		</body>
</html>