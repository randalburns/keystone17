<?php
/**
 * jhu_id template for displaying Search-Results-Pages
 *
 * @package WordPress
 * @subpackage jhu_id
 * @since jhu_id 1.0
 */
?>


<form class="search-form row collapse" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
    <div class="medium-9 columns">
        <label>
            <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:" />
        </label>
    </div>
    <div class="medium-3 columns">

        <input class="button search-submit" type="submit" value="Search" />
    </div>
</form>
