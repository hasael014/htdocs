
<input type="" name="APR" id="" placeholder="Ingrese aquí APR" autofocus 
        
<?php
if(!isset($APR) or $APR != ""){
?>
value="<?php echo $APR; ?>" >

<input type="text" value="Su APY es: <?php  echo GENERADOR_APY($APR);}?>" readonly>

<input type="" name="APY" id="" placeholder="Ingrese aquí APY" autofocus 
<?php
if(!isset($APY) or $APY != ""){
?> value="<?php echo $APY;?>">

<input type="text" value="Su APR es: <?php echo GENERADOR_APR($APY);}?>" readonly>

<input type="number" name="Inv" id="" placeholder="Ingrese aquí su inversión">

<button type="submit" >Generar</button>



<input type="" name="APR" id="" placeholder="Ingrese aquí APR" autofocus value="" >

<input type="text" value="Su APY es: " readonly>

<input type="" name="APY" id="" placeholder="Ingrese aquí APY" autofocus value="">

<input type="text" value="Su APR es: " readonly>

<input type="number" name="Inv" id="" placeholder="Ingrese aquí su inversión">

<input type="hidden" value="Generador-apy-apr" name="name">