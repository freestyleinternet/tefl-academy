    <footer>
    	<div class="ac-container sitemap displaymobile">
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
        
        <div class="wrapper displaydesktop">
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

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/main.min.js"></script>


    
    <!-- Datamaps Source -->
	<script src="http://datamaps.github.com/scripts/datamaps-all.js"></script>
    <script src="assets/js/source/maps.js"></script>
    
    <script type="text/javascript">
    // Define your locations: HTML content for the info window, latitude, longitude
    var locations = [
      [
	  '<div id="content">'+
			  	  '<h1>TEFL Sheffield</h1>'+
				  '<div id="bodyContent">'+
					  '<ul>'+
					  	'<li>Jurys Inn Sheffield Hotel,</li>' +
						'<li>near 119 Eyre St,</li>' +
						'<li>City Centre, Sheffield, UK</li>' +
						'<li class="borderbx">01273 806 380</li>' +
						'<li><a href="mailtoinfo@teflacademy.co.uk">info@teflacademy.co.uk</a></li>' +
						'<li><a class="button-light oarrow rightalign" href="#">More Info</a></li>' +
					  '</ul>' +
				  '</div>'+
	  '</div>', 53.38113 , -1.47009],
      ['<div id="content">'+
			  	  '<h1>TEFL Cardiff</h1>'+
				  '<div id="bodyContent">'+
					  '<ul>'+
					  	'<li>Jurys Inn Sheffield Hotel,</li>' +
						'<li>near 119 Eyre St,</li>' +
						'<li>City Centre, Sheffield, UK</li>' +
						'<li class="borderbx">01273 806 380</li>' +
						'<li><a href="mailtoinfo@teflacademy.co.uk">info@teflacademy.co.uk</a></li>' +
						'<li><a class="button-light oarrow rightalign" href="#">More Info</a></li>' +
					  '</ul>' +
				  '</div>'+
	  '</div>', 51.48158 , -3.17909],
      ['<div id="content">'+
			  	  '<h1>TEFL Sheffield</h1>'+
				  '<div id="bodyContent">'+
					  '<ul>'+
					  	'<li>Jurys Inn Sheffield Hotel,</li>' +
						'<li>near 119 Eyre St,</li>' +
						'<li>City Centre, Sheffield, UK</li>' +
						'<li class="borderbx">01273 806 380</li>' +
						'<li><a href="mailtoinfo@teflacademy.co.uk">info@teflacademy.co.uk</a></li>' +
						'<li><a class="button-light oarrow rightalign" href="#">More Info</a></li>' +
					  '</ul>' +
				  '</div>'+
	  '</div>', 51.50852 , -0.12549]
    ];
    
    // Setup the different icons and shadows
    var iconURLPrefix = 'assets/images/';
    
    var icons = [
      iconURLPrefix + 'location-icon.svg',
      iconURLPrefix + 'location-icon.svg',
      iconURLPrefix + 'location-icon.svg',
      iconURLPrefix + 'location-icon.svg',
      iconURLPrefix + 'location-icon.svg',
      iconURLPrefix + 'location-icon.svg',      
      iconURLPrefix + 'location-icon.svg'
    ]
    var icons_length = icons.length;
    
    
   var shadow = {
      anchor: new google.maps.Point(15,33),
      url: iconURLPrefix + 'location-icon.svg'
    };

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(-37.92, 151.25),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: false,
      streetViewControl: false,
      panControl: false,
      zoomControlOptions: {
         position: google.maps.ControlPosition.LEFT_BOTTOM
      }
    });

    var infowindow = new google.maps.InfoWindow({
      maxWidth: 180
    });

    var marker;
    var markers = new Array();
    
    var iconCounter = 0;
    
    // Add the markers and infowindows to the map
    for (var i = 0; i < locations.length; i++) {  
      	marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
		closeBoxURL: "http://www.carltonhotelblanchardstown.com/files/images/a/calendar-popup-close.png",
        icon : icons[iconCounter],
        shadow: shadow
      });

      markers.push(marker);

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
      
      iconCounter++;
      // We only have a limited number of possible icon colors, so we may have to restart the counter
      if(iconCounter >= icons_length){
      	iconCounter = 0;
      }
    }

    function AutoCenter() {
      //  Create a new viewpoint bound
      var bounds = new google.maps.LatLngBounds();
      //  Go through each...
      $.each(markers, function (index, marker) {
        bounds.extend(marker.position);
      });
      //  Fit these bounds to the map
      map.fitBounds(bounds);
    }
    AutoCenter();
  </script>


    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
</body>
</html>