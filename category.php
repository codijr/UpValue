<?php get_header(); ?>
    <!------------------
    | Banner
    |------------------>
    <section>
        <div class="container" style="height: 5rem;">


        </div>
    </section>

    <!------------------
    | Destaques
    |------------------>
    <section id="highlight">
        <div class="container py-5">  
            <div class="col-12" id="highlight-header">
                <div class="mb-4">
                    <div class="d-flex align-items-center">
                        <h4 class="me-3">DESTAQUES</h4>
                        <hr class="w-25"> 
                    </div>
                </div>

                <h3 class="mb-4" id="title">Últimas atualizações</h3>
            </div>

            <!------------------
            | ultimos posts
            |------------------>

            <div class="row col-12" id="highlight-content">
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
                                        echo get_template_directory_uri()."/assets/images/";
                                    }?>
                                " 
                                alt="<?php the_title();?>"
                            >
                        </div>

                        <div class="d-flex flex-column justify-content-between col-12 mt-3" id="post-info">

                            <div class="d-flex flex-wrap justify-content-between mb-4">
                                <div class="d-flex" id="author">
                                    <img class="me-2" src="<?php echo get_template_directory_uri(); ?>/assets/icons/author.svg" alt="Author icone">
                                    <p class="body-2"><?php the_author();?></p>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <?php the_date( 'd-m-Y', '<p class="body-2">', '</p>' ); ?>
                                    <p class="body-2">? de leitura</p>
                                </div>
                            </div>

                            <h3 class=""><?php the_title();?></h3>
                        </div>
                    </div>
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
                                'readingTime' => '?'
                            ));
                            if($count == 2){
                                echo '<hr class="w-100 mt-4 mb-4" style="border: 0; height: 2px;
                                background-color: var(--neutral); ">';
                            }
                            $count+=1;
                        ?>
                    </div>
                    <?php endwhile; else: endif; wp_reset_postdata();?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>