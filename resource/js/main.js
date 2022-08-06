function PrintInDisplay(nameid, x) {
	document.getElementById(nameid).innerHTML = x
}

async function test_de_obtener_data() {
	const resp = await fetch('./resource/json/database.json')
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
