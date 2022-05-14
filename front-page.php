<?php get_header(); ?>

<main>
    <section class="d-flex flex-column justify-content-center" id="banner">
        <div class="container">
            <div class="w-50">
                <h1 class="mb-2">Potencializamos negócios</h1>
                <h4 class="mb-4">Aliados a tecnologia, estruturamos dados e geramos visões que auxiliam na gestão do seu negócio, guiando a transformação de processos e pessoas para alavancar os resultados.</h4>
                <?php
                    includeFile('components/button.php',
                        array(
                            'title' => 'Fale conosco'
                        )
                    )
                ?>
            </div>
        </div>
    </section>

    <section id="about">
        
    </section>
</main>

<?php get_footer(); ?>