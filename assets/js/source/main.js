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
	
	// Shop steps
	//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})


})(jQuery);

