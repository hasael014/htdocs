function PrintInDisplay(nameid, x) {
	document.getElementById(nameid).innerHTML = x
}

async function barra_de_navegacion() {
	/*const resp = await fetch('https://api.npoint.io/f334a0f8addbb676b3ba')
	const fileJson = await resp.json()*/
	const resp = await fetch('https://api.npoint.io/f334a0f8addbb676b3ba/barraDeNavegacion')
	const fileJson = await resp.json()

	npestañas = fileJson.linksdepaginas.length

	let etiqueta = '<ul>'
	let i = 0

	for (i = 0; i < npestañas; i++) {
		etiqueta += "<li><a href='" + fileJson.linksdepaginas[i] + "'>"
		etiqueta += fileJson.nombredepagina[i] + '</a></li>'
	}
	etiqueta += '</ul>'

	PrintInDisplay('navbar', etiqueta)

}

barra_de_navegacion()

async function PaginaDeCodigos(){
	const resp = await fetch('https://api.npoint.io/f334a0f8addbb676b3ba/listadecodigos')
	const fileJson = await resp.json()

	
	/*
	lo siguiente es para crear los contenedores para los codigos fuente de los proyectos
	*/

	let nlistcod = fileJson.nombresdecodigos.length
	let s = 0
	let eticodigos = "<div>"

	for (s=0; s < nlistcod; s++){
		eticodigos += "<div><div class='titulo_cod'><h2 id='ti_codi'>"
		eticodigos += fileJson.nombresdecodigos[s]
		eticodigos += "</h2></div><img src='"
		eticodigos += fileJson.imagendelcodigo[s]
		eticodigos += "'><div class='url'><a href='"
		eticodigos += fileJson.linksdecodigos[s]
		eticodigos += "' target='_blank'>próximamente</a></div></div>"
		//PrintInDisplay('codigos', eticodigos)
	}

	eticodigos += "</div>"

	PrintInDisplay('codigos', eticodigos)
	
	

}

PaginaDeCodigos()

async function pagina_inicio(){
	const resp = await fetch('https://api.npoint.io/f334a0f8addbb676b3ba/texto_inicio')
	const fileJson = await resp.json()

	let n_text = fileJson.texto.length -1
	let n = 0
	let text_indice = "<div id='description'>"

	for (n=0; n < n_text; n++){
		text_indice += fileJson.texto[n]
	}

	n+1
	text_indice += "</div>" + fileJson.texto[n]

	PrintInDisplay('contenedor_del_indice', text_indice)
}

pagina_inicio()

async function pagina_video(){
	const resp = await fetch('https://api.npoint.io/f334a0f8addbb676b3ba/pagina_video')
	const fileJson = await resp.json()

	let n_link = fileJson.miniatura_video.length, n = 0, contenedor = "<div class='menu_de_videos'>"
	
	for(n=0; n<n_link; n++){
		contenedor += "<form action='/Watch' method='post'><button type='submit' name='name_video' value='"+fileJson.nombre_video[0]+" | GAMEPLAY (NO COMMENTARY) | AL EQUIVOCADO TV {[#"+[n+1]+"]}' class='video_individual'><input type='hidden' value='"
		contenedor += fileJson.miniatura_video[n]
		contenedor += "' name='codigovideo''></input><div class='nombre_video'>"
		contenedor += fileJson.nombre_video[0]
		contenedor += " | GAMEPLAY (NO COMMENTARY) | AL EQUIVOCADO TV {[#"+[n+1]+"]}</div><div class='clip-miniatura'><img src='http://i3.ytimg.com/vi/"
		contenedor += fileJson.miniatura_video[n]
		contenedor += "/maxresdefault.jpg'></div></button></form>"
	}
	contenedor += "</div>"

	PrintInDisplay('contenedor_del_menu_de_videos', contenedor)
}

pagina_video()


