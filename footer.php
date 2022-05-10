<footer class="bg-secondary">
    <div class="container">
        <div class="py-3 border-bottom row">
            <div class="col-3">
                <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.svg" alt="UpValue Logo">
                </a>
            </div>

            <div class="col-6">
                <p class="mb-0">Frase tema da UpValue</p>
            </div>

            <div class="col-3">
                <ul class="collapse nav navbar-collapse d-flex justify-content-end" id="navbarNavDropdown">
                    <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Contato</a></li>
                </ul>
            </div>
        </div>

        <div class="py-3 row border-bottom">
            <div class="col-3">Endereço</div>
            <div class="col-3">Telefone</div>
            <div class="col-3">E-mail</div>
            <div class="col-3">Social</div>
        </div>

        <p class="py-3 text-center mb-0">
            ©Up Value 2019-2022. Todos os Direitos reservados. Desenvolvido pela <a href="http://www.codijr.ufc.br">Container Digital Jr.</a>
        </p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>