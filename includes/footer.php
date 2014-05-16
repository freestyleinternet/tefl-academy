    <footer>
    	<div class="ac-container sitemap displaymobileipad">
            <div>
                  <input id="ac-50" name="accordion-1" type="checkbox" />
                  <label for="ac-50">Sitemap</label>
                  <article class="ac-medium">
                      <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Latest News</a></li>
                            <li><a href="#">Newsletter</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Course Locations</a></li>
                            <li><a href="#">Course Information</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Enrol</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Course Locations</a></li>
                            <li><a href="#">Course Information</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Enrol</a></li>
                        </ul>
                  </article>
              </div>
        </div>
        
        <div class="wrapper displaydesktoponly">
            <div class="m1 s1 t1 d1 box">
                <ul>
                	<li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Latest News</a></li>
                    <li><a href="#">Newsletter</a></li>
                    <li><a href="#">Jobs</a></li>
                </ul>
            </div>
            <div class="m1 s2 t2 d2 box">
                <ul>
                	<li><a href="#">FAQs</a></li>
                    <li><a href="#">Course Locations</a></li>
                    <li><a href="#">Course Information</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Enrol</a></li>
                </ul>
            </div>
            <div class="m1 s1 t3 d3 box">
                <ul>
                	<li><a href="#">Teaching in Asia</a></li>
                    <li><a href="#">Teaching in Latin America</a></li>
                    <li><a href="#">Teaching in Europe</a></li>
                    <li><a href="#">Teaching in the Middle East</a></li>
                    <li><a href="#">Teaching without a Degree</a></li>
                </ul>
            </div>
            <div class="m1 s2  t4 d4 box">
                <ul>
                	<li><a href="#">Accreditation</a></li>
                    <li><a href="#">Download Prospectus</a></li>
                    <li><a href="#">Student Advice Centre</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Privacy Statement</a></li>
                </ul>
            </div>  
        </div>
    </footer>
    
    <div class="wrapper">
    	<div class="mb1 t1-t2 d1-d2 credits">
        	<img src="assets/images/wtefac.svg">
            <p>&copy; <?php echo date('Y'); ?> TEFL Academy. All Rights reserved.</p>
        </div>
        <div class="mb2 t3-t4 d3-d4">
        	<ul class="social-footer">
                <li><a class="twitter" href="#"></a></li>
                <li><a class="facebook" href="#"></a></li>
                <li><a class="linkedin" href="#"></a></li>
                <li><a class="mail" href="#"></a></li>
                <li><a class="share" href="#"></a></li>
                <li><a class="google" href="#"></a></li>
            </ul>
            <a class="footerbtn" href="#">CHAT WITH US <span></span></a>
        </div>
    </div>
    
    

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/main.min.js"></script>
	<script type="text/javascript" src="assets/js/source/twitterfeed.js"></script>
	<script type="text/javascript" src="assets/js/source/jquery.easing.min.js"></script>
    
    <!-- Datamaps Source -->
    <script type="text/javascript" src="http://cdn.jsdelivr.net/gmap3/5.1.1/gmap3.min.js"></script>

	<script src="/assets/js/source/jquery-jvectormap-1.1.1.min.js"></script>
	<link href="/assets/js/source/jquery-jvectormap-1.1.1.css" rel="stylesheet" />
	<script src="/assets/js/source/jquery-jvectormap-world-mill-en.js"></script>
	
	
    <script src="assets/js/source/maps.js"></script>
    
    <script type="text/javascript">
    	<?php global $mapJson; ?> 
    	<?php if($mapJson != ''): ?>
    	$(window).ready(function() {
			  // JSON
			 // var data = JSON.parse('[{"title":"TEFL Aberdeen","address":"Jurys Inn Aberdeen Hotel, Union Square, Guild Street, Aberdeen, AB11 5RG","phone":"01273 806 380","emailad":"info@teflacademy.co.uk","pagelink":"http://theteflacademy.freestyleinternet.co.uk","status":"live"},{"title":"TEFL Norwich","address":"Norwich","phone":"01273 806 380","emailad":"info@teflacademy.co.uk","pagelink":"http://theteflacademy.freestyleinternet.co.uk","status":"live"},{"title":"TEFL Plymouth","address":"Plymouth","phone":"01273 806 380","emailad":"info@teflacademy.co.uk","pagelink":"http://theteflacademy.freestyleinternet.co.uk","status":"live"},{"title":"TEFL Cardiff","address":"Cardiff","phone":"01273 806 380","emailad":"info@teflacademy.co.uk","pagelink":"http://theteflacademy.freestyleinternet.co.uk","status":"live"}]');
			 var data = JSON.parse('<?php echo $mapJson ?>'); 
			 
			  var $map = $('.gmap');
			 
			  // Gmap Defaults
			  $map.gmap3({
				map:{
					options:{
						center:[54.38112899999999,-3.47008500000004],
						zoom:6
					}
				}
			  });
			 
			  // Json Loop
			  $.each(data, function(key, val) {
				  $map.gmap3({
					  marker:{
					  	 
						  options: { icon:"assets/images/location-icon.svg" },
						  values:[{
							  address:val.address,
							  id: val.id, 
							  events: {
								  // NEW SCOPE
								  click: function(marker, event, context) {
								  	  
									  // ADD THIS
									var maps = $map.gmap3("get");
									  maps.panTo(event.latLng);
									  gmap_clear_markers();
									  sidebar_active(val.id); 
									  $(this).gmap3({
										  overlay:{
											  address:val.address,
											  //closeBoxURL: "assets/images/cross-infowindow.png",
											  options:{
												  content:'<div class="infobox" id="infoBox-"'+val.id+'"><h1>'+val.title+'<a href="#" class="close" onclick="javascript:closeInfo(this); return false;"></a> </h1><div id="bodyContent"><p class="address">'+val.address+'</p><p class="phone" ><img src="assets/images/small-phone-icon.svg" alt="TEFL Academy Phone Number"/> <span>'+val.phone+'</span></p><p><a href="mailto:'+val.emailad+'"><img src="assets/images/small-phone-icon.svg" alt="TEFL Academy Phone Number"/> '+val.emailad+'</a></p><p><a href="'+val.pagelink+'"><img class="phone" src="assets/images/more-info-button.svg" alt="More Info"/></a></p><div class="downarrow"></div></div></div>',
												  
												   
												   offset:{
														  y:-290,
														  x:-100
													  }
											  }
										  }
									  });
								  }
							  }
						  }]
					  }
				  });
			  });
			});
			 
			// Function Clear Markers
			function gmap_clear_markers() {
				$('.infobox').each(function() {
					$(this).remove();
				});
				$('.close').click(function() {
					$('#map_canvas').gmap('get', 'iw').close();
				});
				jQuery('.city-list li a').removeClass('active'); 
				return false; 
			}
			
			function closeInfo(a){
				jQuery('.city-list li a').removeClass('active'); 
				jQuery(a).closest('div.infobox').remove(); 
				return false;
			}
			
			function sidebar_active(id){
				jQuery('.city-list li a').removeClass('active'); 
				jQuery('.city-list li a.item-'+id).addClass('active');
			}
			
		jQuery(document).ready(function(){
			
			var data = JSON.parse('<?php echo $mapJson ?>'); 
			var ExitData = []; 
			jQuery.each(data, function(key, val) {
				ExitData[val.id] = val; 
				
			});
			
			
			jQuery('.city-list li a').on('click',function(){
				var id = jQuery(this).attr('data-id');
				var map = jQuery(".gmap").gmap3("get"); 
				var marker = jQuery(".gmap").gmap3({
				    get: {
				      id: id
				    }
				  });	
				map.panTo(marker.getPosition());
				//console.log(ExitData[id]);
				var val = ExitData[id]; 
				gmap_clear_markers();
				sidebar_active(id); 
				jQuery(".gmap").gmap3({
				overlay:{
					address:val.address,
					//closeBoxURL: "assets/images/cross-infowindow.png",
						options:{
							content:'<div class="infobox" id="infoBox-"'+val.id+'"><h1>'+val.title+'<a href="#" class="close" onclick="javascript:closeInfo(this); return false;"></a> </h1><div id="bodyContent"><p class="address">'+val.address+'</p><p class="phone" ><img src="assets/images/small-phone-icon.svg" alt="TEFL Academy Phone Number"/> <span>'+val.phone+'</span></p><p><a href="mailto:'+val.emailad+'"><img src="assets/images/email-icon.png" alt="TEFL Academy Email"/> '+val.emailad+'</a></p><p><a href="'+val.pagelink+'"><img class="phone" src="assets/images/more-info-button.svg" alt="More Info"/></a></p><div class="downarrow"></div></div></div>',
							offset:{
								y:-290,
								x:-100
							}
						}
					}
				});
				return false;
			})
			
			
		})
	<?php endif ?>

