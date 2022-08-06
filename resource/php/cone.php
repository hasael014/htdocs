<?php
//CREAR VARIABLES PARA HACER LA CONECCION_
$loc = /*"127.0.0.1";*/"fdb33.awardspace.net";
$user = "4003648_comentary";
$dbase = "4003648_comentary";
$pass =  "nxUA@jmQ6LriZ7Hu";
    
//CREAMOS LA CONECCION AL SERVER..
$conexion=mysqli_connect("$loc","$user","$pass");

//NOS CONECTAMOS A LA BASE DE DATOS ESPESIFICADA..
mysqli_select_db($conexion,"$dbase")OR DIE ("Error:No es posible establecer la conexion");
?>