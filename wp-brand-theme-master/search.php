<?php
/**
 * jhu_id template for displaying Search-Results-Pages
 *
 * @package WordPress
 * @subpackage jhu_id
 * @since jhu_id 1.0
 */

get_header(); ?>

    <main class="site-content page region" role="main">
        <div class="row">
        <?php if ( have_posts() ) : ?>

            <section class="locale">
                <header class="entry-header">
                    <a class="left-off-canvas-toggle menu-toggle" href="#">Menu</a>
                    <h1 class="entry-heading medium-push-1"><?php printf( __( 'Search Results for: %s', 'jhu_id' ), get_search_query() ); ?></h1>

                </header>

                <div class="row">
                    <div class="columns medium-9 second-search medium-push-1">
                        <p>
                            <?php _e( 'Not what you searched for? Try again with some different keywords.', 'jhu_id' ); ?>
                        </p>

                        <?php get_search_form(); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="uno columns medium-push-1 medium-9">
                        <?php

                            while ( have_posts() ) : the_post();

                                get_template_part( 'loop', get_post_format() );

                                wp_link_pages(
                                    array(
                                        'before'           => '<div class="linked-page-nav"><p>' . sprintf( __( '<em>%s</em> is separated in multiple parts:', 'jhu_id' ), get_the_title() ) . '<br />',
                                        'after'            => '</p></div>',
                                        'next_or_number'   => 'number',
                                        'separator'        => ' ',
                                        'pagelink'         => __( '&raquo; Part %', 'jhu_id' ),
                                    )
                                );

                            endwhile;

                        else :

                            get_template_part( 'loop', 'empty' );

                        endif; ?>

                        <div class="pagination">

                            <?php get_template_part( 'template-part', 'pagination' ); ?>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

<?php get_footer(); ?>
