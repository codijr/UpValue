<?php get_header(); ?>

<main>
    <section class="d-flex flex-column justify-content-center" id="banner">
        <div class="container">
            <div class="w-100">
                <h1 class="mb-2 f-neutral">Potencializamos negócios</h1>
                <h4 class="mb-4 f-neutral">Aliados a tecnologia, estruturamos dados e geramos visões que auxiliam na gestão do seu negócio, guiando a transformação de processos e pessoas para alavancar os resultados.</h4>
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
        <div class="container py-5">
            <div class="row mb-3" id="info-about">
                <div class="col-12 col-md-6" id="info">
                    <div class="mb-5" id="category">
                        <div class="d-flex align-items-center">
                            <h4 class="me-3">QUEM SOMOS</h4>
                            <hr class="w-25"> 
                        </div>
                    </div>

                    <h3 class="mb-4" id="title">Somos os principais parceiros da transformação do seu negócio!</h3>

                    <p class="body">
                        Entendemos que ter dados confiáveis e visões dinâmicas dos resultados são a base para a gestão de um negócio e auxiliam na tomada de decisão. Assim, as oportunidades são identificadas e priorizadas, dando lugar a transformação de processos e melhorando a utilização dos recursos. Para isso, a tecnologia deve ser uma das principais aliadas e estamos aqui para lhe ajudar a viver essa mudança.
                    </p>
                </div>

                <div class="col-12 col-md-6 p-3" id="image"> 
                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/team.jpg" alt="Equipe imagem">
                </div>
            </div>

            <div class="row text-center" id="concepts">
                <div class="col-12 col-md-4">
                    <div class="card-concepts py-3 px-4 rounded-3">
                        <h4 class="mb-3 f-neutral">Missão</h4>
                        <p class="body-2 f-neutral">
                            Potencializar negócios através da estruturação de dados, transformação de processos, pessoas e utilização de tecnologias, evoluindo a gestão e alavancando resultados.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card-concepts py-3 px-4 rounded-3">
                        <h4 class="mb-3 f-neutral">Visão</h4>
                        <p class="body-2 f-neutral">
                            Sermos reconhecidos por ajudar empresas a transformar seus negócios, tendo como base dados confiáveis e as soluções tecnológicas.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card-concepts py-3 px-4 rounded-3">
                        <h4 class="mb-3 f-neutral">Valores</h4>
                        <p class="body-2 f-neutral">
                            Criatividade<br>
                            Confiança<br>
                            Profissionalismo<br>
                            Inovação<br>
                            Agilidade<br>
                            Resiliência<br>
                            Ética<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="solutions">
        <div class="container py-5">
            <div class="mb-5" id="category">
                <div class=" w-50 d-flex align-items-center">
                    <h4 class="me-3 f-neutral">NOSSAS SOLUÇÕES</h4>
                    <hr class="w-25 neutral"> 
                </div>
            </div>

            <h3 class="mb-4 f-neutral" id="title">Conheça os UPCombos</h3>

            <p class="body f-neutral">
                Os UpCombos são compostos por painéis gerenciais que permitem o acompanhamento dos resultados do seu negócio, sem restrição de horário e lugar, sem a necessidade de estar exportando e tratando dados de sistemas.
            </p>
        </div>
    </section>

    <section id="contact">
        <div class="container py-5">
            <div class="mb-5" id="category">
                <div class="d-flex align-items-center">
                    <h4 class="me-3 ">CONTATO</h4>
                    <hr class="w-25"> 
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6" id="info-contact">
                    <h3 class="mb-4" id="title">Temos soluções que irão 
                    ajudar o seu negócio a alcançar resultados exponenciais!</h3>

                    <p class="body">
                        Preencha o formulário ao lado para entrar em contato.
                    </p>
                </div>
                <div class="col-12 col-md-6" id="form">
                    
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>