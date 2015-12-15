<?php
/**
 * Template Name: Section
 * jhu_id template for displaying Pages
 *
 * @package WordPress
 * @subpackage jhu_id
 * @since jhu_id 1.0
 */
 ?>


<?php
    get_header();

    $pageID = get_the_id();

    $sectionArgs = array(
        'sort_order' => 'ASC',
        'sort_column' => 'menu_order',
        'hierarchical' => 1,
        'exclude' => '77',
        'include' => '',
        'meta_key' => '',
        'meta_value' => '',
        'authors' => '',
        'child_of' => 0,
        'parent' => $pageID,
        'exclude_tree' => '',
        'number' => '',
        'offset' => 0,
        'post_type' => 'page',
        'post_status' => 'publish'
    );

    $sections = get_pages($sectionArgs);

    $pageNav;
    $guidelines;

    foreach ( $sections as $section ):
        // navigation
        $sectionID = $section->ID;
        $exampleID = get_the_slug($sectionID);
        $option = '<li class="site_nav-item">';
        $option .= '<a class="site_nav-link" href="#' . $exampleID . '">';
        $option .= $section->post_title;
        $option .= '</a>';
        $option .= '</li>';
        $pageNav .= $option;

        if (have_rows('example', $sectionID)):
            $examples;
            $captions;
            $row = 1;
            while (have_rows('example', $sectionID)) : the_row();
                $exampleItem = get_the_slug($sectionID) . '-' . $row;
                $example = '';
                $caption = '';
                if (get_row_layout() === 'html'):
                    $html = get_sub_field('html');
                    $example = '<figure class="example-item example-html" id="example-' . $exampleItem . '">';
                    $example .= $html;
                    if (get_sub_field('caption')):
                        $example .= '<figcaption class="example-id">' . $row . '</figcaption>';
                        $caption = '<a class="example-caption" href="#' . $exampleItem . '">';
                        $caption .= '<span class="example-caption-id">' . $row . '</span>';
                        $caption .= '<span class="example-caption-text">' . get_sub_field('caption') . '</span>';
                        $caption .= '</a>';
                    endif;
                    $example .= '</figure>';
                elseif (get_row_layout() === 'image'):
                    $image = get_sub_field('image');
                    $example = '<figure class="example-item example-photo" id="example-' . $exampleItem . '">';
                    $example .= '<a class="example-lightbox" href="' . $image["url"] . '" rel="group-' . $exampleID  . '">';
                    $example .= '<img class="example-src" src="' . $image["url"] . '" alt="' . $image["alt"] . '">';
                    $example .= '</a>';

                    if (get_sub_field('caption')):
                        $example .= '<figcaption class="example-id">' . $row . '</figcaption>';
                        $caption = '<a class="example-caption" href="#' . $exampleItem . '">';
                        $caption .= '<span class="example-caption-id">' . $row . '</span>';
                        $caption .= '<span class="example-caption-text">' . get_sub_field('caption') . '</span>';
                        $caption .= '</a>';
                    endif;
                    $example .= '</figure>';

                else:
                    $video = get_sub_field('video');
                    $example = '<figure class="example-item example-video" id="example-' . $exampleItem . '">';
                    $example .= $video_code;
                    if (get_sub_field('caption')):
                        $example .= '<figcaption class="example-id">' . $row . '</figcaption>';
                        $caption = '<a class="example-caption" href="#' . $exampleItem . '">';
                        $caption .= '<span class="example-caption-id">' . $row . '</span>';
                        $caption .= '<span class="example-caption-text">' . get_sub_field('caption') . '</span>';
                        $caption .= '</a>';
                    endif;
                    $example .= '</figure>';
                endif;
                $examples .= $example;
                $captions .= $caption;
                $row++;
            endwhile;
        else:
            $example = '';
        endif;

        $downloads = '';

        if (have_rows('downloads', $sectionID)):
            $row = 1;
            while (have_rows('downloads', $sectionID)):
                the_row();
                $downloadID = $exampleID . '-' . $row;
                $download = '';
                $row++;

                $download .= '<a class="download-item" id="download-' . $downloadID . '" href="' . get_sub_field('asset_link') . '" class="download-link">';
                $download .= get_sub_field('asset_title');
                $download .= '</a>';
                $downloads .= $download;
            endwhile;
        endif;

        if ($examples != ''):
            $attachClass = 'columns medium-push-5 medium-7';
            $textClass = 'columns medium-pull-7 medium-5';
        else:
            $attachClass = '';
            $textClass = 'columns medium-10';
        endif;

        $guideline = '<div class="locale guideline-item row" id="' . get_the_slug($sectionID) . '">';
        if ($examples != ''):
            $guideline .= '<div class="media-attach ' . $attachClass . '">';
            $guideline .= $examples;
            $guideline .= '</div> <!-- /.media-attach -->';
        endif;
        $guideline .= '<div class="media-text ' . $textClass . '">';
        $guideline .= '<header class="media-header"><h2 class="media-heading">';
        $guideline .= $section->post_title;
        $guideline .= '</h2></header>';
        $guideline .= '<div class="media-content">';
        $guideline .= apply_filters('the_content', $section->post_content);
        if ($captions != ''):
            $guideline .= '<div class="example-captions">' . $captions . '</div>';
        endif;
        if ($downloads != ''):
            $guideline .= '<nav class="example-downloads">' . $downloads . '</nav>';
        endif;
        $guideline .= '</div>';
        $guideline .= '</div> <!-- /.media-text -->';
        $guideline .= '</div> <!-- /.locale.guideline-item#' . get_the_slug($sectionID) . ' -->';
        $examples = '';
        $captions = '';
        $guidelines .= $guideline;

    endforeach;

?>

    <main class="site-content page region">

        <div class="row">
            <article class="locale guideline entry" id="guideline-<?php echo get_the_slug(); ?>">
                <header class="entry-header">
                    <div class="entry-header-wrap">
                        <a class="left-off-canvas-toggle menu-toggle" href="#">Menu</a>
                        <h1 class="entry-heading medium-8 medium-push-1">
                            <?php the_title(); ?>
                        </h1>
                    </div>
                </header>

                <aside class="dos columns medium-push-1 medium-2">
                    <nav class="page-nav">
                        <div class="page-nav-wrap">
                            <ul class="nav nav--stack page_nav">

                                <?php echo $pageNav; ?>
                            </ul><!-- /.nav nav--stack page_nav -->
                        </div>
                    </nav><!-- /.page-nav -->
                </aside><!-- /.dos -->

                <div class="uno columns medium-9">
                    <?php echo $guidelines; ?>
                </div><!-- /.uno -->



            </article><!-- /.locale guideline -->
        </div>

    </main>

    <?php

    ?>

<?php get_footer(); ?>
