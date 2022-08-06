<?php

include_once "cone.php";



//SE RECIBEN LOS DATOS Y SON ALMACENADOS EN LAS VARIABLES_

$com = $_POST["commentary"];
$resolution = $_POST["resolucion"];



//SE REGISTRAN LOS DATOS_

$insertar="INSERT INTO comentar (comen, pixel) VALUES ('$com', '$resolution')";



//EJECUTAR EL REGISTRO DE LOS DATOS_

$resultado=mysqli_query($conexion, $insertar);

if(!$resultado){

    echo 'Error al Registrarse';

}
else{
header('location: gratitude.php');
}



//CERRAR LA CONECCION_

mysqli_close ($conexion);



//NOS REDIRIGE A LA PAGINA DE REGISTRO AUTOMATICAMENTE_

//header('location:../html/gratitude.html');

?>