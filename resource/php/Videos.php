<?php

$n = ($ab * 15)-15;

$pagvisible = ($ab * 15);

echo "<div class='menu_de_videos'>";

for ($n; $n < $pagvisible; $n++){
    if ($n < $nlink){
        echo "<form action='/Watch' method='post'>";
        echo "<button type='submit' name='name_video' value='" . $datosdejson[$n]["nombre"] . " | GAMEPLAY (NO COMMENTARY) | AL EQUIVOCADO TV {[#" . ($nlink-$n) . "]}' class='video_individual'>";
        echo "<input type='hidden' value='" . $datosdejson[$n]["codigo"] . "' name='codigovideo''>";
        echo "</input><div class='nombre_video'>" . $datosdejson[$n]["nombre"] . " | GAMEPLAY (NO COMMENTARY) | AL EQUIVOCADO TV {[#0" . ($nlink-$n) . "]}</div>";
        echo "<div class='clip-miniatura'><img src='http://i3.ytimg.com/vi/" . $datosdejson[$n]["codigo"] . "/maxresdefault.jpg'></div></button></form>";
    } else{

        echo "<form action='/Videos/".$ab."' method='post'>";
        echo "<button type='submit' name='name_video' value='proximamente' class='video_individual'>";
        echo "</input><div class='nombre_video'>proximamente</div>";
        echo "<div class='clip-miniatura'><img src='../resource\img\min-au.jpeg'></div></button></form>";

    }
}

echo "</div>";



