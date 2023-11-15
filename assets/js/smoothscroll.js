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

		// This is necessary for our smooth scroll to top of the page
		//$('.wp-site-blocks').attr('id', 'page')

		// Select all the comment elements with a name (id='comment-99')
		const ids = $('[id*=comment-]');

		// If we have any, add a scroll offset to them
		if ( ids.length > 0 ) {

			// Figure out top offset from fixed header hight and/or admin bar
			var topOffset = 0;
			const siteTopMargin = parseInt( $('.wp-site-blocks > header:has(.is-style-fixed-header)').outerHeight() );
			if (siteTopMargin) topOffset += siteTopMargin;
			const adminbarHeight = parseInt( $( '#wpadminbar' ).outerHeight() );
			if (adminbarHeight) topOffset += adminbarHeight;
			console.log('topOffset=' + topOffset); //TEST

			// Set each link to have scroll offset
			if ( topOffset ) {
				ids.each(function() {
					$(this).css('scroll-margin-top', topOffset + 'px');
				});
			}
		}
		
		// Select all links with hashes (#)
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
				//console.log('target name=' + target.name); //TEST

				// Does a scroll target exist?
				if (target.length) {

					// Figure out top offset from fixed header hight and/or admin bar
					var topOffset = 0;
					const siteTopMargin = parseInt( $('.wp-site-blocks > header:has(.is-style-fixed-header)').outerHeight() );
					if (siteTopMargin) topOffset += siteTopMargin;
					const adminbarHeight = parseInt( $( '#wpadminbar' ).outerHeight() );
					if (adminbarHeight) topOffset += adminbarHeight;
					//console.log('topOffset=' + topOffset); //TEST
					
					// Only prevent default if animation is actually gonna happen
					event.preventDefault();
					$('html, body').animate({
				  		scrollTop: ( target.offset().top - topOffset )
				  		/////scrollTop: ( target.offset().top )
					}, 1000, function() {
						// Callback after animation
						// Must change focus!
						/*var $target = $(target);
						$target.focus();
						if ($target.is(":focus")) { // Checking if the target was focused
							return false;
						} else {
							$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
							$target.focus(); // Set focus again
						};*/
					});
				} // target
			} // On-page links
		}); // $(a)
	}); // $(document)
	
} )( jQuery );