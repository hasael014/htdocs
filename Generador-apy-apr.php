<?php //$float = floatval($variable); para convertir en numero un texto
$datosdejson = json_decode($database, true);

?>


<div class="contenedor-tablas">
<button onclick="APR();" >APR</button>
<button onclick="APY();" >APY</button>
</div>

<div class="contenedor_de_formulario">

    <form action="" method="get" class="fomrgenerador">

        <input type="text" name="APR" placeholder="Ingrese el APR aqui">

        <input type="text" name="inversion" id="" placeholder="Ingrese su inversión aqui">

        <button type="submit" id="Boton-generador">Generar APR</button>

    </form>
</div>

<div class="tabla-de-calculos">
    <fieldset>
        <legend>APR <?php if(isset($_GET['APR'])){echo anumero($_GET['APR']);}elseif (isset($_GET['APY'])){echo GENERADOR_APR(anumero($_GET['APY']));}?></legend>

        <table class="tabla">
            <tr>
            <th>Periodo</th>
            <th>% APR</th>
            <th>ganancias</th>
            <th>Total</th>
            </tr>

            <?php 
            
            if(isset($_GET['APR']) and isset($_GET['inversion'])){
                datostabla(anumero($_GET['APR']), $datosdejson, anumero($_GET['inversion']));
            }elseif(!isset($_GET['APR']) and isset($_GET['inversion'])){
                if(isset($_GET['APY'])){
                    datostabla(GENERADOR_APR($_GET['APY']), $datosdejson, anumero($_GET['inversion']));
                }
            }
            elseif(!isset($_GET['APR']) and !isset($_GET['inversion'])){
                    datostabla(0, $datosdejson, 0);
                }

            ?>

        </table>

    </fieldset>
    <fieldset>
        <legend>APY <?php if(isset($_GET['APY'])){echo anumero($_GET['APY']);}elseif (isset($_GET['APR'])){echo GENERADOR_APY(anumero($_GET['APR']));}?></legend>

<table class="tabla">
    <tr>
    <th>Periodo</th>
    <th>% APY</th>
    <th>ganancias</th>
    <th>Total</th>
    </tr>

<?php 

if(isset($_GET['APY']) and isset($_GET['inversion'])){
    datostabla(anumero($_GET['APY']), $datosdejson, anumero($_GET['inversion']));
}
elseif(!isset($_GET['APY']) and isset($_GET['inversion'])){
    if(isset($_GET['APR'])!==""){
        datostabla(GENERADOR_APY($_GET['APR']), $datosdejson, anumero($_GET['inversion']));
    }
    else{
        datostabla(0, $datosdejson, 0);
    }
    
}
elseif(!isset($_GET['APY']) or !isset($_GET['inversion'])){
        datostabla(0, $datosdejson, 0);
    }

?>
</table>
    </fieldset>
</div>


    
</body>
</html>



<?php



//solo cambiara el formulario al hacer click en una de los dos botones y la tabla seguira siendo la misma para los dos botones // $datosdejson[$n]["codigo"]

function GENERADOR_APY($APR){
        $pasoapr1 = $APR/365;
        $pasoapr2 = ($pasoapr1/100)+1;
        $pasoapr3 = pow($pasoapr2,365)-1;
        $APYG = $pasoapr3*100;
        return round($APYG, 2);
}

function GENERADOR_APR($APY){
        $pasoapy1 = ($APY/100)+1;
        $pasoapy2 = pow($pasoapy1, (1/365));
        $pasoapy3 = ($pasoapy2-1)*100;
        $APRG = ($pasoapy3)*365;
        return round($APRG, 2);
}

function anumero($variable1){
        $float = floatval($variable1);
    return $float;
}


function datostabla($variable0, $datosdejson, $inversion){

    $tb = count($datosdejson);
    
    $Dia = $variable0/365;
    
    for($n = 0; $n < $tb; $n++){
        $porcentaje1 = round($Dia/$datosdejson[$n]['porcentaje'], 4);
        $porcentaje2 = round($Dia*$datosdejson[$n]['porcentaje'], 4);
        $ganancias1 = round(($porcentaje1*$inversion)/100, 2);
        $ganancias2 = round(($porcentaje2*$inversion)/100, 2);
        $total1 = $ganancias1+$inversion;
        $total2 = $ganancias2+$inversion;
        echo "
        <tr>
            <th>".$datosdejson[$n]['periodo']."</th>
            <th>";
            if($n == 0){
                echo $porcentaje1;
            }else{
                echo $porcentaje2;
            }
            echo " %</th>
            <th>$ ";
            if($n == 0){
                echo $ganancias1;
            }else{
                echo $ganancias2;
            }
            echo "</th>
            <th>$ ";
            if($n == 0){
                echo $total1;
            }else{
                echo $total2;
            }
            echo "</th>
        </tr>
        ";
    }
    }

?>
<script>




    function APY() {
        const input = document.querySelector('input'), button = document.querySelector('#Boton-generador');
        return input.setAttribute('name', 'APY'), input.setAttribute('placeholder', 'ingrese el APY aqui'), button.textContent= 'Generar APY';
    }

    function APR() {
        const input = document.querySelector('input'), button = document.querySelector('#Boton-generador');
        return input.setAttribute('name', 'APR'), input.setAttribute('placeholder', 'ingrese el APR aqui'), button.textContent= 'Generar APR';
    }

</script>