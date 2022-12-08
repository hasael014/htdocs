<?php

//include_once "php-json-file-decode-master/json-file-decode.class.php";
/*$username = "root";
$pass = "";
$dbname = "test";
$hostname = "127.0.0.1";


$mysqli = new mysqli($hostname, $username, $pass, $dbname);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$mysqli = new mysqli($hostname, $username, $pass, $dbname/*, 3306*);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";*/


$database = file_get_contents(__DIR__."/resource/JSON/Inicio.json");
$datosdejson = json_decode($database, true);

//print_r($datosdejson);

//echo count($datosdejson["texto"])-1;

//print_r( $datosdejson["texto"][0]);
//echo $datosdejson->listadecodigos->nombresdecodigos;
/*


$leer = new json_file_decode();
//$json = $leer->json(__DIR__."/resource/JSON/navbar.json");

//echo $json[1]["nombre"];*/