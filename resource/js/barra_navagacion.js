/*async function barra_de_navegacion() {
	const resp = await fetch('https://api.npoint.io/f334a0f8addbb676b3ba/barraDeNavegacion')
	const fileJson = await resp.json()

	npestañas = fileJson.linksdepaginas.length

	let etiqueta = '<ul>'
	let i = 0

	for (i = 0; i < npestañas; i++) {
		etiqueta += "<li><a href='" + fileJson.linksdepaginas[i] + "'>"
		etiqueta += "|"+fileJson.nombredepagina[i] + '</a></li>'
	}
	etiqueta += '</ul>'

	PrintInDisplay('navbar', etiqueta)

}*/
