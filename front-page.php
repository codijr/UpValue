<?php get_header(); ?>

<main>
    <section class="d-flex flex-column justify-content-center" id="banner">
        <div class="container">
            <div class="w-100">
                <h1 class="mb-3 f-neutral">Potencializamos negócios</h1>
                <h4 class="mb-4 f-neutral">Aliados a tecnologia, estruturamos dados e geramos visões que auxiliam na gestão do seu negócio, guiando a transformação de processos e pessoas para alavancar os resultados.</h4>
                <a href="#contact">
                    <button class="neutral">Fale conosco</button>
                </a>
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
                        <ul class="row p-0">
                            <div class="col-6 d-flex flex-column align-items-start">
                                <p class="body-2 f-neutral"><li>Criatividade</li></p>
                                <p class="body-2 f-neutral"><li>Confiança</li></p>
                                <p class="body-2 f-neutral"><li>Profissionalismo</li></p>
                                <p class="body-2 f-neutral"><li>Inovação</li></p>
                            </div>

                            <div class="col-6 d-flex flex-column align-items-start">
                                <p class="body-2 f-neutral"><li>Agilidade</li></p>
                                <p class="body-2 f-neutral"><li>Resiliência</li></p>
                                <p class="body-2 f-neutral"><li>Ética</li></p>
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
                <div class="d-flex align-items-center">
                    <h4 class="me-3 f-neutral">NOSSAS SOLUÇÕES</h4>
                    <hr class="w-25 neutral"> 
                </div>
            </div>

            <h3 class="mb-4 f-neutral" id="title">Conheça os UPCombos</h3>

            <p class="body f-neutral mb-5">
                Os UpCombos são compostos por painéis gerenciais que permitem o acompanhamento dos resultados do seu negócio, sem restrição de horário e lugar, sem a necessidade de estar exportando e tratando dados de sistemas.
            </p>

            <div class="swiper swiper-solutions">
                <div class="swiper-wrapper d-flex mb-2">
                    <div class="swiper-slide d-flex justify-content-center w-100 mx-4">
                        <div class="card-solutions bg-neutral d-flex flex-column align-items-center text-center px-3 w-100 rounded-3">
                            <div class="my-2 py-2  d-flex flex-column align-items-center">
                                <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/varejo.svg" alt="">
                                <h4>Varejo</h4>
                            </div>
                            
                            <ul class="mb-2 ps-0">
                                <li>
                                    <p class="body-2">Comercial</p>
                                    <p class="body-2">Financeiro</p>
                                    <p class="body-2">Estoque</p>
                                    <p class="body-2">Compras</p>
                                    <div class="collapse" id="varejo">
                                        <p class="body-2">Curadoria</p>
                                        <p class="body-2">Gestão de indicadores</p>
                                    </div>
                                </li>
                            </ul>

                            <button class="accordion-button shadow-none collapsed d-flex justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#varejo" aria-expanded="false" aria-controls="collapse">
                                <p class="caption">Ver mais</p>
                            </button>
                        </div>
                    </div>

                    <div class="swiper-slide d-flex justify-content-center w-100 mx-4">
                        <div class="card-solutions bg-neutral d-flex flex-column align-items-center text-center px-3 w-100 rounded-3">
                            <div class="my-2 py-2  d-flex flex-column align-items-center">
                                <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/transport.svg" alt="">
                                <h4>Distribuidoras</h4>
                            </div>
                            
                            <ul class="mb-2 ps-0">
                                <li>
                                    <p class="body-2">Comercial</p>
                                    <p class="body-2">Financeiro</p>
                                    <p class="body-2">Estoque</p>
                                    <p class="body-2">Compras</p>
                                    <div class="collapse" id="distribuidora">
                                        <p class="body-2">Curadoria</p>
                                        <p class="body-2">Gestão de indicadores</p>
                                    </div>
                                </li>
                            </ul>

                            <button class="accordion-button shadow-none collapsed d-flex justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#distribuidora" aria-expanded="false" aria-controls="collapse">
                                <p class="caption">Ver mais</p>
                            </button>
                        </div>
                    </div>

                    <div class="swiper-slide d-flex justify-content-center w-100 mx-4">
                        <div class="card-solutions bg-neutral d-flex flex-column align-items-center text-center px-3 w-100 rounded-3">
                            <div class="my-2 py-2  d-flex flex-column align-items-center">
                                <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/telecom.svg" alt="">
                                <h4>ISP Telecom</h4>
                            </div>
                            
                            <ul class="mb-2 ps-0">
                                <li>
                                    <p class="body-2">Comercial</p>
                                    <p class="body-2">Cancelamento</p>
                                    <p class="body-2">Base Contratos</p>
                                    <p class="body-2">Financeiro </p>
                                    <div class="collapse" id="telecom">
                                        <p class="body-2">Operação</p>
                                        <p class="body-2">Atendimento</p>
                                        <p class="body-2">Curadoria</p>
                                        <p class="body-2">Gestão de indicadores</p>
                                        <p class="body-2">Outros</p>
                                    </div>
                                </li>
                            </ul>

                            <button class="accordion-button shadow-none collapsed d-flex justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#telecom" aria-expanded="false" aria-controls="collapse">
                                <p class="caption">Ver mais</p>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-navigation w-100 d-flex justify-content-end">
                    <div class="swiper-button-prev me-3">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/icons/prev.svg" alt="">
                    </div>
                    <div class="swiper-button-next">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/icons/next.svg" alt="">
                    </div>
                </div>
            </div>
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

            <div class="row w-100 justify-content-center">
                <div class="col-12 col-md-6" id="info-contact">
                    <h3 class="mb-4" id="title">Temos soluções que irão 
                    ajudar o seu negócio a alcançar resultados exponenciais!</h3>

                    <p class="body mb-4">
                        Preencha o formulário para entrar em contato.
                    </p>
                </div>

                <div class="col-12 col-md-6 rounded-3 px-4 py-2" id="form">
                    <?php echo do_shortcode('[contact-form-7 id="6" title="Formulário de contato" class="w-100"]');?>
                </div>
            </div>
        </div>
    </section>

    <script>
        $('.wpcf7-select').change(() => { 
            const segment = $('select[name="segment"]').val();
            const system = $('select[name="system"]').val();
            $('input[name="message"]').val(`Olá, sou uma empresa de ${segment}, utilizo um sistema de ${system} e gostaria de realizar um orçamento`);
        });
    </script>
    
    <section id="partners">
        <div class="container py-5">
            <div class="mb-5" id="category">
                <div class="d-flex align-items-center">
                    <h4 class="me-3 f-neutral">NOSSOS PARCEIROS</h4>
                    <hr class="w-25 neutral"> 
                </div>
            </div>

            <h3 class="mb-4 f-neutral" id="title">Conheça as empresas que estão alinhadas ao nosso propósito e que nos ajudam a entregar as melhores soluções.</h3>

            <div class="swiper swiper-partners w-100">
                <div class="swiper-wrapper d-flex">
                    <?php
                        $args = array (
                        'post_type' => 'parceiros',
                        'orderby' => 'title',
                        'order' => 'ASC',
                    );
                    $partners_query = new WP_Query($args);

                    if($partners_query->have_posts()) : 
                        while ($partners_query->have_posts()) : $partners_query->the_post(); ?>
                            <div class="swiper-slide d-flex justify-content-center">
                                <?php 
                                    includeFile('components/card-partners.php', array(
                                        'imgUrl' => get_the_post_thumbnail_url($post->ID),
                                        'partner' => get_the_title($post->ID)
                                    ))
                                ?>
                            </div>
                    <?php endwhile; endif; wp_reset_postdata();?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
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

            <div class="swiper swiper-testimonial w-100">
                <div class="swiper-wrapper d-flex">
                    <?php
                        $args = array (
                        'post_type' => 'depoimentos',
                        'orderby' => 'title',
                        'order' => 'ASC',
                    );
                    $testimonial_query = new WP_Query($args);

                    if($testimonial_query->have_posts()) : 
                        while ($testimonial_query->have_posts()) : $testimonial_query->the_post(); ?>
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
                    <?php endwhile; endif; wp_reset_postdata();?>
                    
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="container py-5">
            <div class="row mb-3" id="info-blog">
                <div class="col-12 col-md-6" id="info">
                    <div class="mb-5" id="category">
                        <div class="d-flex align-items-center">
                            <h4 class="me-3 f-neutral">BLOG</h4>
                            <hr class="w-25 neutral"> 
                        </div>
                    </div>

                    <h3 class="mb-4 f-neutral" id="title">Acompanhe as novidades da UpValue</h3>
                    
                    <a href="<?php echo get_home_url(); ?>/blog">
                        <button>Acesse nosso Blog</button>
                    </a>
                </div>

                <div class="col-12 col-md-6 p-3" id="cards-blog"> 
                    <?php
                        $count = 1;
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3
                        );
                        $relate_query = new WP_Query($args);
                        if($relate_query->have_posts()) : while ($relate_query->have_posts()) : $relate_query->the_post();
                    ?>
                    <div class="col-12">
                        <a href="<?php echo get_permalink();?>">
                            <?php 
                                $titulo = '';
                                if (strlen($post->post_title) > 53) {
                                    $titulo = substr(the_title($before = '', $after = '', FALSE), 0, 56) . '...'; } 
                                else {
                                    $titulo= esc_html( get_the_title() );
                                }
                                if($count == 2){
                                    echo '<hr class="w-100 mt-4 mb-4" style="border: 0; height: 2px;
                                    background-color: var(--neutral);">';
                                }
                                includeFile('components/card-blog.php', array(
                                    'imgUrl' => $post->ID,
                                    'title' => $titulo,
                                    'author' => esc_html( get_the_author() ),
                                    'date' => get_the_date('d-m-Y'),
                                    'readingTime' => '?',
                                    'color' => 'f-neutral',
                                    'class' => 'dif'
                                ));
                                if($count == 2){
                                    echo '<hr class="w-100 mt-4 mb-4" style="border: 0; height: 2px;
                                    background-color: var(--neutral); ">';
                                }
                                $count+=1;
                            ?>
                        <a href="<?php echo get_permalink();?>">
                    </div>
                    <?php endwhile; else: endif; wp_reset_postdata();?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>