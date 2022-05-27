<div class="card-blog">
    <div class="d-flex <?php echo $class ?>">
        <div id="image">
            <div class="frame" >
                <img class="rounded-3" <?php if(!has_post_thumbnail( $imgUrl )){
                    echo "no-thumbnail";
                    }?>" 
                    src="<?php if(has_post_thumbnail( $imgUrl )){
                        echo get_the_post_thumbnail_url( $imgUrl );
                        }
                        else{
                            //alterar a imagem para um placeholder feito
                            echo get_template_directory_uri()."/assets/img/banner.jpg";
                        }?>
                    " 
                    alt="<?php echo $title ?>"
                >
                <div class="bt-h">
                    <button>Ver</button>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column justify-content-between ms-3 pe-4" id="info">
            <h4 class="<?php echo $color ?> mb-1"><?php echo $title ?></h4>

            <div class="mt-1">
                <div class="d-flex mb-2" id="author">
                    <img class="me-2" src="<?php echo get_template_directory_uri(); ?>/assets/icons/author.svg" alt="Author icone">

                    <p class="body-2 <?php echo $color ?>">Escrito por <?php echo $author ?></p>
                </div>

                <div class="d-flex justify-content-between">
                    <p class="overline <?php echo $color ?>"><?php echo $date ?></p>
                    <p class="overline <?php echo $color ?>"><?php echo $readingTime ?></p>
                </div>
            </div>
        </div>
    </div>
</div>