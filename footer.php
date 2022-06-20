<footer>
    <?php
        $args = array(
            'post_type' => 'textos_da_home',
            'name'      => 'footer',
        );
        $postr = new WP_Query($args);
        if($postr->have_posts()) : while ($postr->have_posts()) : $postr->the_post();
    ?>
    <div class="container py-5">
        <div class="row d-flex justify-content-center" id="top-section">
            <div class="col-7 col-md-3">
                <a class="navbar-brand w-100" href="<?php echo get_home_url(); ?>">
                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/icons/neutral-logo.svg" alt="UpValue Logo">
                </a>
            </div>
        </div>

        <hr class="neutral"/>

        <div class="row w-100 m-0" id="middle-section">
            <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="d-flex justify-content-center">
                    <img class="me-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/map-pointer.svg" alt="Endereço ícone">
                    <p class="body"><?php echo get_field('footer_local'); ?></p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="d-flex justify-content-center">
                    <img class="me-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/email.svg" alt="Email ícone">
                    <p class="body"><?php echo get_field('footer_email'); ?></p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="d-flex justify-content-center">
                    <img class="me-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/phone.svg" alt="Telefone ícone">
                    <p class="body"><?php echo get_field('footer_telefone'); ?></p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="d-flex justify-content-center">
                    <img class="me-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagram.svg" alt="Instagram ícone">
                    <a href="<?php echo get_field('url_instagram'); ?>" target="_blank"><p class="body"><?php echo get_field('footer_instagram'); ?></p></a>
                </div>
            </div>
        </div>

        <hr class="neutral thin"/>

        <p class="text-center mb-0 body-2" id="bottom-section">
            © UP Value Soluções LTDA 2022. CNPJ 45.592.823/0001-91. Todos os direitos reservados. Desenvolvido pela <a class="f-neutral" href="http://www.codijr.ufc.br" target="_blank">Container Digital Jr.</a>
        </p>
    </div>
</footer>

<a href="https://wa.me/5585997438590" target="_blank" id="whatsapp-button">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/whatsapp-button.svg" alt="whatsapp">
</a>
<?php endwhile; else: endif; wp_reset_postdata();?>
<?php wp_footer(); ?>
</body>
</html>