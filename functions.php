<?php
/**
 * Flat Blocks functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package flat-blocks
 * @since	1.0
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
if ( ! function_exists( 'flatblocks_support' ) ) :

	function flatblocks_support() {

		// Add support for additional core block styles. e.g. Separator width, left 
		// border color on quotes, etc. See here for full list:
		// https://github.com/WordPress/gutenberg/blob/trunk/packages/block-library/src/theme.scss
		// NOTE: As of WordPress v6.3, these are loaded AFTER the ones from theme.json so 
		// they are overriding this theme and the user's settings! Don't load these by
		// default, but allow child themes to override that.
		if ( apply_filters( 'flatblocks_additional_core_styles', $default = false ) ) {		
			add_theme_support( 'wp-block-styles' );
		}

		// This sets the standard post thumbnail image size for the blog
		// It is cropped with 16:9 aspect ratio so that widths and heights are the same
		set_post_thumbnail_size( 1100, 619, array( 'left', 'top' ) );
				
		// Also add this as a selectable size in the Block Editor
		add_image_size( 'cropped-large', 1100, 619, array( 'left', 'top' ) );

		// And add a smaller size for recent posts in columns
		add_image_size( 'cropped-thumbnail', 760, 428, array( 'left', 'top' ) );
		
		// Add support for editor styles.
		// Note: Shouldn't be needed after WordPress v6.2
		add_theme_support( 'editor-styles' );
		
		// Enqueue editor styles.
		add_editor_style( 
			array(
				'/assets/css/flat-blocks.css',
				'/assets/css/custom-styles.css',
				'style.css'
			)
		);

		// Register four nav menus if Gutenberg is activated (otherwise the 
		// __experimentalMenuLocation attribute isn't available)
		if ( defined( 'IS_GUTENBERG_PLUGIN' ) && IS_GUTENBERG_PLUGIN ) {
			register_nav_menus( array(
				'header' 	=> __( 'Header Menu', 'flat-blocks' ),
				'footer' 	=> __( 'Footer Menu', 'flat-blocks' ),
				'footer-1' 	=> __( 'Footer Menu Alt 1', 'flat-blocks' ),
				'footer-2' 	=> __( 'Footer Menu Alt 2', 'flat-blocks' ),
				'footer-3' 	=> __( 'Footer Menu Alt 3', 'flat-blocks' )
			) );
		}

		// Allow excerpts on pages so users can control what shows in searches, etc.
		add_post_type_support( 'page', 'excerpt' );		
				
	}
endif;
add_action( 'after_setup_theme', 'flatblocks_support' );

/* 
 * Tell WordPress to load only the block styles for blocks in use on a particular page
 */
add_filter( 'should_load_separate_core_block_assets', '__return_true' );

/**
 * Enqueue FRONT-END ONLY styles and scripts.
 */
if ( ! function_exists( 'flatblocks_front_end_styles' ) ) :

	function flatblocks_front_end_styles() {

		// Get version for caching
		$theme_version = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		// Enqueue base theme style
		if ( file_exists( get_template_directory() . '/assets/css/flat-blocks.css' ) ) {
			wp_enqueue_style( 
				'flatblocks-base', 
				get_template_directory_uri() . '/assets/css/flat-blocks.css', 
				array(), 
				$version_string
			);
		}
				
		// Register custom block styles. See /inc/block-styles.php.
		if ( file_exists( get_template_directory() . '/assets/css/custom-styles.css' ) ) {
			wp_register_style(
				'flatblocks-custom-styles',
				get_template_directory_uri() . '/assets/css/custom-styles.css',
				array('flatblocks-base'),
				$version_string
			);
		
			// Note: Conditional loading of custom styles not stable as of WordPress 6.2,
			// so always load
			wp_enqueue_style( 'flatblocks-custom-styles' );
		}
		
		// Enqueue theme style after theme base style
		wp_enqueue_style( 
			'flatblocks-style', 
			get_template_directory_uri() . '/style.css', 
			array('flatblocks-base'),
			$version_string
		);
		
		// As a courtesy, add the child theme Custom Styles CSS if it exists
		if ( is_child_theme() && file_exists( get_stylesheet_directory() . '/assets/css/custom-styles.css' ) ) {
			wp_enqueue_style( 
				'flatblocks-child-custom-styles', 
				get_stylesheet_directory_uri() . '/assets/css/custom-styles.css', 
				array( 'flatblocks-style' ), 
				$version_string 
			);
		}

		// As a courtesy, add the child theme CSS if it exists
		if ( is_child_theme() && file_exists( get_stylesheet_directory() . '/style.css' ) ) {
			wp_enqueue_style( 
				'flatblocks-child-style', 
				get_stylesheet_directory_uri() . '/style.css', 
				array( 'flatblocks-style' ), 
				$version_string 
			);
		}

		// Smooth scrolling javascript
		if ( file_exists( get_template_directory() . '/assets/js/smoothscroll.js' ) ) {
			wp_enqueue_script( 
				'flatblocks-smoothscroll', 
				get_template_directory_uri() . '/assets/js/smoothscroll.js', 
				array('jquery'), 
				$version_string, 
				true 
			);
		}		
	} 
endif;
add_action( 'wp_enqueue_scripts', 'flatblocks_front_end_styles' );

/**
 * Enqueue FRONT-END AND BACK-END styles and scripts
 * 
 * NOTE: These styles and scripts will be loaded into the font-end, but also into the 
 * Block Editor iFrame, which is necessary for certain styles such as the built-in 
 * Dashicons.
 */
