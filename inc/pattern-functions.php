<?php
/**
 * File:	pattern-functions.php
 * Theme:	Flat Blocks
 * 
 * These are helper functions for registering this theme's block patterns from PHP. 
 * For example the sample about, home, portfolio, and services page patterns.
 *
 * @package flat-blocks
 * @since	1.2.14
 */

/**
 * Gets the block template and parses it 
 * 
 */
if ( ! function_exists( 'flatblocks_get_block_pattern' ) ) :

	function flatblocks_get_block_pattern( $name = "" ) {

		// Check if corresponding html file exists. First in the child theme then
		// in the PRO directory and then the main theme.  
		$file = get_stylesheet_directory() . '/patterns/' . $name . '.html';

		if ( !file_exists( $file ) ) {
			$file = get_template_directory() . '/pro/patterns/' . $name . '.html';
		}

		if ( !file_exists( $file ) ) {
			$file = get_template_directory() . '/patterns/' . $name . '.html';
		}
		
		// If file in any location, then add it to block patterns
		if ( file_exists( $file ) ) {

			//Get the html from the contents of the file
			$content = file_get_contents( $file );					
			if ( $content ) {
			
				// Replace the partial URL's and image SRC's with full URL's
				return flatblocks_parse_block_pattern( $content );
				
			} // content
		} // file_exists	
	} // function
	
endif; // end ! function_exists

/**
 * Parse the pattern and replace URL's with local ones and for child themes replace
 * the theme name. 
 * 
 */

if ( ! function_exists( 'flatblocks_parse_block_pattern' ) ) :

	function flatblocks_parse_block_pattern( $content = "" ) {

		// For child themes or new parent theme, override the theme name
		$theme_slug = wp_get_theme()->get_stylesheet();
		if ( $theme_slug != 'flat-blocks' ) {
			$content = str_ireplace('"theme":"flat-blocks"', '"theme":"' . $theme_slug . '"', $content);
		}

		// Regardless, override the URL's and image SRC's with parent's full URL's
		$content = preg_replace( '/(\"url\":\")(.*?)(\/assets\/images\/)/', '$1' . get_template_directory_uri() . '$3', $content);
		$content = preg_replace( '/(src=\")(.*?)(\/assets\/images\/)/', '$1' . get_template_directory_uri() . '$3', $content);
				
		return $content;				

	} // function
	
endif; // end ! function_exists
