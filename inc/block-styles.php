<?php
/**
 * Block Styles
 *
 * Adds all of our custom styles for selection in the Block Editor
 * 
 * Note the corresponding CSS is in /assets/css/custom-styles.css and 
 * /assets/styles/custom-fixedheader.css
 * 
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package flat-blocks
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function flatblocks_register_block_styles() {
				
		/*--------------------------------------------------------------
		# Group: Fixed Header.
		--------------------------------------------------------------*/
		 
		// Fixed Header
		register_block_style(
			'core/group',
			array(
				'name'  => 'fixed-header',
				'label' => esc_html__( 'Fixed Header', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-fixedheader-styles'
			)
		);

		/*--------------------------------------------------------------
		# Navigation
		--------------------------------------------------------------*/
		 
		// Navigation: Fixed Menu
		register_block_style(
			'core/navigation',
			array(
				'name'  => 'fixed-menu',
				'label' => esc_html__( 'Fixed Menu', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-fixedheader-styles'
			)
		);

		// Navigation: Top Margin
		register_block_style(
			'core/navigation',
			array(
				'name'  => 'top-margin',
				'label' => esc_html__( 'Top Margin', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		/*--------------------------------------------------------------
		# Cover styles
		--------------------------------------------------------------*/
		 
		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'cover-border',
				'label' => esc_html__( 'Borders', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// Cover: Top Margin.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'top-margin',
				'label' => esc_html__( 'Top Margin', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// Cover: No Top Margin.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'no-top-margin',
				'label' => esc_html__( 'No Top Margin', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		/*--------------------------------------------------------------
		# Media and Text styles
		--------------------------------------------------------------*/
		// Media and Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'media-text-border',
				'label' => esc_html__( 'Borders', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		/*--------------------------------------------------------------
		# Image styles
		--------------------------------------------------------------*/
		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'image-border',
				'label' => esc_html__( 'Borders', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// Image: Round with Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'image-round-border',
				'label' => esc_html__( 'Round w/Borders', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// Image: Computer Screen.
		register_block_style(
			'core/image',
			array(
				'name'  => 'image-computer-screen',
				'label' => esc_html__( 'Computer Screen', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// Image: Tablet/phone Screen.
		register_block_style(
			'core/image',
			array(
				'name'  => 'image-tablet-phone-screen',
				'label' => esc_html__( 'Tablet/Phone Screen', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		/*--------------------------------------------------------------
		# Featured Images (post / page "Thumbnails")
		--------------------------------------------------------------*/
		// Featured Image: No Borders.
		register_block_style(
			'core/post-featured-image',
			array(
				'name'  => 'image-no-border',
				'label' => esc_html__( 'No Borders', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);
		 
		/*--------------------------------------------------------------
		# Separators
		--------------------------------------------------------------*/
		// Separator: Thick
		register_block_style(
			'core/separator',
			array(
				'name'  => 'thick',
				'label' => esc_html__( 'Thick', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// Separator: Thick & Wide
		register_block_style(
			'core/separator',
			array(
				'name'  => 'thick-wide',
				'label' => esc_html__( 'Wide Thick', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		/*--------------------------------------------------------------
		# Latest Posts and Latest Comments styles
		--------------------------------------------------------------*/

		// Latest Posts: Bullets.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'bullets',
				'label' => esc_html__( 'Bullets', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// Latest Comments: Bullets.
		register_block_style(
			'core/latest-comments',
			array(
				'name'  => 'bullets',
				'label' => esc_html__( 'Bullets', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		/*--------------------------------------------------------------
		# Group styles
		--------------------------------------------------------------*/

		// Group: No Padding.
		register_block_style(
			'core/group',
			array(
				'name'  => 'no-padding',
				'label' => esc_html__( 'No Padding', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// Group: Small Padding.
		register_block_style(
			'core/group',
			array(
				'name'  => 'small-padding',
				'label' => esc_html__( 'Small Padding', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// Group: Large Padding.
		register_block_style(
			'core/group',
			array(
				'name'  => 'large-padding',
				'label' => esc_html__( 'Large Padding', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// Group: No Top Margin
		register_block_style(
			'core/group',
			array(
				'name'  => 'no-top-margin',
				'label' => esc_html__( 'No Top Margin', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// Group: No Padding or Margin
		register_block_style(
			'core/group',
			array(
				'name'  => 'no-padding-no-margin',
				'label' => esc_html__( 'No Padding or Margin', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// Group: Rounded Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'rounded-borders',
				'label' => esc_html__( 'Borders', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// Group: Thick Rounded Borders with Padding.
		register_block_style(
			'core/group',
			array(
				'name'  => 'thick-rounded-borders',
				'label' => esc_html__( 'Thick Borders', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// Group: Thick bottom border.
		register_block_style(
			'core/group',
			array(
				'name'  => 'thick-bottom-border',
				'label' => esc_html__( 'Thick Bottom Border', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		/*--------------------------------------------------------------
		# Columns styles
		--------------------------------------------------------------*/

		// Columns: No Top Margin.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'no-top-margin',
				'label' => esc_html__( 'No Top Margin', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// Columns: No Gap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'no-gap',
				'label' => esc_html__( 'No Block Spacing', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// Columns: Thick Gap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'thick-gap',
				'label' => esc_html__( 'Thick Block Spacing', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// Columns: Center on Mobile.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'center-on-mobile',
				'label' => esc_html__( 'Center on Mobile', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		/*--------------------------------------------------------------
		# Column styles
		--------------------------------------------------------------*/
		// Column: No Padding.
		register_block_style(
			'core/column',
			array(
				'name'  => 'no-padding',
				'label' => esc_html__( 'No Padding', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// Column: Large Padding.
		register_block_style(
			'core/column',
			array(
				'name'  => 'large-padding',
				'label' => esc_html__( 'Large Padding', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// Column: Rounded Borders.
		register_block_style(
			'core/column',
			array(
				'name'  => 'rounded-borders',
				'label' => esc_html__( 'Rounded Borders', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// Column: No Margin.
		register_block_style(
			'core/column',
			array(
				'name'  => 'no-top-margin',
				'label' => esc_html__( 'No Top Margin', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);


		/*--------------------------------------------------------------
		# Post Comments
		--------------------------------------------------------------*/
		// Comments: Rounded Borders.
		register_block_style(
			'core/comments',
			array(
				'name'  => 'rounded-borders',
				'label' => esc_html__( 'Borders', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		/*--------------------------------------------------------------
		# Excerpts
		--------------------------------------------------------------*/
		// Excerpts: No Read More link.
		register_block_style(
			'core/post-excerpt',
			array(
				'name'  => 'no-readmore',
				'label' => esc_html__( 'No Read More', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		/*--------------------------------------------------------------
		# List styles
		--------------------------------------------------------------*/
		// List: Checkmarks.
		register_block_style(
			'core/list',
			array(
				'name'  => 'list-checkmarks',
				'label' => esc_html__( 'Checkmarks', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// List: Plain (no bullets).
		register_block_style(
			'core/list',
			array(
				'name'  => 'list-plain',
				'label' => esc_html__( 'Plain', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// List: Plain Centered).
		register_block_style(
			'core/list',
			array(
				'name'  => 'list-plain-centered',
				'label' => esc_html__( 'Plain Centered', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		/*--------------------------------------------------------------
		# Post Meta styles (to remove default icons)
		--------------------------------------------------------------*/
		register_block_style(
			'core/post-author',
			array(
				'name'			=> 'no-icon',
				'label'			=> __( 'No Icon', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		register_block_style(
			'core/post-date',
			array(
				'name'			=> 'no-icon',
				'label'			=> __( 'No Icon', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		register_block_style(
			'core/post-terms',
			array(
				'name'			=> 'no-icon',
				'label'			=> __( 'No Icon', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		/*--------------------------------------------------------------
		# Elements styles
		--------------------------------------------------------------*/

		/* Paragraphs */

		// Paragraph: Alignwide (so don't have to place in a group)
		register_block_style(
			'core/paragraph',
			array(
				'name'			=> 'alignwide',
				'label'			=> __( 'Align Wide', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// Paragraph. Underline Links
		register_block_style(
			'core/paragraph',
			array(
				'name'			=> 'link-underline',
				'label'			=> __( 'Link Underline', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// Paragraph. No Underline Links
		register_block_style(
			'core/paragraph',
			array(
				'name'			=> 'no-link-underline',
				'label'			=> __( 'No Link Underline', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// Paragraph. Arrow Icon (with text).
		register_block_style(
			'core/paragraph',
			array(
				'name'			=> 'arrow-icon',
				'label'			=> __( 'Arrow Icon', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);

		// Paragraph. Arrow Icon No Text.
		register_block_style(
			'core/paragraph',
			array(
				'name'			=> 'arrow-icon-no-text',
				'label'			=> __( 'Arrow No Text', 'flat-blocks' ),
				'style_handle'	=> 'flatblocks-custom-styles'
			)
		);
		
	}
	add_action( 'init', 'flatblocks_register_block_styles' );
}
