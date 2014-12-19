// ==================================================================
// jQuery Plug-in Definitions
// ==================================================================

(function( $ ){
	$.fn.animateOnScroll = function() {

		var tiles = new Array();

		$(this).each(function(index, el) {
		    tiles[index] = $(el);
		    a = $(el).offset().top + $(el).height();
		    b = $(window).scrollTop() + $(window).height();
		    if (a > b) $(el).fadeTo(0,0);

		    $(window).scroll(function(d,h) {
		        tiles[index].each(function(i) {
		            a = $(this).offset().top;
		            b = $(window).scrollTop() + $(window).height();
					if($(this).hasClass('two_wide') && a< (b)){
						$(this).fadeTo(500,1);
					}else if (a < (b)) {
						$(this).fadeTo(500,1);
					}
		        });
		    });
		});
	};
})( jQuery );

// ==================================================================
// Initialize all the things
// ==================================================================

$(document).ready(function(){

	'use strict';

	var $window = $(window);
	var $body = $('body');

	var $domRefs = {
		intro: $body.find('#intro')
	};

	var initialSize = $domRefs.intro.height();

	function setIntroSize() {
		// Set height of intro
		var windowHeight = $window.height();
		var windowWidth = $window.width();
		var introHeight = $domRefs.intro.height();
		var introPadding = $domRefs.intro.innerHeight() - introHeight;

		var newIntroHeight = (windowWidth > windowHeight) ? (windowHeight - introPadding) : windowWidth; 
		newIntroHeight = (newIntroHeight < initialSize) ? initialSize : newIntroHeight; 
		 
		$domRefs.intro.height(newIntroHeight);
	}

	setIntroSize();

	// Register Event Handlers
	$(window).on('resize', setIntroSize);

});