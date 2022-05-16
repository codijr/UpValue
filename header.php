<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon.svg" />

    <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img id="neutral-logo" src="<?php echo get_template_directory_uri(); ?>/assets/icons/neutral-logo.svg" alt="UpValue Logo">

                    <img id="logo" src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.svg" alt="UpValue Logo">

                    <img id="reduced-neutral-logo" src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo-reduced-neutral.svg" alt="UpValue Logo">

                    <img id="reduced-logo" src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo-reduced.svg" alt="UpValue Logo">
                </a>

                <button class="navbar-toggler d-md-none border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navBar" aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end d-md-flex" id="navBar">
                    <ul class="navbar-nav mb-2 mb-lg-0 d-flex align-items-center">
                        <li class="nav-item">
                            <a class="nav-link <?php if(is_front_page()) { echo 'border-bottom';} ?>" aria-current="home" href="<?php echo get_home_url(); ?>"><h4 class="f-neutral">Home</h4></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="blog" href="<?php echo get_home_url(); ?>/category/geral"><h4 class="f-neutral">Blog</h4></a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="https://upvalue.dados.app.br/login" target="_blank">
                                <button>Área do cliente</button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>