<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/font-awesome.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open() ?>
    <header>

        <nav class="navigation navigation-bar">
            <h1 class="logo">
                Samba
                <span>SENE</span>
            </h1>

            <?php wp_nav_menu(array(
                'theme_location' => 'main menu',
                'menu_class' => 'register-menu'
            ))
            ?>


</nav>
<ul class="navigation navigation-social">
    <li>
        <a href="http://">
            <i class="fa fa-github" aria-hidden="true"></i>
        </a>
    </li>
    <li>
        <a href="http://">
            <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>

    </li>
    <li>
        <a href="http://">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
        </a>

    </li>
</ul>



    </header>