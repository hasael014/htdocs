<?php 

$n = ($ab * 15)-15;

$pagvisible = ($ab * 15);


//$API_key    = 'AIzaSyAYrxD6UXAu7WZ_rId82ZflD_hAtzZQHJI';
$channelID  = /*'UClScZp72JcfbCce-xdlsyuA'*/ 'UCzR07E8NQU-ZV9hAsHLfExQ';
$maxResults = 100;

$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));


$pila=array();
foreach ($videoList->items as $arreglo) {
    array_push($pila, array("id" => $arreglo->id->videoId, "nombre"=>$arreglo->snippet->title));
}

//print_r($pila);





echo "<div class='menu_de_videos'>";

for ($n; $n < $pagvisible; $n++){
    if ($n < $nlink){
        echo "<form action='/Watch' method='post'>";
        echo "<button type='submit' name='name_video' value='" . $pila[$n]["nombre"] . " | GAMEPLAY (NO COMMENTARY) | AL EQUIVOCADO TV {[#" . ($nlink-$n) . "]}' class='video_individual'>";
        echo "<input type='hidden' value='" . $pila[$n]["id"] . "' name='codigovideo''>";
        echo "</input><div class='nombre_video'>" . $pila[$n]["nombre"] . " | {[#0" . ($nlink-$n) . "]}</div>";
        echo "<div class='clip-miniatura'><img src='http://i3.ytimg.com/vi/" . $pila[$n]["id"] . "/maxresdefault.jpg'></div></button></form>";
    } else{

        echo "<form action='/Videos/".$ab."' method='post'>";
        echo "<button type='submit' name='name_video' value='proximamente' class='video_individual'>";
        echo "</input><div class='nombre_video'>proximamente</div>";
        echo "<div class='clip-miniatura'><img src='../resource\img\min-au.jpeg'></div></button></form>";

    }
}

echo "</div>";
