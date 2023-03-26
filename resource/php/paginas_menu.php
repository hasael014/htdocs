<?php

$datosdejson = json_decode($database, true);

$nlink = count($datosdejson);

$paginas = $nlink/15;

echo "<div  class='indice_de_paginas_de_videos'>";

$n = 1;

if($ab > 1){
    echo "<a href='/$name_pages/" . ($ab-1) . "'><p><</p></a>";
}

for ($n; $n < $paginas + 1; $n ++){
    echo "<a href='/$name_pages/" . $n . "'><p id='ln" . $n . "' >" . $n . "</p></a>";
}

if($ab < $paginas){
    echo "<a href='/$name_pages/" . ($ab+1) . "'><p>></p></a>";
}

echo "</div>";