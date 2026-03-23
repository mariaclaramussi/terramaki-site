<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Send+Flowers&family=Sora:wght@100..800&family=Zalando+Sans:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/ec34bba31e.js" crossorigin="anonymous"></script>

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> class="<?php if(is_page_template('page-reservado.php')): ?><?php echo 'light-background'?><?php endif; ?>">
    <?php wp_body_open(); ?>

    <header
        class="header <?php if(is_page_template('page-reservado.php')): ?><?php echo 'light-background'?><?php endif; ?>">
        <div class="container">
            <div class="row">
                <ul class="web-menu">
                    <div class="align-menu-items">
                        <li><a href="<?php echo get_site_url(); ?>">Início</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/sobre">A experiência</a></li>
                    </div>

                    <?php if(is_page_template('page-reservado.php')): ?>
                        <a href="<?php echo get_site_url(); ?>/reservado">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-reservado.svg"
                                alt="Logo do Terramaki Reservado">
                        </a>
                    <?php else: ?>
                        <a href="<?php echo get_site_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-bege.svg"
                                alt="Logo do Terramaki">
                        </a>
                    <?php endif; ?>

                    <div class="align-menu-items">
                        <li><a href="<?php echo get_site_url(); ?>/reservado">O Reservado</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/contato">Contato</a></li>
                    </div>
                </ul>
                 <div class="mobile-menu">
                    <?php if(is_page_template('page-reservado.php')): ?>
                        <a href="<?php echo get_site_url(); ?>/reservado">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-reservado.svg"
                                alt="Logo do Terramaki Reservado">
                        </a>
                    <?php else: ?>
                        <a href="<?php echo get_site_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-bege.svg"
                                alt="Logo do Terramaki">
                        </a>
                    <?php endif; ?>

                    <input class="menu-btn" type="checkbox" id="menu-btn" />
                    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

                    <div class="menu-list">
                        <ul>
                            <li><a href="<?php echo get_site_url(); ?>">Início</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/sobre">A experiência</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/reservado">O Reservado</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/contato">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
