<?php
/**
 * jhu_id template for displaying the Front-Page
 *
 * @package WordPress
 * @subpackage jhu_id
 * @since jhu_id 1.0
 */
?>

<?php get_header('homepage'); ?>

<?php
if ( have_posts() ) :
    the_post();
    if (has_post_thumbnail()):
        $post_thumbnail_id = get_post_thumbnail_id();
        $post_thumbnail_url = wp_get_attachment_image_src($post_thumbnail_id, 'full');
        $billobardUrl = $post_thumbnail_url[0];

    endif;
    ?>
    <div class="billboard billboard--fullheight region">
        <header class="site-masthead row" role="banner">
            <div class="columns medium-6 brand-column">
                <div class="masthead-brand">
                    <h1 class="brand-logo">
                        <a class="brand-mark" href="#">Johns Hopkins University</a>
                    </h1>
                    <div class="brand-tagline">
                        <?php the_content(); ?>
                    </div><!-- /.masthead-tagline -->
                </div><!-- /.masthead-brand -->
            </div>
            <div class="columns medium-6 nav-column">
                <div class="home-nav">
                    <nav class="site-nav" role="navigation">
                        <h2 class="site_nav-heading nav-heading">Brand Guidelines</h2>

                        <ul class="nav site_nav">
                            <?php get_template_part('template-part', 'site_nav'); ?></ul>
                    </nav>
                    <!-- /.site-nav -->

                    <nav class="utility-nav">
                        <h2 class="utility-nav-heading nav-heading"></h2>
                        <!-- /.utility-nav-heading nav-heading -->
                        <?php
                                        $utility_args = array(
                                            'theme_location'  =>
                        'utility-menu',
                                            'menu_class'      => 'nav utility_nav',
                                            'menu_id'         => '',
                                            'items_wrap' => '
                        <ul id="%1$s" class="%2$s">%3$s</ul>
                        ',
                                        );
                                        wp_nav_menu($utility_args);
                                    ?>
                    </nav>
                    <!-- /.utility-nav --> </div>
            </div>
        </header><!-- /.site-masthead -->
        <div class="billboard-background" style="background-image: url(<?php the_field('homepage_photo'); ?>);"></div>
    </div><!-- /.billboard billboard-fullheight -->
<?php
    endif; ?>

    <main class="site-content region clearfix">
    <?php
        $counter = 0;
        if (have_rows('home_regions')):
            while(the_repeater_field('home_regions')):
                $counter++;
    ?>

<?php
                if ($counter % 2 == 0):
?>
                    <div class="locale row media home_media home_media--alt" id="">
                        <header class="media-header medium-offset-1">
                            <h2 class="media-heading">
                                <?php the_sub_field('heading'); ?>
                            </h2>
                        </header>
                        <?php
                        if(have_rows('media')):
                            while ( have_rows('media') ) : the_row(); ?>


                            <?php
                                if (get_row_layout() === 'html'): ?>
                                <figure class="media-attach columns medium-5">
                                    <?php
                                    the_sub_field('html')
                                    ?>
                                </figure><!-- /.media-attach -->
                            <?php
                                elseif(get_row_layout() === 'image'):
                                    $image = get_sub_field('image');
                                    if(!empty($image)):
                                        $url = $image['url'];
                                        $title = $image['title'];
                                        $alt = $image['alt'];
                            ?>

                                <figure class="media-attach columns medium-5">
                                    <img class="media-src" src="<?php echo $url ?>" alt="<?php echo  $alt ?>">
                                </figure><!-- /.media-attach -->
                            <?php
                                    endif;
                            ?>
                            <?php
                                endif;
                            ?>

                        <?php
                            endwhile;
                        ?>

                    <?php
                        endif;
                    ?>

                        <div class="media-text columns medium-5 end">
                            <div class="media-content">
                                <?php the_sub_field('content') ?>
                            </div><!-- /.media-content -->
                        </div><!-- /.media-text -->
                    </div><!-- /.locale media home_media -->
<?php
                else:
?>
                        <div class="locale row media home_media" id="">
                            <header class="media-header medium-offset-1">
                                <h2 class="media-heading">
                                    <?php the_sub_field('heading'); ?>
                                </h2>
                            </header>
                            <?php
                            if(have_rows('media')):
                                while ( have_rows('media') ) : the_row(); ?>


                                <?php
                                    if (get_row_layout() === 'html'): ?>
                                    <figure class="media-attach columns medium-5 medium-push-6">
                                        <?php
                                        the_sub_field('html')
                                        ?>
                                    </figure><!-- /.media-attach -->
                                <?php
                                    elseif(get_row_layout() === 'image'):
                                        $image = get_sub_field('image');
                                        if(!empty($image)):
                                            $url = $image['url'];
                                            $title = $image['title'];
                                            $alt = $image['alt'];
                                ?>

                                    <figure class="media-attach columns medium-5 medium-push-6">
                                        <img class="media-src" src="<?php echo $url ?>" alt="<?php echo  $alt ?>">
                                    </figure><!-- /.media-attach -->
                                <?php
                                        endif;
                                ?>
                                <?php
                                    endif;
                                ?>

                            <?php
                                endwhile;
                            ?>

                        <?php
                            endif;
                        ?>

                            <div class="media-text columns medium-5 medium-pull-6">
                                <div class="media-content">
                                    <?php the_sub_field('content') ?>
                                </div><!-- /.media-content -->
                            </div><!-- /.media-text -->
                        </div><!-- /.locale media home_media -->
<?php
     endif;
?>

<?php
        endwhile;
    endif; ?>
    </main><!-- /.site-content -->

<?php get_footer(); ?>
