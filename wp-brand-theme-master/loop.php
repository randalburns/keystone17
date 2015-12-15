<?php
/**
 * jhu_id template for displaying the standard Loop
 *
 * @package WordPress
 * @subpackage jhu_id
 * @since jhu_id 1.0
 */
?>

<article class="locale guideline-item" id="entry-<?php the_ID(); ?>">
    <div class="media-text">
        <header class="media-header">

            <h1 class="media-heading">
                <?php the_title(); ?>
            </h1>
        </header>
        <div class="media-content">
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>"><?php _e( 'Read more &raquo;', 'jhu_id' ); ?></a>
        </div>
    </div>
</article><!-- /#entry-<?php the_ID(); ?>.locale entry page -->
