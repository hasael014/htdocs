function PrintInDisplay(nameid, x) {
	document.getElementById(nameid).innerHTML = x
}

async function pagina_video(){
	const resp = await fetch('https://api.npoint.io/f334a0f8addbb676b3ba/pagina_video')
	const fileJson = await resp.json()

	let n_link = fileJson.miniatura_video.length, n = 0, pagina = 0, contenedor = "<div class='menu_de_videos'>"
	
	for(n=0; n<n_link; n++){
		contenedor += "<form action='/Watch' method='post'><button type='submit' name='name_video' value='"+fileJson.nombre_video[0]+" | GAMEPLAY (NO COMMENTARY) | AL EQUIVOCADO TV {[#"+ (n_link-n) +"]}' class='video_individual'><input type='hidden' value='"
		contenedor += fileJson.miniatura_video[n]
		contenedor += "' name='codigovideo''></input><div class='nombre_video'>"
		contenedor += fileJson.nombre_video[n]
		contenedor += " | GAMEPLAY (NO COMMENTARY) | AL EQUIVOCADO TV {[#0"+[n_link-n]+"]}</div><div class='clip-miniatura'><img src='http://i3.ytimg.com/vi/"
		contenedor += fileJson.miniatura_video[n]
		contenedor += "/maxresdefault.jpg'></div></button></form>"
	}
	contenedor += "</div>"





























    let indice_de_paginas_de_videos = "<div>"

    for(let nnn = 0; nnn<paginas; nnn++){

        indice_de_paginas_de_videos += "<a href='#"+nnn+"' onclick='click_pagina_de_videos("+nnn+")'>"+nnn+"</a>"
    }

    indice_de_paginas_de_videos += "</div>"

    PrintInDisplay('paginas',indice_de_paginas_de_videos)


	PrintInDisplay('test', tags)
}

pagina_video(