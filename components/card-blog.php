<div class="card-blog">
    <div class="d-flex">
        <div id="image">
            <img class="me-3 rounded-3" <?php if(!has_post_thumbnail( $imgUrl )){
                echo "no-thumbnail";
                }?>" 
                src="<?php if(has_post_thumbnail( $imgUrl )){
                    echo get_the_post_thumbnail_url( $imgUrl );
                    }
                    else{
                        //alterar a imagem para um placeholder feito
                        echo get_template_directory_uri()."/assets/images/";
                    }?>
                " 
                alt="<?php echo $title ?>"
            >
        </div>

        <div class="d-flex flex-column justify-content-between" id="info">
            <h4 class="<?php echo $color ?>"><?php echo $title ?></h4>

            <div class="d-flex mt-3 mb-3" id="author">
                <img class="me-2" src="<?php echo get_template_directory_uri(); ?>/assets/icons/author.svg" alt="Author icone">

                <p class="body-2 <?php echo $color ?>">Escrito por <?php echo $author ?></p>
            </div>

            <div class="d-flex justify-content-between">
                <p class="overline <?php echo $color ?>"><?php echo $date ?></p>
                <p class="overline <?php echo $color ?>"><?php echo $readingTime ?> de leitura</p>
            </div>
        </div>
    </div>
</div>