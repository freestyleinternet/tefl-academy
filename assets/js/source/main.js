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
	
	var zIndexNumber = 1000;
       // Put your target element(s) in the selector below!
       $(".button").each(function() {
               $(this).css('zIndex', zIndexNumber);
               zIndexNumber -= 10;
       });
	// Modal contact window
	$('.button').click(function() {  
		
		type = $(this).attr('data-type');  
		$('.overlay-container').fadeIn(function() {    
			window.setTimeout(function(){  
			$('.window-container.'+type).addClass('window-container-visible'); 
			//$('.modalDialog').css('z-index','99999'); 
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
	
	$('.video-container').find("span.userContent").each(function() {
	 
		 $(this).CSS('color','#f00');
	
	});

})(jQuery);

