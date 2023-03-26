<?php

$database = file_get_contents(__DIR__."/resource/JSON/Codigos.json");
$datosdejson = json_decode($database, true);

//print_r($datosdejson);

//echo count($datosdejson);