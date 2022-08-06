<?php

    $pagina = $_GET['pagina'];
	include_once "resource/php/heder.php";

    switch ($pagina) {
        case '1':
            include_once "index.html";
            break;
        case '2':
            include_once "redes_sociales.html";
            break;
        
        default:
            echo "<script>alert('el sitio que intenta acceder no esta disponible ni existe')</script>";
            break;
    }

    include_once "https://hasael014.github.io/htdocs/redes_sociales.html";

    include_once "resource/php/footer.php";
?>
