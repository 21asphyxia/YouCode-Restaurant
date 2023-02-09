(function ($) {
	"use strict";
	// animation
		function doAnimations(elements) {
			var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
			elements.each(function () {
				var $this = $(this);
				var $animationDelay = $this.data('delay');
				var $animationType = 'animated ' + $this.data('animation');
				$this.css({
					'animation-delay': $animationDelay,
					'-webkit-animation-delay': $animationDelay
				});
				$this.addClass($animationType).one(animationEndEvents, function () {
					$this.removeClass($animationType);
				});
			});
		}
	
	 doAnimations($('.animate'));
	
	// scrollToTop
	$.scrollUp({
		scrollName: 'scrollUp',
		topDistance: '300',
		topSpeed: 300,
		animation: 'fade',
		animationInSpeed: 200,
		animationOutSpeed: 200,
		scrollText: '<i class="fas fa-level-up-alt"></i>',
		activeOverlay: false,
	});
	
	// isotop
		$('.grid').imagesLoaded(function () {
		// init Isotope
		var $grid = $('.grid').isotope({
		  itemSelector: '.grid-item',
		  percentPosition: true,
		  masonry: {
			// use outer width of grid-sizer for columnWidth
			columnWidth: 1
		  }
		});
	
		// filter items on button click
		$('.button-group').on('click', 'button', function () {
			var filterValue = $(this).attr('data-filter');
			console.log(filterValue);	
			$grid.isotope({ filter: filterValue });		
		});
	
		$grid.isotope({ filter: ".monday" });	
	});
	
	//for menu active class
	$('.button-group > button').on('click', function(event) {
		$(this).siblings('.active').removeClass('active');
		$(this).addClass('active');
		event.preventDefault();
	});
		
	})(jQuery);