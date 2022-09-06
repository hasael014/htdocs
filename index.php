<?php

    $pagina = $_GET['pagina'];
    $name_pages = $_GET['name'];

    if ($pagina != "" & $name_pages != ""){

	    include_once "./header.html";

        echo "<title>Alequivocado.tv | $name_pages</title>";
        include_once "$name_pages.html";

        include_once "./footer.php";
    }
    else {
        echo "<script>window.location.replace('http://127.0.0.1/1/Inicio')</script>";
    }
?>
