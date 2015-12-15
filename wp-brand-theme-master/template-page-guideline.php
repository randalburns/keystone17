<?php
    /**
      * Template Name: Guideline
      * jhu_id template for displaying Pages
      *
      * @package WordPress
      * @subpackage jhu_id
      * @since jhu_id 1.0
    */
    
    global $post;
    $hash = '#' . get_the_slug($post->ID);
    $parent = $post->post_parent;
    $url = $parent . $hash;
    if($parent)
    {
        wp_redirect(get_permalink($url));
    }

?>
