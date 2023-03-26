<?php

    //include_once "resource/php/cone.php";

    $name_pages = $_GET['name'];

    if ($name_pages != ""){
        if($name_pages == "Watch"){
            
        include_once "$name_pages.php";

        include_once "footer.php";
        }
        else{

	    include_once "header.php";
        
        include_once "$name_pages.php";

        include_once "footer.php";}
    }
    else {
        echo "<script>window.location.replace('/Inicio')</script>";
    }
?>