<?php global $mapTeaching; if($mapTeaching !='') : ?> 
	$(function(){
		
		var data = JSON.parse('<?php echo $mapTeaching ?>'); 
		var countries = []; 
		$.each(data, function(key, val) {
			countries[key] = 1; 
		}); 
		
	  
	  $('#container1').vectorMap({
	
	    map: 'world_mill_en',
		backgroundColor: '#b2d1ff',
		zoomOnScroll: false,
		series: {
	    regions: [{
	      values: countries,
	      scale: ['#b2d1ff', '#81af92'],
	      normalizeFunction: 'polynomial'
	    }]
	  },
		regionStyle: {
			initial: {
		    fill: '#FFCC4D',
		    "fill-opacity": 1,
		    stroke: '#81af92',
		    "stroke-width": 2,
		    "stroke-opacity": -1,
		  }}, 
	   onRegionLabelShow: function(event, label, code){
	   	if( code in countries){
	   		event.preventDefault();
	   		var map = $('#container1').vectorMap('get', 'mapObject');
	   		var click = true; 
	   		
	   		$('#container1').on('click', function(){
	   			
	   		 label.html(['<div class="map-info-box"><h1>'+data[code].name+'<a href="#" class="close"></a></h1>',
	                '<img src="'+data[code].flagSrc+'" alt="'+data[code].name+'"/>',
					'<p>'+data[code].significance+'</p>',
					'<a class="button-light oarrow alignright" href="'+data[code].moreLink+'">More Info<span></span></a>',
	                '<div class="downarrow"></div></div>'].join(''));
	                click = false; 
	                label.show();
	                
	         })
	   	}else{
	   		 event.preventDefault();
	   	}
	  },
	  onViewportChange: function(event, scale){
	  	console.log('view');
	  	$('.map-info-box').remove();
	  },
	    onRegionClick: function(event, code){
			if( code in countries){
				
				 var map = $('#container1').vectorMap('get', 'mapObject');
	     		 var name = map.getRegionName(code);
	     		 //map.label.remove();
				var e = map;
				jQuery('body').append(['<div class="map-info-box" data-id="'+code+'"><h1>'+data[code].name+'<a href="#" class="close"></a></h1>',
	                '<img src="'+data[code].flagSrc+'" alt="'+data[code].name+'"/>',
					'<p>'+data[code].significance+'</p>',
					'<a class="button-light oarrow alignright" href="'+data[code].moreLink+'">More Info<span></span></a>',
	                '<div class="downarrow"></div></div>'].join(''))
	            jQuery('.map-info-box').css('position', 'absolute'); 
  			
  			
  			
			$('path').click(function(e) {
			    if( code in countries){
			   
			   
					    var boxW = jQuery('.map-info-box').width(); 
					    var boxH = jQuery('.map-info-box').height(); 
					    jQuery('.map-info-box').css('top', e.pageY - boxH- 30+"px"); 
					    jQuery('.map-info-box').css('left', e.pageX - boxW/2+"px"); 
				  
			    }
			});
				 
			}else{
				 jQuery('.map-info-box').remove();
			};
			
			$('.close').click(function(e) {
				
				$('.map-info-box').remove(); 
				return false;
			});
			// any code here 
		},

	  });
		
		
		jQuery('.jvectormap-zoomin, .jvectormap-zoomout').on('click', function(){
			$('.map-info-box').remove(); 
		})
	});
	
<?php endif ?> 

	</script>


    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>

</body>
</html>