
/*--------------------------------------
	General Functions
--------------------------------------*/


(function($){


	/* On Page Ready */

	$(document).on('ready', function (){


		/*--------------------------------------
			Title
		--------------------------------------*/

		// Notes...


		/*--------------------------------------
			Smooth Scroll
		--------------------------------------*/

		// Notes...


		// $('.answers .top a').smoothScroll({

			// offset: -20

		// });


		/*--------------------------------------
			External Links
		--------------------------------------*/

		// Notes...

		// $('a').each(function() {

		// 	var external_url = new RegExp('/' + window.location.host + '/');

		// 	if (!external_url.test(this.href)) {

		// 		$(this).addClass('external');

		// 		$(this).click(function(event) {

		// 			event.preventDefault();
		// 			event.stopPropagation();

		// 			window.open(this.href, '_blank');

		// 		});

		// 	}

		// });


	});


	/* On Page Load */


	$(window).on('load', function() {


		/*--------------------------------------
			Title
		--------------------------------------*/

		// Notes...


		/*--------------------------------------
			Nav Toggle
		--------------------------------------*/

		// Notes...


		$('.c-small-screen-nav__toggle').click( function() {

			$(this).parent().next().addClass('c-primary-nav--is-open');

		});

		$('.c-primary-nav__toggle').click( function() {

			$(this).parent().removeClass('c-primary-nav--is-open');

		});


		/*--------------------------------------
			Check Your Rate Modal
		--------------------------------------*/

		// Selecting the Check Your Rate button within the subnavigation
		// opens the modal...

		$('.c-subnavigation__button').click( function() {

			$('.m-check-your-rate-modal').addClass('m-check-your-rate-modal--is-visible').fadeIn(350);

		});

		// Selecting the close button then closes the modal...

		$('.c-check-your-rate-modal__close').click( function() {

			$('.m-check-your-rate-modal').removeClass('m-check-your-rate-modal--is-visible').fadeOut(350);

		});

		/*--------------------------------------
			Smooth Scroll
		--------------------------------------*/

		// Notes...

		/*
			Team
		--------------------------------------*/

		$('.c-who-we-are__mission-statement a').smoothScroll({

			// offset: -20,
			speed: 1000,
			beforeScroll: function() {

				$('.s-team').addClass('s-team--is-visible');

			}

		});

		/*
			Move
		--------------------------------------*/

		$('.c-move a, .c-hero__move a').smoothScroll({

			// offset: -20

		});


		/*--------------------------------------
			Meet Our Team
		--------------------------------------*/

		// Notes...

		// $('.c-team__item').click( function() {

			// $(this).closest('.c-team__list').addClass('c-team__list--is-viewing-bio');

			// $(this).addClass('c-team__item--is-active');

		// });

		// $('div').on('click', '.c-team__return', function() {

			// $(this).closest('.c-team__list').removeClass('c-team__list--is-viewing-bio');

			// $(this).closest('.c-team__item').removeClass('c-team__item--is-active');

		// });


		/*--------------------------------------
			Sticky Subnavigation
		--------------------------------------*/

		// Notes...

		var subNavigation = $(".s-subnavigation");
		stickyDiv = "s-subnavigation--is-fixed";
		yourHeader = $('.s-hero').height();

		$(window).scroll(function() {

			if( $(this).scrollTop() > yourHeader ) {

				subNavigation.addClass(stickyDiv);

				$('body').addClass('subnavigation-is-fixed');

			} else {

				subNavigation.removeClass(stickyDiv);

				$('body').removeClass('subnavigation-is-fixed');

			}

		});


		/*--------------------------------------
			Slideshow
		--------------------------------------*/

		// Notes...


		// $(".flexslider").flexslider({

			// animation: "fade",
			// slideshowSpeed: 7000,
			// useCSS: true,
			// controlNav: false,
			// directionNav: true,
			// smoothHeight: true,

			// start: function(slider){

				// $("body").removeClass("loading");

			// }

		// });

		/*--------------------------------------
			Screen Size
		--------------------------------------*/

		// Notes...

		// Add class of "dev" to <body>


		$("body").addClass("dev");


		// Displays screen size on the fly.


		var windowWidth = $(window).width();

		var windowHeight = $(window).height();

		$(".footer").after('<div id="dev"></div>');

		$("#dev").text(windowWidth + ' ' + 'W' + ' ' + '/' + ' ' + windowHeight + ' ' + 'H');

	});


	/* On Window Resize */


	$(window).on('resize', function() {


		/*--------------------------------------
			Title
		--------------------------------------*/

		// Notes...


		/*--------------------------------------
			Screen Size
		--------------------------------------*/


		// Displays screen size on the fly.


		var windowWidth = $(window).width();

		var windowHeight = $(window).height();

		$("#dev").text(windowWidth + ' ' + 'W' + ' ' + '/' + ' ' + windowHeight + ' ' + 'H');


	});


})(window.jQuery);
