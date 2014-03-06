(function($) {

$( 'a[href="#"]' ).click( function(e) {
	e.preventDefault();
} );

$('.toggle').click(function()
{
	$('div.mobile').animate({height: 'toggle'}, 200);
	return false;
});

// Moving 50% offer box on screen scroll
$(window).scroll(function(){
  $(".verticalmoneyoff").stop().animate({"marginTop": ($(window).scrollTop()) + "px", "marginLeft":($(window).scrollLeft()) + "px"}, "slow" );
});

})(jQuery);
