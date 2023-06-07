<footer>
    <section>
        <p>
            alequivocadotv.atwebpages.com &copy 2022 - 2023
        </p>
        <!--<p>
            Código en 
            <span>
                <a href="https://github.com/hasael014/htdocs" target="_blank">
                    GitHub
                </a>
            </span>
        </p>-->
        <p>
            Echo por Asael H B <!--<span class="bold-text-name">A</span>sael <span class="bold-text-name">H</span> <span class="bold-text-name">B</span>-->
        </p>
        <?php
        
// muestra, p.ej.  La última modificación de archivo.txt fue: December 29 2002 22:16:23.

$nombre_archivo = "$name_pages.php";
if (file_exists($nombre_archivo)) {
    echo "<p>La última modificación fue: " . date("M d Y", filectime($nombre_archivo))."</p>";
}
        ?>
        <p class="contactos-de-suger">
            Si tienes alguna sugerencia que creas que puede aportar al proyecto puedes contactarme al este correo asaeliron@gmail.com, estaré muy agradecido con tu feedback para continuar mejorando.
        </p>

        <p class="share">
        <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//alequivocadotv.atwebpages.com/" target="_blank">Share on Facebook</a>
        <a href="https://twitter.com/intent/tweet?text=http%3A//alequivocadotv.atwebpages.com/" target="_blank">Share on Twitter</a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A//alequivocadotv.atwebpages.com/" target="_blank">Share on LinkedIn</a>
        <a href="mailto:http://alequivocadotv.atwebpages.com/?" target="_blank">Send Email</a>
        </p>

        

    </section>
</footer>
</main>