/**
 * Theme: 	Flat Blocks
 * File:	fixedheader.js
 * 
 * Javascript for fixed header
 *
 * @package flat-blocks
 * @since	1.0
 * 
 * This is based loosely on https://wordpress.org/themes/hansen/
 * but with changes to improve efficiency and the styles to target.
 * 
 * NOTE: This doesn't work in the Block Editor, only on the front-end of the site. In 
 * the future, we will consider using the new WordPress "sticky" container. 
 */

( function( $ ) {

	// Wait till the document has fully loaded
	$(document).ready(function() {

		// Function to adjust margin-top when screen is resized
		function screenResize() {
			const fixedHeader = $( '.wp-block-group.is-style-fixed-header' );			
			if ( fixedHeader.length ) {
				const adminbarHeight = parseInt( $( '#wpadminbar' ).outerHeight() );
				if ( adminbarHeight > 0 ) {
					fixedHeader.css( { 'top' : adminbarHeight + 'px' } );
				}
				const fixedHeaderHeight = parseInt( fixedHeader.outerHeight() );
				if ( fixedHeaderHeight > 0 ) {
					$( '.wp-site-blocks' ).css( { 'margin-top' : fixedHeaderHeight + 'px' } );
				}
			}
		}

		// Resize the screen on initial load  
		screenResize();

		// Then observe for screen resizes and also adjust the top margin
		$(window).resize( function() {
			screenResize();
		});
		
	});

} )( jQuery );