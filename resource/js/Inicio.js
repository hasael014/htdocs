/*async function pagina_inicio(){
	const resp = await fetch('https://api.npoint.io/f334a0f8addbb676b3ba/texto_inicio')
	const fileJson = await resp.json()

	let n_text = fileJson.texto.length -1
	let n = 0
	let text_indice = ""

	for (n=0; n < n_text; n++){
		text_indice += fileJson.texto[n]
	}

	n+1
	text_indice += "</div>" + fileJson.texto[n]

	PrintInDisplay('contenedor_del_indice', text_indice)
}

pagina_inicio()*/