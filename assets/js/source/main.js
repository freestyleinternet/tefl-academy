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
  //$(".verticalmoneyoff, .vertical").stop().animate({"Top": ($(window).scrollTop()) + "px", "marginLeft":($(window).scrollLeft()) + "px"}, "slow" );
 // $(".footerbtn").stop().animate({"marginTop": ($(window).scrollTop()) + "px", "marginLeft":($(window).scrollLeft()) + "px"}, "slow" );
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

// Star rating testimonails
//$('.container-star').rating();

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
	
	// Styling twitter widget
	var hideTwitterAttempts = 0;
	function hideTwitterBoxElements() {
		setTimeout( function() {
			if ( $('[id*=twitter]').length ) {
			$('[id*=twitter]').each( function(){
				if ( $(this).width() == 220 ) {
					$(this).width( 100 ); //override min-width of 220px
					
				}
				var ibody = $(this).contents().find( 'body' );
				ibody.width( $(this).width() + 20 ); //remove scrollbar by adding width
	
				if ( ibody.find( '.timeline .stream .h-feed li.tweet' ).length ) {
					ibody.find( '.p-nickname' ).css( 'color', '#000000' );
					ibody.find( 'li.tweet' ).css( 'color', '#000000' ); 
					ibody.find( '.customisable:link' ).css( 'color', '#FFFFFF' );
					ibody.find( '.p-name' ).css( 'color', '#000000' ); 
					ibody.find( '.dt-updated' ).css( 'color', '#000' ); 
					ibody.find( '.customisable-highlight' ).css( 'color', '#fff' ); 
					ibody.find( '.avatar' ).css( 'border-radius', 0 );
					ibody.find( '.ic-reply' ).css( 'color', '#FFFFFF' );
					ibody.find( '.timeline' ).css( 'border-radius', 0 );
					//ibody.find( '#twitter-widget-0' ).css( 'background','transparent' );
					ibody.find( '.timeline' ).css( 'padding-left','5px' );
					ibody.find( '.timeline' ).css( 'padding-right','20px' );
					//	ibody.find( '.timeline .reply-action ' ).css(  'background','none' );
					ibody.find( '.timeline .stream' ).css( 'overflow-x', 'hidden' );
					ibody.find( '.timeline .stream' ).css( 'overflow-y', 'scroll' );
					ibody.find( '.timeline-header').hide();
					ibody.find( '.timeline-footer').hide();
					//ibody.find( '.timeline .stream li' ).css( 'background', '#acc026' );
					//ibody.find( '.timeline .tweet-actions li, .timeline .tweet-actions li a' ).css( 'background', '#acc026', 'border', 'none' );
				}
				else {
					$(this).hide();
				}
			});
			}
			hideTwitterAttempts++;
			if ( hideTwitterAttempts < 3 ) {
				hideTwitterBoxElements();
			}
		}, 1500);
	}
	
	// somewhere in your code after html page load
	hideTwitterBoxElements();

})(jQuery);

