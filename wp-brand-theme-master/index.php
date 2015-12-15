<?php
/**
 * jhu_id Index template
 *
 * @package WordPress
 * @subpackage jhu_id
 * @since jhu_id 1.0
 */

get_header(); ?>

    <main class="site-content region" role="main">
        <div class="row">
        <?php
            if ( have_posts() ):

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

            endif;
        ?>
        <div class="pagination">

            <?php get_template_part( 'template-part', 'pagination' ); ?>

        </div>
        </div>
    </main>

<?php get_footer(); ?>
