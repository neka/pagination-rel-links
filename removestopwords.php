<?php
/*
Plugin Name: Pagination Rel Links
Plugin URI: http://kaneandre.ws
Description: Add rel links for all paginated pages. This will help clear up your dupilicate meta and title data as reported in Google Webmasters and let the spiders index your content properly to help SEO.
Version: 1.1
Author: Kane Andrews
Author URI: http://kaneandre.ws
License: GPL2
*/

function rel_next_prev(){
    global $paged;
    if ( get_previous_posts_link() ) { ?>
        <link rel="prev" href="<?php echo get_pagenum_link( $paged - 1 ); ?>" /><?php
    }
    if ( get_next_posts_link() ) { ?>
        <link rel="next" href="<?php echo get_pagenum_link( $paged +1 ); ?>" /><?php
    }
}
add_action("wp_head", "rel_next_prev");
?>