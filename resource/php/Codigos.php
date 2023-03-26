<?php

$n = ($ab * 10)-10;

$condicio = ($ab * 10);

echo "<div>";

for($n; $n < $condicio; $n++){
    if ($n < $nlink){
        echo "<div><div class='titulo_cod'><h2 id='ti_codi'>" . $datosdejson[$n]["nombre"] . "</h2></div>";
        echo "<img src='" . $datosdejson[$n]["imagen"] . "'><div class='url'>";
        echo "<a href='" . $datosdejson[$n]["url"] .  "' target='_blank'>próximamente</a></div></div>";
    }
}
