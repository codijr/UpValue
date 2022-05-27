<?php get_header(); ?>
    <!------------------
    | Banner
    |------------------>
    <?php 
        #ALTERE AQUI O TITULO E O NOME DA IMAGEM DO BANNER
        $img = get_template_directory_uri().'/assets/img/blog-img.png';
        includeFile('components/banner.php', 
            array(
                'title'=>'BLOG', 
                'imagem'=> $img,
                'subtitle' => 'Acompanhe as novidades da UpValue'
            )
        ); 
    ?>

    <!------------------
    | Destaques
    |------------------>
<main class="position-relative">
    <img class="position-absolute d-none d-xl-block" id="pattern-roxo" src="<?php echo get_template_directory_uri(); ?>/assets/icons/pattern-roxo.svg"/>

    <img class="position-absolute d-none d-xl-block" id="pattern-azul" src="<?php echo get_template_directory_uri(); ?>/assets/icons/pattern-azul.svg"/>

    <div class="container py-5">
        <section class="mb-5 pb-3" id="highlight">
                <div class="col-12 mb-5 pb-3" id="highlight-header">
                    <div class="mb-4">
                        <div class="d-flex align-items-center">
                            <h4 class="me-3">DESTAQUES</h4>
                            <hr class="w-25"> 
                        </div>
                    </div>

                    <h3 id="title">Últimas atualizações</h3>
                </div>

                <!------------------
                | ultimos posts
                |------------------>

                <div class="row" id="highlight-content">
                    <!------------------
                    | Post único
                    |------------------>
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 1
                        );
                        $relate_query = new WP_Query($args);
                        if($relate_query->have_posts()) : while ($relate_query->have_posts()) : $relate_query->the_post();
                    ?>
                    <div class="col-12 col-lg-7">
                        <a href="<?php echo get_permalink();?>">
                            <!------------------
                            | Featured Image
                            |------------------>
                            <div class="d-flex flex-wrap" id="highlight-post">
                                <div class="col-12 post-frame">
                                    <img class="thumb h-100 w-100 rounded-3" <?php if(!has_post_thumbnail( $post->ID )){
                                        echo "no-thumbnail";
                                        }?>" 
                                        src="<?php if(has_post_thumbnail( $post->ID )){
                                            echo get_the_post_thumbnail_url($post->ID);
                                            }
                                            else{
                                                //alterar a imagem para um placeholder feito
                                                echo get_template_directory_uri()."/assets/img/banner.jpg";
                                            }?>
                                        " 
                                        alt="<?php the_title();?>"
                                    >
                                    <div class="bt-h">
                                        <button>Ver postagem</button>
                                    </div>
                                </div>

                                <div class="d-flex flex-column justify-content-between col-12 mt-3" id="post-info">

                                    <div class="d-flex flex-wrap justify-content-between mb-4">
                                        <div class="d-flex" id="author">
                                            <img class="me-2" src="<?php echo get_template_directory_uri(); ?>/assets/icons/author.svg" alt="Author icone">
                                            <p class="body-2"><?php the_author();?></p>
                                        </div>
                                        
                                        <div class="d-flex justify-content-between ">
                                            <?php the_date( 'd-m-Y', '<p class="body-2">', '</p>' ); ?>

                                            <p class="body-2 mx-2">/</p>

                                            <p class="body-2">
                                                <?php $content = get_post_field( 'post_content', $post->ID );
                                                    $quantidade_palavras = str_word_count( strip_tags( $content ) );
                                                    $tempo_leitura = ceil($quantidade_palavras / 250);
                                                    if($tempo_leitura == 1){
                                                        echo $tempo_leitura." min de leitura";
                                                    }
                                                    else{
                                                        echo strval($tempo_leitura)." min de leitura";
                                                    }
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <!------------------
                                    | Titulo
                                    |------------------>
                                    <h3 class="first-title">
                                        <?php 
                                            if (strlen($post->post_title) > 75) {
                                                echo substr(the_title($before = '', $after = '', FALSE), 0, 75) . '...'; } 
                                                else {
                                                the_title();
                                            } 
                                        ?>
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endwhile; else: endif; wp_reset_postdata();?>


                    <!------------------
                    | Trio de posts
                    |------------------>
                    <div class="col-12 col-lg-5">
                        <?php
                            $count = 1;
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 3,
                                'offset' => 1
                            );
                            $relate_query = new WP_Query($args);
                            if($relate_query->have_posts()) : while ($relate_query->have_posts()) : $relate_query->the_post();
                        ?>
                        <div class="col-12 ">
                            <a href="<?php echo get_permalink();?>">
                                <?php 
                                    /*------------------
                                    | Titulo
                                    |------------------*/
                                    $titulo = '';
                                    if (strlen($post->post_title) > 56) {
                                        $titulo = substr(the_title($before = '', $after = '', FALSE), 0, 56) . '...'; } 
                                    else {
                                        $titulo= esc_html( get_the_title() );
                                    }
                                    if($count == 2){
                                        echo '<hr class="w-100 mt-4 mb-4" style="border: 0; height: 2px;
                                        background-color: var(--neutral);">';
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
                                        'class' => '',
                                    ));
                                    if($count == 2){
                                        echo '<hr class="w-100 mt-4 mb-4" style="border: 0; height: 2px;
                                        background-color: var(--neutral); ">';
                                    }
                                    $count+=1;
                                ?>
                            </a>
                        </div>
                        <?php endwhile; else: endif; wp_reset_postdata();?>
                    </div>
                </div>
        </section>

        <hr class="w-100 neutral"> 

        <section class="mt-5" id="most-recent">
                <div class="col-12 d-flex flex-wrap justify-content-between" id="posts-header">
                    <div>
                    <?php
                        $category = get_category( get_query_var( 'cat' ) );
                        $cat_id = $category->cat_name;
                    ?>
                        <h3 class="mb-4" id="title">Postagens - <?php echo $cat_id;?></h3>
                    </div>
    
                    <div class="dropdown mb-4">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Filtrar por categoria
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <?php
                                $argsCat = array (
                                    'orderby' => 'name',
                                    'order'   => 'ASC'
                                );

                                $categories = get_categories($argsCat); 

                                foreach( $categories as $category ) {
                                    echo '
                                        <li>
                                            <a class="dropdown-item" href="' . get_category_link($category->term_id) . '">
                                                ' . $category->name . '
                                            </a>
                                        </li>
                                    ';   
                                } 
                            ?>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <?php
                        $query = new WP_Query($wp_query->query_vars);
                        if($query->have_posts()) :
                    
                        while ($query->have_posts()) : $query->the_post(); 
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
                                                echo get_template_directory_uri()."/assets/img/banner.jpg";
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
        
                    <?php endwhile; else: endif; wp_reset_postdata();?>
                    <div class="posts-pagination mt-3 mb-5 d-flex flex-wrap justify-content-center">
                        <?php $prev_next = paginate_links(array(
                            'prev_text'          => __( '<' ),
                            'next_text'          => __( '>' ),
                            'type'         => 'array',
                            'end_size' => '2',
                        ));
                        if($prev_next){

                        foreach($prev_next as $key=>$val){

                            if (strpos($val,'"page-numbers current"') !== false) {
                            echo '<div class="active page-item px-2">'.$val.'</div>';
                            } elseif (strpos($val,'"next page-numbers"') !== false || strpos($val,'"prev page-numbers"') !== false  ) {

                            echo'<div class="prevnext px-2">'.$val.'</div>';
                            } else {

                                echo '<div class="page-item px-2">'.$val.'</div>';
                            }

                        } }?>
                    </div>
                </div>
        </section>
    </div>
</main>
    

<?php get_footer(); ?>