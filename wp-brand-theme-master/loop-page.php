<?php
/**
 * jhu_id template for displaying the standard Loop
 *
 * @package WordPress
 * @subpackage jhu_id
 * @since jhu_id 1.0
 */
?>


<article class="locale entry" id="entry-<?php the_ID(); ?>">
    <header class="entry-header">
        <a class="left-off-canvas-toggle menu-toggle" href="#">Menu</a>
        <h1 class="entry-heading medium-push-1">
            <?php the_title(); ?>
        </h1>
    </header>
    <div class="uno columns medium-push-1 medium-9 post-content">
        <?php the_content(); ?>
    </div>
</article><!-- /#entry-<?php the_ID(); ?>.locale entry page -->
