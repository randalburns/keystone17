<?php
/**
 * jhu_id template for displaying an empty Loop
 *
 * @package WordPress
 * @subpackage jhu_id
 * @since jhu_id 1.0
 */
?>

<article class="locale entry entry--empty">
    <header class="entry-header">
        <a class="left-off-canvas-toggle menu-toggle" href="#">Menu</a>
        <h1 class="entry-heading medium-push-1">
            <?php _e( 'Page Not Found', 'jhu_id' ); ?>
        </h1>
    </header>

    <div class="uno columns medium-push-1 medium-9 post-content">
        <?php if ( is_search() ) : ?>

            <p>
                <?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'jhu_id' ); ?>
            </p>

            <?php get_search_form(); ?>

        <?php else : ?>

            <p>
                <?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'jhu_id' ); ?>
            </p>

            <?php get_search_form(); ?>

        <?php endif; ?>
    </div><!-- /.uno columns medium-push-1 medium-9 post-content -->

</article>
