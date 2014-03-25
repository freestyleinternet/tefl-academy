(function($) {

$( 'a[href="#"]' ).click( function(e) {
	e.preventDefault();
} );

$('.toggle').click(function()
{
	$('div.mobile').animate({height: 'toggle'}, 200);
	return false;
});

// Style select box
$("select, .bookingstyle input[type=radio], input[type=radio].radiostyle, input[type=file]").uniform();

// Accordion for mobile contenet
var allPanels = $('.accordion > dd').hide();   
  $('.accordion > dt > a').click(function() {
    allPanels.slideUp();
    $(this).parent().next().slideDown();
    return false;
});


// Modal contact window
$('.button').click(function() {  
	type = $(this).attr('data-type');  
	$('.overlay-container').fadeIn(function() {    
		window.setTimeout(function(){  
		$('.window-container.'+type).addClass('window-container-visible');  
		}, 100);    
	});  
});  
	  
$('.close').click(function() {  
	$('.overlay-container').fadeOut().end().find('.window-container').removeClass('window-container-visible');  
}); 

// Search results slidedown panel	
	$('#opensearch').click(function () {
		if (!$("#slidedownpanel").is(":visible"))
			$('.browse').addClass('active');
		$('#slidedownpanel').slideToggle('2000',"swing", function () {
			 if (!$("#slidedownpanel").is(":visible"))
			 $('.browse').removeClass('active');
		});
	});

})(jQuery);

