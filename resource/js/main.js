function PrintInDisplay(nameid, x) {
	document.getElementById(nameid).innerHTML = x
}

function ConectionDataBase(){
	const resp = await fetch('https://api.npoint.io/f334a0f8addbb676b3ba')
	const fileJson = await resp.json()
}

async function test_de_obtener_data() {
	/*const resp = await fetch('https://api.npoint.io/f334a0f8addbb676b3ba')
	const fileJson = await resp.json()*/
	ConectionDataBase()

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
	ConectionDataBase()

	
	/*
	lo siguiente es para crear los contenedores para los codigos fuente de los proyectos
	*/

	let nlistcod = fileJson.listadecodigos.nombresdecodigos.length
	let s = 0

	for (s=0; s < nlistcod; s++){
		let eticodigos = "<div><div clas='titulo_cod'><h2 id='ti_codi'>" + fileJson.listadecodigos.nombresdecodigos[s] + "</h2></div><img src='" + fileJson.listadecodigos.imagendelcodigo[s] + "'><div class='url'><a href='" + fileJson.listadecodigos.linksdecodigos[s] + "' target='_blank'> Ver Codigo</a></div></div>"
	}

	
	PrintInDisplay('codigos', eticodigos)
	console.log(nlistcod)

}

PaginaDeCodigos()
