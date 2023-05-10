/**
 * Theme: 	Flat Blocks
 * File:	fixedheader.js
 * 
 * Javascript for fixed header
 *
 * @package flat-blocks
 * 
 * This excellent code comes from https://wordpress.org/themes/hansen/
 * but with changes to the target fixed header class to match ours
 */

jQuery( document ).ready( function( $ ) {

	function screenResize() {
		if ( $( '.wp-block-group.is-style-fixed-header' ).length ) {
			var adminbarHeight = parseInt( $( '#wpadminbar' ).outerHeight() );
			if ( adminbarHeight > 0 ) {
				$( '.wp-block-group.is-style-fixed-header' ).css( { 'top' : adminbarHeight + 'px' } );
			}
			var fixedHeaderHeight = parseInt( $( '.wp-block-group.is-style-fixed-header' ).outerHeight() );
			if ( fixedHeaderHeight > 0 ) {
				$( '.wp-site-blocks' ).css( { 'margin-top' : fixedHeaderHeight + 'px' } );
				/*$( '.editor-styles-wrapper' ).css( { 'margin-top' : fixedHeaderHeight + 'px' } );*/
			}
		}
	}
  
	screenResize();

	jQuery( window ).resize( function() {
		screenResize();
	} );

} );