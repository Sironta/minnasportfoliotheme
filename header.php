<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minna's Portfolio</title>
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url") ?>">
    <?php wp_head(); ?>
</head>
<body>
    <header class="container">
        <div class="header container justify-space-between">
        <a href="<?php echo home_url(); ?>">
            <img class="minna-logo" id="header-logo" src="<?php bloginfo("template_url") ?>/Logo.png" alt="">
        </a>
            <nav>
                <?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
            </nav>
            <button class="primary-btn">Hire me</button>
        </div>
    </header>