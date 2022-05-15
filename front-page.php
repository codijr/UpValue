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
                <div class="w-50 d-flex align-items-center">
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
                <div class="w-50 d-flex align-items-center">
                    <h4 class="me-3">CONTATO</h4>
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
    
    <section id="partners">
        <div class="container py-5">
            <div class="mb-5" id="category">
                <div class=" w-50 d-flex align-items-center">
                    <h4 class="me-3 f-neutral">NOSSOS PARCEIROS</h4>
                    <hr class="w-25 neutral"> 
                </div>
            </div>

            <h3 class="mb-4 f-neutral" id="title">Conheça as empresas que estão alinhadas ao nosso propósito e que nos ajudam a entregar as melhores soluções.</h3>
        </div>
    </section>

    <section id="clients">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-6" id="info-clients">
                    <div class="mb-5" id="category">
                        <div class="d-flex align-items-center">
                            <h4 class="me-3 ">NOSSOS CLIENTES</h4>
                            <hr class="w-25"> 
                        </div>
                    </div>
                    <h3 class="mb-4" id="title">Acompanhe a opinião de clientes parceiros</h3>
                </div>
            </div>

            <div class="swiper swiper-testimonial">
                <div class="swiper-wrapper d-flex">
                    <div class="swiper-slide d-flex justify-content-center">
                        <?php 
                            includeFile('components/card-testimonial.php', array(
                                'testimonial' => '“ Com a visão do faturamento dos contratos pude entender o real motivo da queda na arrecadação. Eu não sabia por onde começar, até que com os gráficos e comparativos mês a mês, pude entender que por um descuido alguns contratos não estavam sendo faturados. Problema resolvido e agora, de forma fácil, posso realizar o monitoramento. ”',
                                'imgUrl' => get_template_directory_uri() . '/assets/img/executive.jpg',
                                'person' => 'Gustavo Alex',
                                'occupation' => 'Analista',
                                'location' => 'Fortaleza - CE'
                            ))
                        ?>
                    </div>

                    <div class="swiper-slide d-flex justify-content-center">
                        <?php 
                            includeFile('components/card-testimonial.php', array(
                                'testimonial' => '“ Com a visão do faturamento dos contratos pude entender o real motivo da queda na arrecadação. Eu não sabia por onde começar, até que com os gráficos e comparativos mês a mês, pude entender que por um descuido alguns contratos não estavam sendo faturados. Problema resolvido e agora, de forma fácil, posso realizar o monitoramento. ”',
                                'imgUrl' => get_template_directory_uri() . '/assets/img/executive.jpg',
                                'person' => 'Gustavo Alex',
                                'occupation' => 'Analista',
                                'location' => 'Fortaleza - CE'
                            ))
                        ?>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                </div>
        </div>
    </section>

    <section id="blog">
        <div class="container py-5">
            <div class="row mb-3" id="info-blog">
                <div class="col-12 col-md-8" id="info">
                    <div class="mb-5" id="category">
                        <div class="d-flex align-items-center">
                            <h4 class="me-3 f-neutral">BLOG</h4>
                            <hr class="w-25 neutral"> 
                        </div>
                    </div>

                    <h3 class="mb-4 f-neutral" id="title">Acompanhe as novidades da UpValue</h3>

                    <?php
                        includeFile('components/button.php',
                            array(
                                'title' => 'Acesse nosso Blog'
                            )
                        )
                    ?>
                </div>

                <div class="col-12 col-md-4 p-3" id="cards-blog"> 
                    <?php includeFile('components/card-blog.php', array(
                        'imgUrl' => get_template_directory_uri() . '/assets/img/test.jpg',
                        'title' => 'Lorem Ipsum Dolor Sit Amet',
                        'author' => 'Maria',
                        'date' => '03 de maio',
                        'readingTime' => '2min'
                    )) ?>

                    <hr class="thin"> 

                    <?php includeFile('components/card-blog.php', array(
                        'imgUrl' => get_template_directory_uri() . '/assets/img/test.jpg',
                        'title' => 'Lorem Ipsum Dolor Sit Amet',
                        'author' => 'Maria',
                        'date' => '03 de maio',
                        'readingTime' => '2min'
                    )) ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>