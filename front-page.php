<?php get_header();?>

<main>
    <?php
        $args = array(
            'post_type' => 'textos_da_home',
        );
        $banner_query = new WP_Query($args);
    ?>
    <section class="d-flex flex-column justify-content-center" id="banner">
        <div class="container mb-5">
            <div class="w-100">
                <h1 class="mb-3 f-neutral w-100"><?php echo get_field('titulo'); ?></h1>
                <h4 class="mb-5 f-neutral"><?php echo get_field('subtitulo'); ?></h4>
                <a href="#contact">
                    <button class="neutral"><?php echo get_field('texto_botao_cta'); ?></button>
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
                            <h4 class="me-3"><?php echo get_field('quem_somos'); ?></h4>
                            <hr class="w-25"> 
                        </div>
                    </div>

                    <h3 class="mb-4" id="title"><?php echo get_field('titulo_do_quem_somos'); ?></h3>

                    <p class="body">
                        <?php echo get_field('corpo_do_quem_somos'); ?>
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
                    <h4 class="me-3 f-neutral"><?php echo get_field('nossas_solucoes'); ?></h4>
                    <hr class="w-25 neutral"> 
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h3 class="mb-5 f-neutral" id="title"><?php echo get_field('titulo_nossas_solucoes'); ?></h3>
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
                                        <p class="body-2">Entendimento das atividades que são responsáveis por gerar os dados com o objetivo de identificar oportunidades de melhoria nos processos e viabilizar uma visão detalhada dos resultados.</p>
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
                                        <p class="body-2">Dashboards disponíveis em uma plataforma segura e exclusiva que permitem o acompanhamento dos resultados sema necessidade de exportar e tratar dados diariamente.</p>
                                        <div class="collapse" id="varejo">
                                            <p class="body-2">
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
                                        <p class="body-2">Com a utilização dos dashboards, realize o monitoramento dos indicadores como forma de potencializar a tomada de decisão e avaliar os fatores que garantirão o sucesso do seu negócio!</p>
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
                                        <p class="body-2">Entendimento das atividades que são responsáveis por gerar os dados com o objetivo de identificar oportunidades de melhoria nos processos e viabilizar uma visão detalhada dos resultados.</p>
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
                                        <p class="body-2">Dashboards disponíveis em uma plataforma segura e exclusiva que permitem o acompanhamento dos resultados sema necessidade de exportar e tratar dados diariamente.</p>
                                        <div class="collapse" id="varejo">
                                            <p class="body-2">
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
                                        <p class="body-2">Com a utilização dos dashboards, realize o monitoramento dos indicadores como forma de potencializar a tomada de decisão e avaliar os fatores que garantirão o sucesso do seu negócio!</p>
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
                                        <p class="body-2">Entendimento das atividades que são responsáveis por gerar os dados com o objetivo de identificar oportunidades de melhoria nos processos e viabilizar uma visão detalhada dos resultados.</p>
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
                                        <p class="body-2">Dashboards disponíveis em uma plataforma segura e exclusiva que permitem o acompanhamento dos resultados sema necessidade de exportar e tratar dados diariamente.</p>
                                        <div class="collapse" id="varejo">
                                            <p class="body-2">
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
                                        <p class="body-2">Com a utilização dos dashboards, realize o monitoramento dos indicadores como forma de potencializar a tomada de decisão e avaliar os fatores que garantirão o sucesso do seu negócio!</p>
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
                            <h4 class="me-3"><?php echo get_field('como_atuamos'); ?></h4>
                            <hr class="w-25"> 
                        </div>
                    </div>

                    <h3 class="mb-3" id="title"><?php echo get_field('titulo_como_atuamos'); ?></h3>

                    <p class="body">
                        <?php echo get_field('corpo_como_atuamos'); ?>
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
                        <h4 class="me-3 f-neutral"><?php echo get_field('nossos_parceiros'); ?></h4>
                        <hr class="w-25 neutral"> 
                    </div>
                </div>

                <h3 class="mb-5 f-neutral" id="title"><?php echo get_field('titulo_nossos_parceiros'); ?></h3>

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
    <?php endif; ?>

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
                                <h4 class="me-3 "><?php echo get_field('nossos_clientes'); ?></h4>
                                <hr class="w-25"> 
                            </div>
                        </div>
                        <h3 class="mb-4" id="title"><?php echo get_field('titulo_dos_depoimentos'); ?></h3>
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
    <?php endif; ?>

    <section id="contact">
        <div class="container py-5">
            <div class="mb-4" id="category">
                <div class="w-50 d-flex align-items-center">
                    <h4 class="me-3 f-neutral"><?php echo get_field('contato'); ?></h4>
                    <hr class="w-25 neutral"> 
                </div>
            </div>

            <div class="row w-100 justify-content-center">
                <div class="col-12 col-lg-5" id="info-contact">
                    <h3 class="mb-4 f-neutral" id="title"><?php echo get_field('titulo_de_contato'); ?></h3>

                    <p class="body mb-5 f-neutral">
                        <?php echo get_field('descricao_de_contatos'); ?>
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

    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3
    );
    $relate_query = new WP_Query($args);
    if($relate_query->have_posts()) : ?>
        <section class="position-relative" id="blog">
            <img class="position-absolute" id="pattern-roxo" src="<?php echo get_template_directory_uri(); ?>/assets/icons/pattern-roxo.svg"/>

            <div class="container py-5">
                <div class="row" id="info-blog">
                    <div class="col-12 mb-4" id="info">
                        <div class="mb-4" id="category">
                            <div class="d-flex align-items-center">
                                <h4 class="me-3"><?php echo get_field('blog'); ?></h4>
                                <hr class="w-25"> 
                            </div>
                        </div>


                        <div class="w-100 d-flex flex-wrap">
                            <div class="col-12 col-md-8">
                                <h3 id="title"><?php echo get_field('titulo_do_blog'); ?></h3>
                            </div>

                            <div class="col-12 col-md-4 d-flex justify-content-end align-items-end">
                                <a href="<?php echo get_home_url(); ?>/category/geral" class="fw-normal">
                                    Acesse nosso Blog  >
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row gx-3 mt-3 ms-2" id="cards-blog"> 
                    <?php while ($relate_query->have_posts()) : $relate_query->the_post(); ?>
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
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif;?>
</main>

<?php get_footer(); ?>