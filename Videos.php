<?php

$ab = $_GET['ab'];

if($ab != ""){
?>

<div id="paginas">
<?php
include_once "resource/php/paginas_menu.php";
?>
</div>
<div id="contenedor_del_menu_de_videos">
	<?php
	//include_once "resource/php/Videos.php";
	include_once "resource/php/videos_de_youtube.php";
	?>
</div>
<?php
}
else{
	echo "<script>window.location.replace('/Videos/1')</script>";
}