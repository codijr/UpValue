<?php get_header(); 
global $post;?>
<main>
    <?php 
        $img;
        if(!has_post_thumbnail( $post->ID )){
            $img = "no-thumbnail";
        }
        if(has_post_thumbnail( $post->ID )){
            $img = get_the_post_thumbnail_url($post->ID);
        }
        else{
            //alterar a imagem para um placeholder feito
            $img = get_template_directory_uri()."/assets/img/";
        }

        $tituloPost = '';
        if (strlen($post->post_title) > 80) {
            $tituloPost = substr(the_title($before = '', $after = '', FALSE), 0, 80) . '...'; } 
        else {
            $tituloPost = esc_html( get_the_title() );
        }
    ?>
    <?php 
        #ALTERE AQUI O TITULO E O NOME DA IMAGEM DO BANNER
        includeFile('components/banner.php', 
            array(
                'title'=>'Blog', 
                'imagem'=>$img,
                'subtitle' => $tituloPost
            )
        ); 
    ?>
    <section class="container mt-5">
        <!-- CATEGORIAS DO POST -->
        <div class="col-12" id="highlight-header">
            <div class="mb-4">
                <div class="d-flex align-items-center">
                    <h4 class="me-3"><?php the_category(', ');?></h4>
                    <hr class="w-25"> 
                </div>
            </div>
        </div>

        <!-- TITULO DO POST -->
        <div class="col-12">
            <h2>
                <?php the_title();?>
            </h2>
        </div>
        

        <!-- EXCERPT -->
        <div class="col-12 mt-4 mb-3 ">
            <h5>
                <?php the_excerpt();?>
            </h5>
        </div>
        
        <section class="d-flex justify-content-between flex-wrap mt-5">
            <!-- AUTOR DO POST -->
            <div class="p-autor">
                <div class="d-flex" id="author">
                    <img class="me-2" src="<?php echo get_template_directory_uri(); ?>/assets/icons/author.svg" alt="Author icone">
                    <p class=" fw-bold"> 
                        Escrito por
                        <?php 
                            $author_id = $post->post_author;
                            echo get_the_author_meta('display_name', $author_id); 
                        ?>
                    </p>
                </div>
            </div>

            <!-- DATA DO POST -->
            <div class="p-data">
                <p class=" fw-bold">
                    <?php setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                    date_default_timezone_set('America/Sao_Paulo');
                    echo strftime('%d de %b, %Y', strtotime($post->post_date));?>
                </p>
            </div>
        </section>
    </section>

    <hr class="container mt-4 mb-4" style="border: 0; height: 2px; background-color: var(--neutral);">

    <section class="container mt-5 mb-5 post-content">
        <?php the_content();?>
    </section>

    <section class="container">
        <section class="d-flex justify-content-between flex-wrap">
            <div class="d-flex">
                <div class="p-autor">
                    <div class="d-flex" id="author">
                        <p class=" fw-bold"> 
                            Compartilhe nas redes:
                        </p>
                    </div>
                </div>
            </div>


            <!-- REDES -->
            <div class="post-share">
                <?php
                    $wplogoutURL = urlencode(get_the_permalink());
                    $wplogoutTitle = urlencode(get_the_title());
                    $wplogoutImage= urlencode(get_the_post_thumbnail_url(get_the_ID(), 'full'));
                ?>
                <div class="social-wrapper">
                    <a class="social-sharing social-facebook ps-4" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $wplogoutURL; ?>" target="_blank" rel="nofollow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="#000">
                            <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                        </svg>
                    </a>

                    <a class="social-sharing social-twitter ps-4" href="https://twitter.com/intent/tweet?text=<?php echo $wplogoutTitle;?>&amp;url=<?php echo $wplogoutURL;?>&amp;via=wplogout" target="_blank" rel="nofollow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="#000">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </a>
                    
                    <a class="social-sharing social-linkedin ps-4" href="https://www.linkedin.com/shareArticle?url=<?php echo $wplogoutURL; ?>&amp;title=<?php echo $wplogoutTitle; ?>&amp;mini=true" target="_blank" rel="nofollow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="#000">
                            <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/>
                        </svg>
                    </a>

                    <a class="social-sharing social-whatsapp ps-4" href="https://api.whatsapp.com/send?text=<?php echo $wplogoutTitle; echo " "; echo $wplogoutURL;?>" target="_blank" rel="nofollow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="#000">
                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>
    </section>

    <hr class="container mt-4 mb-4" style="border: 0; height: 2px; background-color: var(--neutral);">

    <section class="container">
        <div class="mt-5 mb-4">
            <h3>Categorias relacionadas:</h3>
        </div>
        <div class="d-flex flex-wrap">
            <?php 
                $categoriesP = get_the_category( $post->post_id );

                foreach( $categoriesP as $categoryP ) {
                    //mostrar o tanto de cada categoria causa um atraso
                    echo 
                    '<div class="cat-div">
                        <button class="cat-button">
                            <p style="margin-bottom : 0px;">
                                <a href="' . get_category_link($categoryP->term_id) . '">' . $categoryP->name . '
                                ('. $categoryP->count .')
                                </a>
                            </p>
                        </button>
                    </div>';   
                } 
            ?>
        </div>

    </section>


    <section class="container mt-4" id="most-recent">
        <div>
            <h3 class="mb-4">Postagens relacionadas: </h3>
        </div>

        <div class="row">
            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'cat' => $categoriesP[0]->term_id,
                    'post__not_in' => array( $post->ID ),
                );
                $relate_query = new WP_Query($args);
                if($relate_query->have_posts()) : while ($relate_query->have_posts()) : $relate_query->the_post();
            ?>
            <div class="col-12 col-sm-6 col-lg-4 mb-5">
                <a href="<?php echo get_permalink();?>">
                    <div class="d-flex flex-wrap" id="most-recent-post">
                        <div class="col-12 post-frame">
                            <img class="thumb h-100 w-100 rounded-3" <?php if(!has_post_thumbnail( $post->ID )){
                                echo "no-thumbnail";
                                }?>" 
                                src="<?php if(has_post_thumbnail( $post->ID )){
                                    echo get_the_post_thumbnail_url($post->ID);
                                    }
                                    else{
                                        //alterar a imagem para um placeholder feito
                                        echo get_template_directory_uri()."/assets/images/";
                                    }?>
                                " 
                                alt="<?php the_title();?>"
                            >
                            <div class="bt-h">
                                <button>Ver postagem</button>
                            </div>
                        </div>

                        <div class="d-flex flex-column justify-content-between col-12 mt-3" id="post-info">

                            <div class="d-flex flex-wrap justify-content-between mb-2">
                                <p class="body-2">
                                    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/icons/calendar.svg" alt="Calendario icone">
                                    <?php setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                                    date_default_timezone_set('America/Sao_Paulo');
                                    echo strftime('%d/%m/%Y', strtotime($post->post_date));?>
                                </p>
                                <p class="body-2">
                                    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/icons/clock.svg" alt="Relogio icone">
                                    <?php $content = get_post_field( 'post_content', $post->ID );
                                        $quantidade_palavras = str_word_count( strip_tags( $content ) );
                                        $tempo_leitura = ceil($quantidade_palavras / 250);
                                        if($tempo_leitura == 1){
                                            echo $tempo_leitura."min de leitura";
                                        }
                                        else{
                                            echo strval($tempo_leitura)."min de leitura";
                                        }
                                    ?>
                                </p>
                            </div>

                            <h4 class="first-title">
                                <?php 
                                    if (strlen($post->post_title) > 56) {
                                        echo substr(the_title($before = '', $after = '', FALSE), 0, 56) . '...'; } 
                                        else {
                                        the_title();
                                    } 
                                ?>
                            </h4>
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile; else: 
            echo '
            <div class="container mb-5">
                <h4 class="not-found">
                    Desculpe, não encontramos posts relacionados :(
                </h4>
            </div>
            ' 
            ;endif; wp_reset_postdata();?>
        </div>

    </section>

</main>
<?php get_footer(); ?>