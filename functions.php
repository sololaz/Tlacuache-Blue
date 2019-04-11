<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://code.jquery.com/jquery-latest.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

    /* Only add the code below to your functions or plugin.*/  

//Adds gallery shortcode defaults of size="medium" and columns="2"  

function amethyst_gallery_atts( $out, $pairs, $atts ) {
    $atts = shortcode_atts( array(
      'columns' => '2',
      'size' => 'large',
    ), $atts );
 
    $out['columns'] = $atts['columns'];
    $out['size'] = $atts['size'];
 
    return $out;
 
}
add_filter( 'shortcode_atts_gallery', 'amethyst_gallery_atts', 10, 3 );


/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


     add_theme_support( 'post-thumbnails', array( 'post' ) );

?>