<?php
/**
 * jhu_id template for display site navigation
 *
 * @package WordPress
 * @subpackage jhu_id
 * @since jhu_id 1.0
 */
?>

<?php
    $args = array(
        'sort_order' => 'ASC',
        'sort_column' => 'menu_order',
        'hierarchical' => 1,
        'exclude' => '77, 98',
        'include' => '',
        'meta_key' => '',
        'meta_value' => '',
        'authors' => '',
        'child_of' => 0,
        'parent' => 0,
        'exclude_tree' => '',
        'number' => '',
        'offset' => 0,
        'post_type' => 'page',
        'post_status' => 'publish'
    );

    $pages = get_pages($args);

    foreach ( $pages as $page ) {
        $pageID = $page->ID;
        $color = get_field('section_color', $pageID);

        $option = '<li class="site_nav-item">';
        $option .= '<a class="site_nav-link" href="' . get_page_link($pageID) . '">';
        $option .= '<span class="site_nav-color" style="background-color:' . $color . '"></span>';
        $option .= $page->post_title;
        $option .= '</a>';
        $option .= '</li> ';
        echo $option;

    }
?>
