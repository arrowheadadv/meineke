// DOM Ready
$(function() {
	
	// SVG fallback
	// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
	if (!Modernizr.svg) {
		var imgs = document.getElementsByTagName('img');
		var dotSVG = /.*\.svg$/;
		for (var i = 0; i != imgs.length; ++i) {
			if(imgs[i].src.match(dotSVG)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + "png";
			}
		}
	}

});

$(document).ready(function() {

    /**
     * this script is the click action for the .mobile-nav to slide out
     *
     * Trigger:
     * <a class="mobile-nav-button" href="#">
     *
     * This button is on the top right corner and is only visible on
     * resolutions that are 480px or lower. 
     */
    $('.mobile-nav-button').on('click', function(event){
        event.preventDefault();
        
        $(this).toggleClass('active');
        $('.mobile-nav').toggle('slide');

    }); // end function
    
});