<?php
$datosdejson = json_decode($database, true);

$npaginas = count($datosdejson);

echo "<ul>";

$inc = 0;

for($inc = 0; $inc < $npaginas; $inc++){
    echo "<li><a href='" .  $datosdejson[$inc]["url"] . "'>";
    echo "|" . $datosdejson[$inc]["nombre"] . "</a></li>";
};

echo "</ul>";