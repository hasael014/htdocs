<?php

$datosdejson = json_decode($database, true);

$nlink = count($datosdejson);

$paginas = $nlink/15;

echo "<div  class='indice_de_paginas_de_videos'>";

$n = 1;

if($ab > 1){
    echo "<a href='/$name_pages/" . ($ab-1) . "' id='ln-des' class='ln-ant'><p></p></a>";
}

for ($n; $n < $paginas + 1; $n ++){
    if($ab != $n){
        echo "<a href='/$name_pages/" . $n . "' id='ln-des'>";
    }else{
        echo "<a href='/$name_pages/" . $n . "' id='ln'>";
    }
    echo "<p>$n</p></a>";
}

if($ab < $paginas){
    echo "<a href='/$name_pages/" . ($ab+1) . "' id='ln-des' class='ln-sig'><p></p></a>";
}

echo "</div>";