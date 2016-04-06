(function($) {
	$(function() {

		$('<div class="responsive-nav-icon" />').appendTo('.site-content');
		$('<div class="responsive-nav-close" />').appendTo('nav');
		$('<div id="overlay" />').insertAfter('footer');

		// Navigation Slide In
		$('.responsive-nav-icon').click(function() {
			$('nav').addClass('slide-in');
			$('html').css("overflow", "hidden");
			$('#overlay').show();
			return false;
		});

		// Navigation Slide Out
		$('#overlay, .responsive-nav-close').click(function() {
			$('nav').removeClass('slide-in');
			$('html').css("overflow", "auto");
			$('#overlay').hide();
			return false;
		});
	});

	// sub-menu code //////////////////// sub-menu code
	$('.menu-item-has-children').on('click',function(){
		$('.sub-menu').slideToggle('fast');
		$('.menu-item-8').toggleClass('slide-parent');
	});
})( jQuery );
