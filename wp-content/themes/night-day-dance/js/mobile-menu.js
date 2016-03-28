$(function() {
	// Insert Responsive Navigation Icon, Close Icon, and Overlay
	// If you have access to your HTML, you should put this directly into your markup.
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

// sub-menu code //////////////////// sub-menu code /////////////////

// $(document).ready(function() {
// 	$("ul#primary-menu ul").css({ display: 'none' });
// 	$("ul#primary-menu li").hover(function() {
// 		$(this).find('ul.sub-menu')
// 			.stop(true, true).delay(50).animate({ "height": "show", "opacity": "show" }, 200 );
// 	}, function(){
// 		$(this).find('ul.sub-menu')
// 			.stop(true, true).delay(50).animate({ "height": "hide", "opacity": "hide" }, 200 );
// 	});
//
// });


// (function( $){
// $( "#site-navigation" ).click(function() {
// $( ".menu-item-has-children" ).slideToggle( "slow", function() {
// // Animation complete.
// });
// });
// } )( jQuery );


// $('.menu-item').click(function(event) {
//     if($(this).closest("li.menu-item").children("ul.sub-menu").length)
//         {
//             $('.sub-menu').slideToggle('fast');
//         }
//         else {
//             $('.sub-menu').slideToggle('fast');
//         }
//         return false;
//     });
