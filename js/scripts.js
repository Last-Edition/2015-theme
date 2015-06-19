jQuery(document).ready( function($) {

	/* ==================================================
	Responsive Nav
	script to animate navigation
	================================================== */

	function mwNavigation(){

		var mwNav = $('nav#site-navigation');

		// click to show menu
		$('body').on( 'click', '.toggle-nav', function( event ){

			event.preventDefault();

			if ( $(window).width() < 980 ) {

				mwNav.toggleClass('active');

				if ( $('nav .toggle-nav').length < 1 ) {

					mwNav.append('<a href="#" class="toggle-nav"></a>');

				}

			}

			$('html, body').animate({

				scrollTop: mwNav.position().top
					
			}, 500 );

		});

		// click to show sub-menu
		$('body').on( 'click', 'li.menu-item-has-children > a', function(event){

			if ( $(window).width() < 980 ) {

				event.preventDefault();
				
				$(this).parent().find('.sub-menu:first').toggleClass('active');

			}

		});

		// hover to show sub-menu
		$('body').on( 'hover', 'li.menu-item-has-children', function(){

			if ( $(window).width() > 980 ) {

				$(this).find('.sub-menu:first').toggleClass('active');

			}

		});

	}

	// run navigation js on page load
	mwNavigation();

	// run nav function on resize
	$(window).resize(function(){

		if ( $(window).width() > 980 ) {

			$('.sub-menu').removeClass('fadeIn');

		}

	});

	/* ==================================================
	Website looped video
	================================================== */

	if ( $('#websiteLoop').length > 0 ) {
		   
		$('#websiteLoop').get(0).play();

	}

	/* ==================================================
	Banner
	script to match banner heights
	================================================== */

	$('.banner').addClass('active');

	function bannerHeight() {

		var bannerHeight = $('.banner').outerHeight(false);

		$('.banner--text').css( 'height', bannerHeight + 'px' );

	}

	bannerHeight();

	$(window).resize(function(){

		bannerHeight();

	});

	/* ==================================================
	Scroll Down Prompt
	================================================== */

	$('#arrowDown').on( 'click', function(){

		scrollTo = $(this).parent().next('section');

		$('html, body').animate({

			scrollTop: scrollTo.position().top - 60
				
		}, 350 );

	});

	/* ==================================================
	SHOWS
	================================================== */

	$('.hp--shows__locations__toggle').on( 'click touchstart', function( event ){

		event.preventDefault();

		$('.hp--shows__locations').toggleClass('active');

	});

});