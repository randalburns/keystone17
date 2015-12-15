<?php
/**
 * jhu_id template for displaying Pages
 *
 * @package WordPress
 * @subpackage jhu_id
 * @since jhu_id 1.0
 */

get_header(); ?>

    <main class="site-content page region" role="main">
        <div class="row">
<?php
    if(have_posts()):
        the_post();
        get_template_part('loop', 'page');
    else:
        get_template_part('loop', 'empty');
    endif;
?>
        </div>
    </main>

<?php get_footer(); ?>
