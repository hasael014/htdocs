<?php
$name_videos = $_POST['name_video'];
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="/resource/css/style.css?<?php echo date('Y-m-d H:i:s');?>" />
		<link rel="shortcut icon" href="resource/img/ALEQUIVICADOBLANCO.png" type="image/x-icon">
		<?php
			
			echo "<title>$name_videos</title>";
		?>
		<script src="/resource/js/main.js?<?php echo date('Y-m-d H:i:s');?>"></script>
	</head>
	<body>
		<header>
			<div>
				<div class="name-page">
					<h1><span>alequivocado</span><span class="tv">.TV</span></h1>
				</div>
				<nav id="navbar"></nav>
			</div>
		</header>
        <main>
<?php
$codigo_video = $_POST['codigovideo'];

echo "<iframe width='1500' height='676' src='https://www.youtube.com/embed/".$codigo_video."' title='".$name_videos."' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";

	echo "<a href='https://www.y2mate.com/youtube/".$codigo_video."' target='_blank'><h2>".$name_videos."</h2></a>";

?>
