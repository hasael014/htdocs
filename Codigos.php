
<?php

$ab = $_GET['ab'];

if($ab != ""){

echo "<style>
    #ln".$ab."{
        background: #19410d;
    }
</style>";
?>
<div id="paginas">
<?php
include_once "resource/php/paginas_menu.php";
?>
</div>
<section class="codes" id="codigos"><?php
include_once "resource/php/Codigos.php";
?>
</section>

<?php 
}
else{
    
    echo "<script>window.location.replace('/Codigos/1')</script>";
}?>