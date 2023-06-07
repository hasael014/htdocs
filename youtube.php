<?php 
$API_key    = 'AIzaSyAYrxD6UXAu7WZ_rId82ZflD_hAtzZQHJI';
$channelID  = /*'UClScZp72JcfbCce-xdlsyuA'*/ 'UCzR07E8NQU-ZV9hAsHLfExQ';
$maxResults = 1;

$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));

foreach($videoList->items as $item){
    //Embed video
    if(isset($item->id->videoId)){
        echo '<div class="youtube-video">
                <iframe width="280" height="150" src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe>
                <h2>'. $item->snippet->title .'</h2>
            </div>';
    }
}


?>