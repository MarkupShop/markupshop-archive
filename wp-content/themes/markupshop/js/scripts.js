$(document).ready(function(){
	
	(function( $ ){
		
	});
	
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
	
});