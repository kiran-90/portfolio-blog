(function($) {
    $('figure.wp-caption.aligncenter').removeAttr('style');
    // target any figure that has 2 classes
    // "wp-caption" & "aligncenter"
    // and remove the style attribute
    $('img.aligncenter').wrap('<figure class="centered-image" />');
    // find any image that has the class "aligncenter"
    // then take that image and wrap a figure
    // with a class of "centered-image" around it

    /*
	 * Test if inline SVGs are supported.
	 * @link https://github.com/Modernizr/Modernizr/
	 */
	function supportsInlineSVG() {
		var div = document.createElement( 'div' );
		div.innerHTML = '<svg/>';
		return 'http://www.w3.org/2000/svg' === ( 'undefined' !== typeof SVGRect && div.firstChild && div.firstChild.namespaceURI );
	}
	
	if ( true === supportsInlineSVG() ) {
		document.documentElement.className = document.documentElement.className.replace( /(\s*)no-svg(\s*)/, '$1svg$2' );
	}

	// Nav bar colour change

	jQuery(window).scroll(function () {
	    if ($('body').hasClass('home')) {
	        if( $(this).scrollTop() === 0 ) {
	            $('.site-branding, .site-header, .site-title a, .site-description, .main-navigation').removeClass('on');
	        } else {
	            $('.site-branding, .site-header, .site-title a, .site-description, .main-navigation').addClass('on');
	        }
	    }

        // Fade hero quote
        $(".scroll").css("opacity", 1 - $(window).scrollTop() / 250);
    });

    jQuery(window).resize(function () {
        if ( !$('body').hasClass('home')) {
            $('.site-content').css('margin-top', $('.site-header').height());
        }
    }).resize();

    // jQuery(window).resize(function() {
    //     $('.site-content').css('margin-top', $('.site-header').height());
    // }).resize();

    // mobile toggle
    var active;
	active = true;

    jQuery('.hamburger').click(function() {


        if( $(this).hasClass('disabled') ){
            return;
        } else if (active === true) {

            $('.hamburger').addClass('is-active');
            active = false;

            return;
        } else {
            $('.hamburger').removeClass('is-active');
            active = true;

            return;
        }
    });

}) (jQuery); 

