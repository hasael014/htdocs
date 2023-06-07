<?php

$datosdejson = json_decode($database, true);

$ntexto = count($datosdejson["texto"]);
$in = 0;


echo "<div id='description'>";

for ($in = 0; $in < $ntexto-3; $in++){
    echo "<p>" . $datosdejson["texto"][$in] ."</p>";
};

echo "<p>" . $datosdejson["texto"][3] . "<span class='cursor_animation'>" . $datosdejson["texto"][4] . "</span></p></div><div class='imlogo'><img src='" . $datosdejson["texto"][5] . "' id='img-logo'></div>";

