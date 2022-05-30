<?php get_header(); ?>

<main>
    <section class="d-flex flex-column justify-content-center" id="banner">
        <div class="container mb-5">
            <div class="w-100">
                <h1 class="mb-3 f-neutral w-100">Potencializamos negócios</h1>
                <h4 class="mb-5 f-neutral">Aliados a tecnologia, estruturamos dados e geramos visões que auxiliam na gestão do seu negócio, guiando a transformação de processos e pessoas para alavancar os resultados.</h4>
                <a href="#contact">
                    <button class="neutral">Fale conosco</button>
                </a>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container py-5">
            <div class="row mb-5" id="info-about">
                <div class="col-12 col-md-6" id="info">
                    <div class="mb-3" id="category">
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

                <div class="col-12 col-md-6 p-3 d-flex justify-content-center justify-content-xl-end" id="image"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team.jpg" alt="Equipe imagem">
                </div>
            </div>

            <div class="row text-center" id="concepts">
                <div class="col-12 col-md-4">
                    <div class="card-concepts pt-3 px-4 rounded-3">
                        <h4 class="mb-3 f-neutral">Missão</h4>
                        <p class="body-2 f-neutral">
                            Potencializar negócios através da estruturação de dados, transformação de processos, pessoas e utilização de tecnologias, evoluindo a gestão e alavancando resultados.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card-concepts pt-3 px-4 rounded-3">
                        <h4 class="mb-3 f-neutral">Visão</h4>
                        <p class="body-2 f-neutral">
                            Sermos reconhecidos por ajudar empresas a transformar seus negócios, tendo como base dados confiáveis e as soluções tecnológicas.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card-concepts pt-3 px-4 rounded-3">
                        <h4 class="mb-3 f-neutral">Valores</h4>
                        <ul class="row p-0">
                            <div class="col-6 col-md-12 col-xl-6 mb-0 d-flex flex-column align-items-start">
                                <li class="body-2 f-neutral">Profissionalismo</li>
                                <li class="body-2 f-neutral">Inovação</li>
                            </div>

                            <div class="col-6 col-md-12 col-xl-6 d-flex flex-column align-items-start">
                                <li class="body-2 f-neutral">Confiança</li>
                                <li class="body-2 f-neutral">Ética</li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="solutions">
        <div class="container py-5">
            <div class="mb-5" id="category">
                <div class="d-flex align-items-center w-75">
                    <h4 class="me-3 f-neutral">NOSSAS SOLUÇÕES</h4>
                    <hr class="w-25 neutral"> 
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h3 class="mb-5 f-neutral" id="title">Entendendo o processo, estruturando os dados e construindo visões para se ter uma gestão de indicadores.</h3>
                </div>
            </div>

            <ul class="nav nav-tabs d-flex flex-column align-items-center flex-md-row justify-content-md-center mb-4 border-0" id="solutions-tab" role="tablist">
                <li class="nav-item d-flex justify-content-center border-0 mb-2" role="presentation">
                    <button class="nav-link border-0 rounded-0 active" id="varejo-tab" data-bs-toggle="tab" data-bs-target="#combos-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"><h4>Varejo</h4></button>
                </li>

                <li class="nav-item d-flex justify-content-center border-0 mb-2" role="presentation">
                    <button class="nav-link border-0 rounded-0" id="distribuidoras-tab" data-bs-toggle="tab" data-bs-target="#process-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"><h4>Distribuidoras</h4></button>
                </li>

                <li class="nav-item d-flex justify-content-center border-0 mb-2" role="presentation">
                    <button class="nav-link border-0 rounded-0" id="telecom-tab" data-bs-toggle="tab" data-bs-target="#indicators-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false"><h4>ISP Telecom</h4></button>
                </li>
            </ul>

            <div class="tab-content" id="solutions-tab-content">
                <div class="tab-pane fade show active" id="combos-tab-pane" role="tabpanel" aria-labelledby="tab de combos" tabindex="0">
                    <div class="swiper swiper-solutions">
                        <div class="swiper-wrapper d-flex mb-2">
                            <div class="swiper-slide d-flex justify-content-center w-100">
                                <div class="card-solutions bg-neutral d-flex flex-column align-items-center text-center px-3 w-100 rounded-3">
                                    <div class="my-2 py-2  d-flex flex-column align-items-center">
                                        <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/process.svg" alt="">
                                        <h4>Processos</h4>
                                    </div>
                                    
                                    <div class="mb-2 ps-0">
                                        <p class="body-2">Entendimento das atividades que fazem o negócio funcionar, as quais são responsáveis por gerar os dados que irão irão alimentar as áreas, momento esse em que também se discute sobre oportunidades de melhoria nos processos.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide d-flex justify-content-center w-100">
                                <div class="card-solutions bg-neutral d-flex flex-column align-items-center text-center px-3 w-100 rounded-3">
                                    <div class="my-2 py-2  d-flex flex-column align-items-center">
                                        <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/up-combos.svg" alt="">
                                        <h4>UP Combos</h4>
                                    </div>

                                    <div class="mb-2 ps-0">
                                        <p class="body-2">Painéis gerenciais que permitem o acompanhamento dos resultados do seu negócio, sem restrição de horário e lugar,</p>
                                        <div class="collapse" id="varejo">
                                            <p class="body-2">sem a necessidade de estar exportando e tratando dados de sistemas.
                                            <br>
                                            <br>Comercial 
                                            <br>Financeiro 
                                            <br>Estoque
                                            <br>Compras</p>
                                        </div>
                                    </div>

                                    <button class="accordion-button shadow-none collapsed d-flex justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#varejo" aria-expanded="false" aria-controls="collapse">
                                        <p class="caption">Exibir mais</p>
                                    </button>
                                </div>
                            </div>

                            <div class="swiper-slide d-flex justify-content-center w-100">
                                <div class="card-solutions bg-neutral d-flex flex-column align-items-center text-center px-3 w-100 rounded-3">
                                    <div class="my-2 py-2  d-flex flex-column align-items-center">
                                        <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/indicators.svg" alt="">
                                        <h4>Gestão de indicadores</h4>
                                    </div>
                                    
                                    <div class="mb-2 ps-0">
                                        <p class="body-2">Realize o monitoramento dos processos como forma de potencializar a tomada de decisão da gestão e então avalie os fatores que garantiram o sucesso do seu negócio!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-navigation w-100 d-flex justify-content-end d-xl-none">
                            <div class="swiper-button-prev me-3">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/prev.svg" alt="">
                            </div>
                            <div class="swiper-button-next">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/next.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="process-tab-pane" role="tabpanel" aria-labelledby="tab de processos" tabindex="0">
                    <div class="swiper swiper-solutions">
                        <div class="swiper-wrapper d-flex mb-2">
                            <div class="swiper-slide d-flex justify-content-center w-100">
                                <div class="card-solutions bg-neutral d-flex flex-column align-items-center text-center px-3 w-100 rounded-3">
                                    <div class="my-2 py-2  d-flex flex-column align-items-center">
                                        <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/process.svg" alt="">
                                        <h4>Processos</h4>
                                    </div>
                                    
                                    <div class="mb-2 ps-0">
                                        <p class="body-2">Entendimento das atividades que fazem o negócio funcionar, as quais são responsáveis por gerar os dados que irão irão alimentar as áreas, momento esse em que também se discute sobre oportunidades de melhoria nos processos.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide d-flex justify-content-center w-100">
                                <div class="card-solutions bg-neutral d-flex flex-column align-items-center text-center px-3 w-100 rounded-3">
                                    <div class="my-2 py-2  d-flex flex-column align-items-center">
                                        <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/up-combos.svg" alt="">
                                        <h4>UP Combos</h4>
                                    </div>

                                    <div class="mb-2 ps-0">
                                        <p class="body-2">Painéis gerenciais que permitem o acompanhamento dos resultados do seu negócio, sem restrição de horário e lugar,</p>
                                        <div class="collapse" id="varejo">
                                            <p class="body-2">sem a necessidade de estar exportando e tratando dados de sistemas.
                                            <br>
                                            <br>Comercial 
                                            <br>Financeiro 
                                            <br>Estoque
                                            <br>Compras</p>
                                        </div>
                                    </div>

                                    <button class="accordion-button shadow-none collapsed d-flex justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#varejo" aria-expanded="false" aria-controls="collapse">
                                        <p class="caption">Exibir mais</p>
                                    </button>
                                </div>
                            </div>

                            <div class="swiper-slide d-flex justify-content-center w-100">
                                <div class="card-solutions bg-neutral d-flex flex-column align-items-center text-center px-3 w-100 rounded-3">
                                    <div class="my-2 py-2  d-flex flex-column align-items-center">
                                        <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/indicators.svg" alt="">
                                        <h4>Gestão de indicadores</h4>
                                    </div>
                                    
                                    <div class="mb-2 ps-0">
                                        <p class="body-2">Realize o monitoramento dos processos como forma de potencializar a tomada de decisão da gestão e então avalie os fatores que garantiram o sucesso do seu negócio!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-navigation w-100 d-flex justify-content-end d-xl-none">
                            <div class="swiper-button-prev me-3">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/prev.svg" alt="">
                            </div>
                            <div class="swiper-button-next">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/next.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="indicators-tab-pane" role="tabpanel" aria-labelledby="tab de indicadores" tabindex="0">
                    <div class="swiper swiper-solutions">
                        <div class="swiper-wrapper d-flex mb-2">
                            <div class="swiper-slide d-flex justify-content-center w-100">
                                <div class="card-solutions bg-neutral d-flex flex-column align-items-center text-center px-3 w-100 rounded-3">
                                    <div class="my-2 py-2  d-flex flex-column align-items-center">
                                        <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/process.svg" alt="">
                                        <h4>Processos</h4>
                                    </div>
                                    
                                    <div class="mb-2 ps-0">
                                        <p class="body-2">Entendimento das atividades que fazem o negócio funcionar, as quais são responsáveis por gerar os dados que irão irão alimentar as áreas, momento esse em que também se discute sobre oportunidades de melhoria nos processos.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide d-flex justify-content-center w-100">
                                <div class="card-solutions bg-neutral d-flex flex-column align-items-center text-center px-3 w-100 rounded-3">
                                    <div class="my-2 py-2  d-flex flex-column align-items-center">
                                        <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/up-combos.svg" alt="">
                                        <h4>UP Combos</h4>
                                    </div>

                                    <div class="mb-2 ps-0">
                                        <p class="body-2">Painéis gerenciais que permitem o acompanhamento dos resultados do seu negócio, sem restrição de horário e lugar,</p>
                                        <div class="collapse" id="varejo">
                                            <p class="body-2">sem a necessidade de estar exportando e tratando dados de sistemas.
                                            <br>
                                            <br>Comercial 
                                            <br>Cancelamento 
                                            <br>Base Contratos 
                                            <br>Financeiro 
                                            <br>Operação
                                            <br>Atendimento
                                            <br>Outros</p>
                                        </div>
                                    </div>

                                    <button class="accordion-button shadow-none collapsed d-flex justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#varejo" aria-expanded="false" aria-controls="collapse">
                                        <p class="caption">Exibir mais</p>
                                    </button>
                                </div>
                            </div>

                            <div class="swiper-slide d-flex justify-content-center w-100">
                                <div class="card-solutions bg-neutral d-flex flex-column align-items-center text-center px-3 w-100 rounded-3">
                                    <div class="my-2 py-2  d-flex flex-column align-items-center">
                                        <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/indicators.svg" alt="">
                                        <h4>Gestão de indicadores</h4>
                                    </div>
                                    
                                    <div class="mb-2 ps-0">
                                        <p class="body-2">Realize o monitoramento dos processos como forma de potencializar a tomada de decisão da gestão e então avalie os fatores que garantiram o sucesso do seu negócio!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-navigation w-100 d-flex justify-content-end d-xl-none">
                            <div class="swiper-button-prev me-3">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/prev.svg" alt="">
                            </div>
                            <div class="swiper-button-next">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/next.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </section>

    <section class="position-relative" id="our-processes">
        <img class="position-absolute" id="pattern-roxo" src="<?php echo get_template_directory_uri(); ?>/assets/icons/pattern-roxo.svg"/>

        <div class="container py-5">
            <div class="row mb-3 justify-content-between" id="info-about">
                <div class="col-12 col-md-7" id="info">
                    <div class="mb-3" id="category">
                        <div class="d-flex align-items-center">
                            <h4 class="me-3">NOSSOS PROCESSOS</h4>
                            <hr class="w-25"> 
                        </div>
                    </div>

                    <h3 class="mb-3" id="title">Saiba no que acreditamos e como juntos poderemos potencializar o seu negócio!</h3>

                    <p class="body">
                        A UP Value entende que a base para o sucesso de um negócio está em 5 pilares (Fornecedores, Processos, Pessoas, Sistemas e Clientes). Assim, a UP Value recebe os dados gerados por essas partes, as quais interagem entre si, e produz informações necessárias para formar um negócio de sucesso, gerando oportunidades, resolução de problemas e tomada de decisão.
                    </p>
                </div>

                <div class="col-12 col-md-5 col-xl-5 p-3 text-center d-flex justify-content-center justify-content-xl-end" id="image"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/processes.svg" alt="Nosso processo">
                </div>
            </div>
        </div>
    </section>

    <?php $args = array (
        'post_type' => 'parceiros',
        'orderby' => 'title',
        'order' => 'ASC',
    );
    $partners_query = new WP_Query($args); 
    if($partners_query->have_posts()) : ?>
        <section id="partners">
            <div class="container py-5">
                <div class="mb-4" id="category">
                    <div class="d-flex align-items-center">
                        <h4 class="me-3 f-neutral">NOSSOS PARCEIROS</h4>
                        <hr class="w-25 neutral"> 
                    </div>
                </div>

                <h3 class="mb-5 f-neutral" id="title">Conheça as empresas que estão alinhadas ao nosso propósito e que nos ajudam a entregar as melhores soluções.</h3>

                <div class="swiper swiper-partners w-100 mb-3">
                    <div class="swiper-wrapper d-flex">
                        <?php while ($partners_query->have_posts()) : $partners_query->the_post(); ?>
                                <div class="swiper-slide d-flex justify-content-center">
                                    <?php 
                                        includeFile('components/card-partners.php', array(
                                            'imgUrl' => get_the_post_thumbnail_url($post->ID),
                                            'partner' => get_the_title($post->ID)
                                        ))
                                    ?>
                                </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
    <?php endif; wp_reset_postdata(); ?>

    <?php $args = array (
        'post_type' => 'depoimentos',
        'orderby' => 'title',
        'order' => 'ASC',
    );
    $testimonial_query = new WP_Query($args);
    if($testimonial_query->have_posts()) : ?>
        <section class="position-relative" id="clients">
            <img class="position-absolute" id="pattern-azul" src="<?php echo get_template_directory_uri(); ?>/assets/icons/pattern-azul.svg"/>

            <div class="container py-5">
                <div class="row">
                    <div class="col-12 col-md-6" id="info-clients">
                        <div class="mb-4" id="category">
                            <div class="d-flex align-items-center">
                                <h4 class="me-3 ">NOSSOS CLIENTES</h4>
                                <hr class="w-25"> 
                            </div>
                        </div>
                        <h3 class="mb-4" id="title">Acompanhe a opinião de clientes parceiros</h3>
                    </div>
                </div>

                <div class="swiper swiper-testimonial w-100">
                    <div class="swiper-wrapper d-flex">
                        
                            <?php while ($testimonial_query->have_posts()) : $testimonial_query->the_post(); ?>
                                <div class="swiper-slide d-flex justify-content-center p-3">
                                    <?php 
                                        includeFile('components/card-testimonial.php', array(
                                            'testimonial' => get_the_content($post->ID),
                                            'imgUrl' => get_the_post_thumbnail_url($post->ID),
                                            'person' => get_the_title($post->ID),
                                            'location' => get_the_excerpt($post->ID)
                                        ))
                                    ?>
                                </div>
                        <?php endwhile; ?>
                        
                    </div>
                    <div class="swiper-pagination">

                    </div>
                </div>
            </div>
        </section>
    <?php endif; wp_reset_postdata();?>

    <section id="contact">
        <div class="container py-5">
            <div class="mb-4" id="category">
                <div class="w-50 d-flex align-items-center">
                    <h4 class="me-3 f-neutral">CONTATO</h4>
                    <hr class="w-25 neutral"> 
                </div>
            </div>

            <div class="row w-100 justify-content-center">
                <div class="col-12 col-lg-5" id="info-contact">
                    <h3 class="mb-4 f-neutral" id="title">Temos soluções que irão 
                    ajudar o seu negócio a alcançar resultados exponenciais!</h3>

                    <p class="body mb-5 f-neutral">
                        Preencha o formulário para entrar em contato.
                    </p>

                    <div class="w-100 px-0 ps-5">
                        <div class="d-flex justify-content-evenlyn">
                            <?php includeFile('assets/icons/Fornecedores.svg', array()); ?>

                            <?php includeFile('assets/icons/Inovação.svg', array()); ?>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-lg-7 d-flex justify-content-center px-0 ps-4" id="form">
                    <?php echo do_shortcode('[contact-form-7 id="7" title="Formulário de contato"]');?>
                </div>
            </div>
        </div>
    </section>

    <script>
        $('.wpcf7-select').change(() => { 
            const segment = $('select[name="segment"]').val();
            const system = $('input[name="system"]').val();
            $('textarea').val(`Olá, sou uma empresa de ${segment}, utilizo um sistema ${system} e gostaria de realizar um orçamento`);
        });

        $("textarea").bind("input", function(e) {
            while( $(this).outerHeight() < this.scrollHeight +
                                        parseFloat($(this).css("borderTopWidth")) +
                                        parseFloat($(this).css("borderBottomWidth"))
                && $(this).height() < 100 // Altura máxima
            ) {
                $(this).height($(this).height()+1);
            };
        });
    </script>

    <section class="position-relative" id="blog">
        <img class="position-absolute" id="pattern-roxo" src="<?php echo get_template_directory_uri(); ?>/assets/icons/pattern-roxo.svg"/>

        <div class="container py-5">
            <div class="row" id="info-blog">
                <div class="col-12 mb-4" id="info">
                    <div class="mb-4" id="category">
                        <div class="d-flex align-items-center">
                            <h4 class="me-3">BLOG</h4>
                            <hr class="w-25"> 
                        </div>
                    </div>


                    <div class="w-100 d-flex flex-wrap">
                        <div class="col-12 col-md-8">
                            <h3 id="title">Acompanhe as novidades<br> da UpValue</h3>
                        </div>

                        <div class="col-12 col-md-4 d-flex justify-content-end align-items-end">
                            <a href="<?php echo get_home_url(); ?>/category/geral" class="fw-normal">
                                Acesse nosso Blog  >
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row gx-3 mt-3 ms-2" id="cards-blog"> 
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3
                        );
                        $relate_query = new WP_Query($args);
                        if($relate_query->have_posts()) : while ($relate_query->have_posts()) : $relate_query->the_post();
                    ?>
                    <div class="col-12 col-md-6 col-xl-4 pb-4 p-0">
                        <a href="<?php echo get_permalink();?>">
                            <?php 
                                $titulo = '';
                                if (strlen($post->post_title) > 36) {
                                    $titulo = substr(the_title($before = '', $after = '', FALSE), 0, 36) . '...'; } 
                                else {
                                    $titulo= esc_html( get_the_title() );
                                }

                                /*------------------
                                | Tempo de leitura
                                |------------------*/
                                $tempo = '';
                                $content = get_post_field( 'post_content', $post->ID );
                                $quantidade_palavras = str_word_count( strip_tags( $content ) );
                                $tempo_leitura = ceil($quantidade_palavras / 250);
                                if($tempo_leitura == 1){
                                    $tempo = $tempo_leitura." min de leitura";
                                }
                                else{
                                    $tempo = strval($tempo_leitura)." min de leitura";
                                }

                                includeFile('components/card-blog.php', array(
                                    'imgUrl' => $post->ID,
                                    'title' => $titulo,
                                    'author' => esc_html( get_the_author() ),
                                    'date' => get_the_date('d-m-Y'),
                                    'readingTime' => $tempo,
                                    'color' => '',
                                    'class' => 'dif'
                                ));
                            ?>
                        </a>
                    </div>
                    <?php endwhile; else: endif; wp_reset_postdata();?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>