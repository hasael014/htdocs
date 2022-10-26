
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
</div>
<section class="codes" id="codigos">
</section>

<script>
    async function PaginaDeCodigos(){
	const resp = await fetch('https://api.npoint.io/f334a0f8addbb676b3ba/listadecodigos')
	const fileJson = await resp.json()

	
	/*
	lo siguiente es para crear los contenedores para los codigos fuente de los proyectos
	*/

	let nlistcod = fileJson.nombresdecodigos.length
	let s =  <?php echo$ab;?>0-10
	let eticodigos = "<div>"

	for (s; s < <?php echo$ab;?>0; s++){
        if(s < nlistcod){
		eticodigos += "<div><div class='titulo_cod'><h2 id='ti_codi'>"
		eticodigos += fileJson.nombresdecodigos[s]
		eticodigos += "</h2></div><img src='"
		eticodigos += fileJson.imagendelcodigo[s]
		eticodigos += "'><div class='url'><a href='"
		eticodigos += fileJson.linksdecodigos[s]
		eticodigos += "' target='_blank'>próximamente</a></div></div>"
		//PrintInDisplay('codigos', eticodigos)
        }else{
            eticodigos += ""
        }
	}

	eticodigos += "</div>"

	PrintInDisplay('codigos', eticodigos)
	


    let paginas = nlistcod / 10

    
    let indice_de_paginas_de_videos = "<div  class='indice_de_paginas_de_videos'>"

    for(let nnn = 1; nnn<paginas+1; nnn++){

        indice_de_paginas_de_videos += "<a href='/Codigos/"+nnn+"'><p id='ln"+nnn+"' >"+nnn+"</p></a>"
    }

    indice_de_paginas_de_videos += "</div>"

    PrintInDisplay('paginas',indice_de_paginas_de_videos)

}

PaginaDeCodigos()
</script>
<?php 
}
else{
    
    echo "<script>window.location.replace('/Codigos/1')</script>";
}?>