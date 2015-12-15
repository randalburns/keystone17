<?php
/**
 * jhu_id template for displaying the header
 *
 * @package WordPress
 * @subpackage jhu_id
 * @since jhu_id 1.0
 */
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <?php get_template_part('template-part', 'meta' ); ?>
        <?php
            if (get_field('section_color')):
                $color = get_field('section_color');
            endif;
        ?>
        <style type="text/css">
        .page_nav a:hover,
        .page_nav a.active {
            color: <?php echo $color ?>;
        }

        .menu-toggle,
        .menu-toggle:before,
        .left-off-canvas-menu,
        .entry-header.stuck,
        .entry-header[data-magellan-expedition="fixed"] {
            background-color: <?php echo $color ?>;
        }
        </style>
    </head>

    <body <?php body_class('site interior page'); ?>>
        <!--[if lt IE 9]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="off-canvas-wrap" data-offcanvas>
            <div class="inner-wrap">
                <header class="site-masthead" role="banner">
                    <div class="row">
                        <div class="masthead-brand columns medium-3">
                            <h1 class="brand-logo">
                                <a class="brand-mark" href="//brand.jhu.edu">Johns Hopkins University</a>
                            </h1>
                        </div>
                        <nav class="site-utility columns medium-7" role="navigation">
                        <?php
                            $utility_args = array(
                                'theme_location'  => 'utility-menu',
                                'menu_class'      => 'nav utility_nav',
                                'menu_id'         => '',
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            );
                            wp_nav_menu($utility_args);
                        ?>
                        </nav><!-- /.site-navigation -->
                    </div>
                </header><!-- /.site-masthead -->

                <aside class="left-off-canvas-menu site-nav" role="navigation">
                  <ul class="off-canvas-list site_nav nav nav--stack">
                    <li><a href="/" title="Brand Guidelines Homepage">Guideline Homepage</a></li>
                    <?php get_template_part('template-part', 'site_nav'); ?>
                  </ul>
                </aside>
