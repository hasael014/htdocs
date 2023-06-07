

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="/resource/css/style-mobil.css?<?php echo date('Y-m-d H:i:s');?>" media="(max-width: 640px)">
		<link rel="stylesheet" href="/resource/css/style-tablet.css?<?php echo date('Y-m-d H:i:s');?>" media="(min-width: 640px) and (max-width: 1280px)">
		<link rel="stylesheet" href="/resource/css/style-desktop.css?<?php echo date('Y-m-d H:i:s');?>" media="(min-width: 1280px)">
		<link rel="shortcut icon" href="resource/img/ALEQUIVICADOBLANCO.png" type="image/x-icon">
		<?php
		if($name_pages == "Watch"){
			$name_videos = $_POST['name_video'];
			echo "<title>$name_videos</title>";
		}else{
		echo "<title>$name_pages | Alequivocado.tv</title>";
		}
		//$database = file_get_contents(__DIR__."/resource/JSON/$name_pages.json");
		?>
		<script src="/resource/js/main.js?<?php echo date('Y-m-d H:i:s');?>"></script>
	</head>
	<body>
		<!--<style contenteditable style="display: block;width:50%;">
		main{
			color: white;
		}
		</style>-->
        <main>
		<header>
				<h1>ALEQUIVICADO.TV</h1>
				<nav id="navbar">
					<?php 
					$database = file_get_contents("resource/JSON/navbar.json");
					include_once "resource/php/navbar.php";
					?>
				</nav>
		</header>
		<?php
			$database = file_get_contents(__DIR__."/resource/JSON/$name_pages.json");
		?>