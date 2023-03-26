

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="/resource/css/style.css?<?php echo date('Y-m-d H:i:s');?>" />
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
        <main>
		<header>
			<div>
				<div class="name-page">
					<h1><span>alequivocado</span><span class="tv">.TV</span></h1>
				</div>
				<nav id="navbar">
					<?php 
					$database = file_get_contents("resource/JSON/navbar.json");
					include_once "resource/php/navbar.php";
					?>
				</nav>
			</div>
		</header>
		<?php
			$database = file_get_contents(__DIR__."/resource/JSON/$name_pages.json");
		?>