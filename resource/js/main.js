function PrintInDisplay(nameid, x) {
	document.getElementById(nameid).innerHTML = x
}

async function test_de_obtener_data() {
	/*const resp = await fetch('https://api.npoint.io/f334a0f8addbb676b3ba')
	const fileJson = await resp.json()*/
	const resp = await fetch('https://api.npoint.io/f334a0f8addbb676b3ba')
	const fileJson = await resp.json()

	npestañas = fileJson.barraDeNavegacion.linksdepaginas.length

	let etiqueta = '<ul>'
	let i = 0

	for (i = 0; i < npestañas; i++) {
		etiqueta += "<a href='" + fileJson.barraDeNavegacion.linksdepaginas[i] + "'>"
		etiqueta += '<li>' + fileJson.barraDeNavegacion.nombredepagina[i] + '</li></a>'
	}
	etiqueta += '</ul>'

	PrintInDisplay('navbar', etiqueta)

}

test_de_obtener_data()

async function PaginaDeCodigos(){
	const resp = await fetch('https://api.npoint.io/f334a0f8addbb676b3ba')
	const fileJson = await resp.json()

	
	/*
	lo siguiente es para crear los contenedores para los codigos fuente de los proyectos
	*/

	let nlistcod = fileJson.listadecodigos.nombresdecodigos.length
	let s = 0
	let eticodigos = "<div>"

	for (s=0; s < nlistcod; s++){
		eticodigos += "<div><div class='titulo_cod'><h2 id='ti_codi'>"
		eticodigos += fileJson.listadecodigos.nombresdecodigos[s]
		eticodigos += "</h2></div><img src='"
		eticodigos += fileJson.listadecodigos.imagendelcodigo[s]
		eticodigos += "'><div class='url'><a href='"
		eticodigos += fileJson.listadecodigos.linksdecodigos[s]
		eticodigos += "' target='_blank'> Ver Codigo</a></div></div>"
		//PrintInDisplay('codigos', eticodigos)
	}

	eticodigos += "</div>"

	PrintInDisplay('codigos', eticodigos)
	
	

}

PaginaDeCodigos()
