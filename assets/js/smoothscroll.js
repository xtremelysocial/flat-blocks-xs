/**
 * Theme: 	Flat Blocks
 * File:	smoothscroll.js
 * 
 * Javascript for smooth scrolling internal links.
 *
 * @package flat-blocks
 * 
 * This excellent code comes from https://css-tricks.com/snippets/jquery/smooth-scrolling/
 * with only the addition of $(document).ready(function() and some conditions for 
 * backward compatibility with Bootstrap.
 */
 
( function( $ ) {
	
	$(document).ready(function() {
		
		// Select all links with hashes (#)
		$('a[href*="#"]')
		  // Remove links that don't actually link to anything
		  .not('[href="#"]')
		  .not('[href="#0"]')
		  .not('[data-toggle="tab"]') /* ignore bootstrap tabs */
		  .not('[data-toggle="collapse"]')  /* ignore bootstrap collapsible content */
		  .click(function(event) {
			// On-page links
			if (
			  location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
			  && 
			  location.hostname == this.hostname
			) {
			  // Figure out element to scroll to
			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			  
			  //var topOffset = $('body').css('padding-top');
			  var topOffset = $('.wp-site-blocks').css('margin-top');
			  if (topOffset) topOffset = topOffset.replace('px','');

			  // Does a scroll target exist?
			  if (target.length) {
				// Only prevent default if animation is actually gonna happen
				event.preventDefault();
				$('html, body').animate({
				  /*scrollTop: ( target.offset().top)*/
				  scrollTop: ( target.offset().top - topOffset )
				}, 1000, function() {
				  // Callback after animation
				  // Must change focus!
				  var $target = $(target);
				  $target.focus();
				  if ($target.is(":focus")) { // Checking if the target was focused
					return false;
				  } else {
					$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
					$target.focus(); // Set focus again
				  };
				});
			  }
			}
		  });
	});
	
} )( jQuery );