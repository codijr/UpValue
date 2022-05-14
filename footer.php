<footer>
    <div class="container py-3">
        <div class="py-4 border-bottom row" id="top-section">
            <div class="col-3">
                <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/neutral-logo.svg" alt="UpValue Logo">
                </a>
            </div>
        </div>

        <div class="py-4 border-bottom d-flex justify-content-between w-100" id="middle-section">
            <div class="d-flex">
                <img class="me-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/map-pointer.svg" alt="Endereço ícone">
                <p>Fortaleza-CE</p>
            </div>
            <div class="d-flex">
                <img class="me-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/email.svg" alt="Email ícone">
                <p>atendimento@upvalue.com.br</p>
            </div>
            <div class="d-flex">
                <img class="me-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/phone.svg" alt="Telefone ícone">
                <p>Telefone</p>
            </div>
            <div class="d-flex">
                <img class="me-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagram.svg" alt="Instagram ícone">
                <p>@up_value</p>
            </div>
        </div>

        <p class="py-4 text-center mb-0" id="bottom-section">
            ©UpValue 2019-2022. Todos os Direitos reservados. Desenvolvido pela <a href="http://www.codijr.ufc.br" target="_blank">Container Digital Jr.</a>
        </p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>