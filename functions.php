<?php

/**
 * This function setups up the theme defaults
 *
 * @since 1.0
 */
function mansion_theme_setup() {

    if ( function_exists('register_sidebar') )
        register_sidebar( array(
        	'name'          => __( 'Sidebar 1', 'gpp' ),
			'id'            => 'sidebar-1',
			'description'   => '',
			'class'         => '',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>'
        	) );

    // Add Post Thumbnail Theme Support
    if ( function_exists( 'add_theme_support' ) ) {
    	add_theme_support( 'post-thumbnails' );
    	add_image_size( 'featured', 401, 301, true );
    }

    // Load Text Domain
    load_theme_textdomain( 'gpp', get_template_directory() . '/lang' );

    // Theme updater
    $gpp_updater = new GPP_Updater(
        'mansion',
        'Mansion',
        'mansion',
        'theme'
    );
}
add_action( 'after_setup_theme', 'mansion_theme_setup' );


$includes_path = TEMPLATEPATH . '/includes/';

//add theme options
require_once ( $includes_path . 'theme-options.php' );

// load javascripts
require_once ( $includes_path . 'theme-js.php' );

// Load Post Images
require_once ( $includes_path . 'images.php' );

// Theme Updater
require_once ( $includes_path . 'updater.php' );

// Add Menu Theme Support
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'nav-menus' );
	add_action( 'init', 'register_gpp_menus' );

	function register_gpp_menus() {
		register_nav_menus(
			array(
				'main-menu' => __( 'Main Menu', 'gpp' )
			)
		);
	}
}


//get thumbnail
function postimage( $size = medium ) {
	global $post;
    $post_subtitrare = get_post( $post->ID );
    $content = $post_subtitrare->post_content;
    $pattern = get_shortcode_regex();
    preg_match( "/$pattern/s", $content, $match );
    if( isset( $match[2] ) && ( "gallery" == $match[2] ) ) {
        $atts = shortcode_parse_atts( $match[3] );
        $images = isset( $atts['ids'] ) ? explode( ',', $atts['ids'] ) : get_children( 'post_type=attachment&post_mime_type=image&posts_per_page=1&post_parent=' . $post->ID .'&order=ASC&orderby=menu_order ID' );
    }

	if ( isset($images) && $images != "" ) {
		foreach( $images as $image ) {
			$_post = & get_post( $image );
			$attachmentimage=wp_get_attachment_image( $_post->ID, $size );
			echo $attachmentimage;
		}
	} elseif( has_post_thumbnail( $post->ID ) ) {
		echo get_the_post_thumbnail( $post->ID, $size );
	}
}

//get thumbnails
function postimages($size=medium) {
	global $post;
    $post_subtitrare = get_post( $post->ID );
    $content = $post_subtitrare->post_content;
    $pattern = get_shortcode_regex();
    preg_match( "/$pattern/s", $content, $match );
    if( isset( $match[2] ) && ( "gallery" == $match[2] ) ) {
        $atts = shortcode_parse_atts( $match[3] );
        $images = isset( $atts['ids'] ) ? explode( ',', $atts['ids'] ) : get_children( 'post_type=attachment&post_mime_type=image&post_parent=' . $post->ID .'&order=ASC&orderby=menu_order ID' );
    }

	if ( isset( $images ) && $images != "" ) {

		foreach( $images as $image ) {
			$_post = & get_post( $image );
		//print_r($_post);
			$attachmenturl=wp_get_attachment_url($_post->ID);

			if( $size == 'featured' ) {
				$attachmentimage = wp_get_attachment_image( $_post->ID, array(401, 301) );
			} else {
				$attachmentimage = wp_get_attachment_image( $_post->ID, $size );
			}

			$imagelink=get_permalink( $_post->ID );

			echo '<div class="box"><a href="' . $imagelink . '">' . $attachmentimage . '</a></div>';
		}
	} elseif( has_post_thumbnail( $post->ID ) ) {
		echo '<div class="box"><a href="' . get_permalink( $post->ID ) . '">' . get_the_post_thumbnail( $post->ID, $size ) . '</a></div>';
	}

}


//check any attachment
function checkimage( $size = 'medium' ) {
	global $post;
    $post_subtitrare = get_post( $post->ID );
    $content = $post_subtitrare->post_content;
    $pattern = get_shortcode_regex();
    preg_match( "/$pattern/s", $content, $match );
    if( isset( $match[2] ) && ( "gallery" == $match[2] ) ) {
        $atts = shortcode_parse_atts( $match[3] );
        $images = isset( $atts['ids'] ) ? explode( ',', $atts['ids'] ) : get_children( 'post_type=attachment&post_mime_type=image&posts_per_page=1&post_parent=' . $post->ID .'&order=ASC&orderby=menu_order ID' );
    }

	if ( isset( $images ) && $images != "" ) {
		foreach( $images as $image ) {
			$_post = & get_post( $image );
			$attachmentimage = wp_get_attachment_image( $_post->ID, $size );
			return $attachmentimage;
		}
	} elseif( has_post_thumbnail( $post->ID ) ) {
		return get_the_post_thumbnail( $post->ID, $size );
	}
}

function trim_excerpt($text) {
  return rtrim($text,'[...]');
}
add_filter('get_the_excerpt', 'trim_excerpt');
function new_excerpt_length($length) {
	return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');

?>