if ( ! function_exists( 'flatblocks_block_assets' ) ) :

	function flatblocks_block_assets() {
	
		// WordPress built-in icons (Dashicons). Note these MUST be loaded here for
		// them to be in the Block Editor iFrame so they display.
		wp_enqueue_style( 'dashicons' );
	}
endif;
add_action( 'enqueue_block_assets', 'flatblocks_block_assets' );

/**
 * Enqueue BACK-END ONLY styles and scripts.
 */
if ( ! function_exists( 'flatblocks_back_end_styles' ) ) :

	// As a courtesy, add the child theme CSS files to the Block Editor too.
	function flatblocks_back_end_styles() {

		if ( is_child_theme() ) {

			if ( file_exists( get_stylesheet_directory() . '/assets/css/custom-styles.css' ) ) {
				add_editor_style(
					get_stylesheet_directory_uri() . 'assets/css/custom-styles.css'
				);
			}

			if ( file_exists( get_stylesheet_directory() . '/style.css' ) ) {
				add_editor_style(
					get_stylesheet_directory_uri() . '/style.css'
				);
			}
		}
	}
endif;
add_action( 'admin_init', 'flatblocks_back_end_styles' );

/**
 * Load custom block styles and block patterns (and PRO features if purchased)
 *
 */
// Add custom block styles
if ( file_exists( get_template_directory() . '/inc/block-styles.php' ) ) {
	require_once get_template_directory() . '/inc/block-styles.php';
}

// As a courtesy, add the child theme block styles if they exist.
if ( file_exists( get_stylesheet_directory() . '/inc/block-styles.php' ) ) {
	require_once get_stylesheet_directory() . '/inc/block-styles.php';
}

// Add block patterns
if ( file_exists( get_template_directory() . '/inc/block-patterns.php' ) ) {
	require_once get_template_directory() . '/inc/block-patterns.php';
}

// As a courtesy, add the child theme patterns if they exist. Note that child
// themes can alternately add .php files in the /patterns directory and they will
// automatically be loaded by WordPress.
if ( file_exists( get_stylesheet_directory() . '/inc/block-patterns.php' ) ) {
	require_once get_stylesheet_directory() . '/inc/block-patterns.php';
}

// Include Pro version features
if ( file_exists( get_template_directory() . '/pro/flat-blocks-pro.php' ) ) {
	require_once get_template_directory() . '/pro/flat-blocks-pro.php';
}

/**
 * Additional Filters
 */

/**
 * Add an anchor of #page for our scroll-to-top navigation item. This is needed
 * because there is currently no way to add an id to the wp-site-blocks wrapper and 
 * we need this to be the very first thing on the page.
 */
add_action( 'wp_body_open', function() { echo '<a id="page"></a>'; } );

/**
 * Define our custom template part AREAS
 */
if ( ! function_exists( 'flatblocks_template_part_areas' ) ) :
	function flatblocks_template_part_areas( array $areas ) {

		$new_areas = array( 
			array(
				'area'        => 'title',
				'area_tag'    => 'section',
				'label'       => __( 'Title', 'flat-blocks' ),
				'description' => __( 'Page and post titles plus home page content top', 'flat-blocks' ),
				'icon'        => ''
			),
			array(
				'area'        => 'query',
				'area_tag'    => 'section',
				'label'       => __( 'Query', 'flat-blocks' ),
				'description' => __( 'Site query template', 'flat-blocks' ),
				'icon'        => ''
			),
			array(
				'area'        => 'content',
				'area_tag'    => 'section',
				'label'       => __( 'Content', 'flat-blocks' ),
				'description' => __( 'Content section such as cover and post meta', 'flat-blocks' ),
				'icon'        => ''
			),
			array(
				'area'        => 'menu',
				'area_tag'    => 'section',
				'label'       => __( 'Menu', 'flat-blocks' ),
				'description' => __( 'Navigation Menus', 'flat-blocks' ),
				'icon'        => ''
			)
		);
		return array_merge( $areas, $new_areas );
		
	}
endif;
add_filter( 'default_wp_template_part_areas', 'flatblocks_template_part_areas' );

/**
 * Add our custom image size(s) to the list that user can pick in the editor.
 * Consider: Add Medium Large since it is standard WordPress and seems to be missing.
 */
if ( ! function_exists( 'flatblocks_image_sizes' ) ) :

	function flatblocks_image_sizes( $sizes ) {
		return array_merge( $sizes, array(
			//'medium-large' => __( 'Medium Large', 'flat-blocks' ),
			'cropped-thumbnail' => __( 'Post Thumbnail Medium (cropped)', 'flat-blocks' ),
			'cropped-large' => __( 'Post Thumbnail Large (cropped)', 'flat-blocks' )
		) );
	}
endif;
add_filter( 'image_size_names_choose', 'flatblocks_image_sizes' );

/**
 * Always replace [...] with ... from the excerpt
 */
if ( ! function_exists( 'flatblocks_excerpt_more' ) ) :

	function flatblocks_excerpt_more( $more ) {
		return '&hellip;';
		//return str_ireplace( '[…]', '&hellip;', $more);
	}
endif;
add_filter( 'excerpt_more', 'flatblocks_excerpt_more' );

/**
 * Excerpt in Page or Post Title
 *
 * On pages or single posts only, set excerpt length to 25 words. This is for when it is 
 * used in the Page Title and/or Post Title Template Parts. 
 * 
*/
if ( ! function_exists( 'flatblocks_excerpt_length' ) ) :
	function flatblocks_excerpt_length ( $words ) {
		return is_singular() ? apply_filters( 'flatblocks_short_excerpt_link', $short_words = 25 ) : $words;
	}
endif;
add_filter('excerpt_length', 'flatblocks_excerpt_length');
