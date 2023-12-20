/**
 * File:	smoothscroll.js
 * Theme: 	Flat Blocks
 * 
 * Javascript for smooth scrolling internal links.
 *
 * @package flat-blocks
 * @since	1.0
 * 
 * This excellent code comes from https://css-tricks.com/snippets/jquery/smooth-scrolling/
 * with the addition of $(document).ready(function(), some conditions for backward 
 * compatibility with Bootstrap, and to select our specific fixed header CSS.
 */
 
( function( $ ) {
	
	$(document).ready(function() {

		// Figure out top offset from fixed header height and/or admin bar
		var topOffset = parseInt( $('.wp-site-blocks > header:has(.is-style-fixed-header)').outerHeight() ) ?? 0 + 
			parseInt( $('header.site-header.is-style-scroll-header').outerHeight() ) ?? 0 +
			parseInt( $( '#wpadminbar' ).outerHeight() ) ?? 0;
		//console.log('topOffset=' + topOffset); //TEST*/

		// Select all the comment elements with a name (id='comment-99')
		const comments = $('[id*=comment-]');

		// If we have any comments, add a scroll offset to them
		if ( topOffset && comments.length > 0 ) {

			// Set each link to have scroll offset
			comments.each(function() {
				$(this).css('scroll-margin-top', topOffset + 'px');
			});
		}
		
		// Select all internal links with hashes (#)
		const links = $('a[href*="#"]')
			// Remove links that don't actually link to anything
			.not('[href="#"]')
			.not('[href="#0"]')
			.not('[data-toggle="tab"]') /* ignore bootstrap tabs */
			.not('[data-toggle="collapse"]');  /* ignore bootstrap collapsible content */

		// When clicked, smoothly scroll to the element
		links.click(function(event) {
			// On-page links
			if (
				location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
				&& 
				location.hostname == this.hostname
			) {
				// Figure out element to scroll to
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

				// Does a scroll target exist?
				if (target.length) {
					
					// Only prevent default if animation is actually gonna happen
					event.preventDefault();
					$('html, body').animate({
				  		scrollTop: ( target.offset().top - topOffset )
					}, 1000);
				} // target
			} // On-page links
		}); // $(a)
	}); // $(document)
	
} )( jQuery );