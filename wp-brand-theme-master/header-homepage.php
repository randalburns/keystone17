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
<!--[if lt IE 7]>      <html class="no-js billboard-is-fullheight lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js billboard-is-fullheight lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js billboard-is-fullheight lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js billboard-is-fullheight"> <!--<![endif]-->
    <head>
        <?php get_template_part('template-part', 'meta' ); ?>
    </head>

    <body <?php body_class('site site--home'); ?>>
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="off-canvas-wrap" data-offcanvas>
            <div class="inner-wrap">

