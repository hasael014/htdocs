function PrintInDisplay(nameid, x) {
	document.getElementById(nameid).innerHTML = x
}

async function test_de_obtener_data() {
	/*const resp = await fetch('https://api.npoint.io/f334a0f8addbb676b3ba')
	const fileJson = await resp.json()*/
	const resp = await fetch('https://api.npoint.io/f334a0f8addbb676b3ba/barraDeNavegacion')
	const fileJson = await resp.json()

	npestañas = fileJson.linksdepaginas.length

	let etiqueta = '<ul>'
	let i = 0

	for (i = 0; i < npestañas; i++) {
		etiqueta += "<a href='" + fileJson.linksdepaginas[i] + "'>"
		etiqueta += '<li>' + fileJson.nombredepagina[i] + '</li></a>'
	}
	etiqueta += '</ul>'

	PrintInDisplay('navbar', etiqueta)

}

test_de_obtener_data()

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