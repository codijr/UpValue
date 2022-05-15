<div class="card-blog my-3">
    <div class="d-flex">
        <div id="image">
            <img class="me-3 rounded-3" src="<?php echo $imgUrl ?>" alt="Teste">
        </div>

        <div class="d-flex flex-column justify-content-between" id="info">
            <h4 class="f-neutral"><?php echo $title ?></h4>

            <div class="d-flex" id="author">
                <img class="me-2" src="<?php echo get_template_directory_uri(); ?>/assets/icons/author.svg" alt="Author icone">

                <p class="body-2 f-neutral">Escrito por <?php echo $author ?></p>
            </div>

            <div class="d-flex justify-content-between">
                <p class="overline f-neutral"><?php echo $date ?></p>
                <p class="overline f-neutral"><?php echo $readingTime ?> de leitura</p>
            </div>
        </div>
    </div>
</div>