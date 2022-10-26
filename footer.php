<script>
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

				const { PrintInDisplay } = await import('./resource/js/funciones-globales.js')
				PrintInDisplay('navbar', etiqueta)

			}

			barra_de_navegacion()
		</script>

<footer>
    <section>
        <p>
            alequivocadotv.atwebpages.com &copy 2022
        </p>
        <p>
            Código en 
            <span>
                <a href="https://github.com/hasael014/htdocs" target="_blank">
                    GitHub
                </a>
            </span>
        </p>
        <p>
            Echo por <span class="bold-text-name">A</span>sael <span class="bold-text-name">H</span>ernández <span class="bold-text-name">B</span>autista
        </p>
        
        <p class="contactos-de-suger">
            Si tienes alguna sugerencia que creas que puede aportar al proyecto puedes contactarme al este correo unpocode00@gmail.com, estaré muy agradecido con tu feedback para continuar mejorando.
        </p>
    </section>
</footer>
</main>