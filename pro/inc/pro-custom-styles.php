<?php
/**
 * File:	pro-custom-styles.php
 * Theme:	Flat Blocks PRO
 * 
 * Loads the PRO custom styles and CSS. 
 * 
 * @package flat-blocks-pro
 * @since	1.0
 */

/**
 * Enqueue custom block styles.
 */
if ( ! function_exists( 'flatblocks_pro_styles' ) ) :

	function flatblocks_pro_styles() {

		// Get version for caching
		$theme_version = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;
		
		// Load Flat Blocks PRO CSS styles
		wp_enqueue_style( 
			'flatblocks-pro-custom-styles', 
			get_template_directory_uri() . '/pro/css/pro-custom-styles.css', 
			array('flatblocks-base'),
			$version_string
		);
		
	} //end function
endif;		
add_action( 'wp_enqueue_scripts', 'flatblocks_pro_styles' );
//add_action( 'enqueue_block_assets', 'flatblocks_pro_styles' );

/**
 * Enqueue additional editor scripts.
 */
if ( ! function_exists( 'flatblocks_pro_editor_styles' ) ) :

	function flatblocks_pro_editor_styles() {

		// Load Flat Blocks PRO CSS styles
		add_editor_style(
			'/pro/css/pro-custom-styles.css'
		);

	} //end function
endif;
add_action( 'admin_init', 'flatblocks_pro_editor_styles' );

/**
 * Register custom block styles.
 */
if ( ! function_exists( 'flatblocks_pro_register_block_styles' ) ) :

	function flatblocks_pro_register_block_styles( $theme_styles ) {

		/* 
		 * Define custom styles and what blocks they apply to. Note that the prefix 
		 * 'is-style-' will automatically be added to the names.
		 * 
		 * TO-DO: Decide on which equal flexbox style to go with and remove the others
		 */
		$pro_styles = array(
			'separator' 		=> array( esc_html__('Separator', 'flat-blocks'), 
				array( 'heading' ),
				'style_handle' 	=> 'flatblocks-pro-custom-styles'
			),
			'button-alt' 		=> array( esc_html__('Alt Style', 'flat-blocks'), 
				array( 'button' ),
				'style_handle'	=> 'flatblocks-pro-custom-styles'
			),
			'button-outline-alt' => array( esc_html__('Alt Outline Style', 'flat-blocks'), 
				array( 'button' ),
				'style_handle' 	=> 'flatblocks-pro-custom-styles'
			),
			'list-dividers' 		=> array( esc_html__('Dividers', 'flat-blocks'), 
				array('list', 'page-list', 'categories', 'latest-posts', 'latest-comments' ),
				'style_handle' 	=> 'flatblocks-pro-custom-styles'				
			),
			'no-auto-icon' 		=> array( esc_html__('No Icon', 'flat-blocks'), 
				array( 'paragraph' ),
				'style_handle' 	=> 'flatblocks-pro-custom-styles'
			),
			'table-colored' 	=> array( esc_html__('Colored', 'flat-blocks'), 
				array( 'table' ),
				'style_handle' 	=> 'flatblocks-pro-custom-styles'
			),
			'table-alternate'	=> array( esc_html__('Alternate Colors', 'flat-blocks'), 
				array( 'table' ),
				'style_handle' 	=> 'flatblocks-pro-custom-styles'
			),
			'equal-grid' 		=> array( esc_html__('Equal Grid', 'flat-blocks'), 
				array( 'group' ),
				'style_handle' 	=> 'flatblocks-pro-custom-styles'
			),
			'equal-flex' 		=> array( esc_html__('Equal Flex', 'flat-blocks'), 
				array( 'group' ),
				'style_handle' 	=> 'flatblocks-pro-custom-styles'
			),
			/*'equal-cells' 		=> array( esc_html__('Equal Cells', 'flat-blocks'), 
				array( 'group' ),
				'style_handle' 	=> 'flatblocks-pro-custom-styles'
			),*/
			'angled-top-up' 	=> array( esc_html__('Angled Top Up', 'flat-blocks'),
				array( 'group', 'cover', 'image' ),
			),
			'angled-top-down' 	=> array( esc_html__('Angled Top Down', 'flat-blocks'),
				array( 'group', 'cover', 'image' ),
			),
			'angled-bottom-up' 	=> array( esc_html__('Angled Bottom Up', 'flat-blocks'),
				array( 'group', 'cover', 'image' ),
			),
			'angled-bottom-down' 	=> array( esc_html__('Angled Botto Down', 'flat-blocks'),
				array( 'group', 'cover', 'image' ),
			),
			'angled-top-up-bottom-up' 	=> array( esc_html__('Angled Top Up Bottom Up', 'flat-blocks'),
				array( 'group', 'cover', 'image' ),
			),
			'angled-top-up-bottom-down' 	=> array( esc_html__('Angled Top Up Bottom Down', 'flat-blocks'),
				array( 'group', 'cover', 'image' ),
			),
			'angled-top-down-bottom-up' 	=> array( esc_html__('Angled Top Down Bottom Up', 'flat-blocks'),
				array( 'group', 'cover', 'image' ),
			),
			'angled-top-down-bottom-down' 	=> array( esc_html__('Angled Top Down Bottom Down', 'flat-blocks'),
				array( 'group', 'cover', 'image' ),
			),
			/*'curved-top-up' 	=> array( esc_html__('Curved Top Up', 'flat-blocks'),
				array( 'group', 'cover', 'image' ),
			),*/
			'curved-top-down' 	=> array( esc_html__('Curved Top Down', 'flat-blocks'),
				array( 'group', 'cover', 'image' ),
			),
			'curved-bottom-up' 	=> array( esc_html__('Curved Bottom Up', 'flat-blocks'),
				array( 'group', 'cover', 'image' ),
			),
			/*'scroll-header' 		=> array( esc_html__('Scroll Header', 'flat-blocks'),
				array( 'group' ),
			),*/
			/*'show-on-mobile'	=> array( esc_html__('Show on Mobile', 'flat-blocks'), 
				array( 'group', 'image', 'navigation-item', 'navigation-link' ),
				'style_handle' 	=> 'flatblocks-pro-custom-styles'
			),
			'hide-on-tablet' 	=> array( esc_html__('Hide on Tablet', 'flat-blocks'), 
				array( 'group', 'image', 'navigation-item', 'navigation-link' ),
				'style_handle' => 'flatblocks-pro-custom-styles'
			),
			'show-on-tablet'	=> array( esc_html__('Show on Tablet', 'flat-blocks'), 
				array( 'group', 'image', 'navigation-item', 'navigation-link' ),
				'style_handle' 	=> 'flatblocks-pro-custom-styles'
			),
			'hide-on-desktop' 	=> array( esc_html__('Hide on Desktop', 'flat-blocks'), 
				array( 'group', 'image', 'navigation-item', 'navigation-link' ),
				'style_handle' 	=> 'flatblocks-pro-custom-styles'
			),
			'show-on-desktop'	=> array( esc_html__('Show on Desktop', 'flat-blocks'), 
				array( 'group', 'image', 'navigation-item', 'navigation-link' ),
				'style_handle' 	=> 'flatblocks-pro-custom-styles'
			)*/
		);

		//return array_merge( $theme_styles, $pro_styles );
		//var_dump( $theme_styles + $pro_styles ); //TEST
		//return $theme_styles + $pro_styles;
		return $theme_styles ? $theme_styles + $pro_styles : $pro_styles;
		
	} //end function
endif;
add_filter( 'flatblocks_custom_block_styles', 'flatblocks_pro_register_block_styles' );

