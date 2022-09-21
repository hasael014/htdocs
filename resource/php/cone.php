<?php
$username = "root";
$pass = "";
$dbname = "test";
$hostname = "127.0.0.1";


$mysqli = new mysqli($hostname, $username, $pass, $dbname);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
/*echo $mysqli->host_info . "\n";

$mysqli = new mysqli($hostname, $username, $pass, $dbname/*, 3306*);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";*/