<?php include 'includes/header.php'; ?>
    <?php 
    
    	$locationFeed = array(
						array( 
						   'id' => 1,
						   'title' => 'TEFL Aberdeen', 
						   'address' => 'Jurys Inn Aberdeen Hotel, Union Square, Guild Street, Aberdeen, AB11 5RG',
						   'phone' => '01273 806 380', 
						   'emailad' => 'info@teflacademy.co.uk', 
						   'pagelink' => 'http://theteflacademy.freestyleinternet.co.uk', 
						   'status' => 'live',
						   'city' => 'Aberdeen'
						   ),
				   		array( 
						   'id' => 2,
						   'title' => 'TEFL Norwich', 
						   'address' => 'Norwich Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
						   'phone' => '01273 806 380', 
						   'emailad' => 'info@teflacademy.co.uk', 
						   'pagelink' => 'http://theteflacademy.freestyleinternet.co.uk', 
						   'status' => 'live',
						   'city' => 'Norwich',
						   ),
						   array( 
						   'id' => 3,
						   'title' => 'TEFL Plymouth', 
						   'address' => 'Plymouth Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
						   'phone' => '01273 806 380', 
						   'emailad' => 'info@teflacademy.co.uk', 
						   'pagelink' => 'http://theteflacademy.freestyleinternet.co.uk', 
						   'status' => 'live',
						   'city' => 'Plymouth'
						   ),
						   array( 
						   'id' => 4,
						   'title' => 'TEFL Cardiff', 
						   'address' => 'Cardiff Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
						   'phone' => '01273 806 380', 
						   'emailad' => 'info@teflacademy.co.uk', 
						   'pagelink' => 'http://theteflacademy.freestyleinternet.co.uk', 
						   'status' => 'live',
						   'city' => 'Cardiff'
						   ),
						   
		);
    	global $mapJson; 
		
		$mapJson = json_encode($locationFeed);

    
    ?>
    <div class="wrapper">
    	
      	<section class="m1 t1-t3 d1-d3">
        	
            <div class="news-intro location displaydesktop autoheight">
            	<h1>COURSE LOCATIONS</h1>
            	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
			<!--div id="map" class="displaydesktop"></div>-->
            <div class="gmap displaydesktop"></div>
        </section>
        
        <aside class="m1 t4 d4">
            <h1 class="green-header large thinnermobile">Find your course</h1>
            <ul class="city-list">
            	<?php foreach($locationFeed as $feed): ?> 
            		<li><a class='item-<?php echo $feed['id']; ?>' data-id='<?php echo $feed['id']?>' href="#"><?php echo $feed['city'] ?> </a></li>
            	<?php endforeach ?> 

            </ul>
            
            <a class="button-light mobbutton displaymobile" href="call-back-request.php">Call back request</a>
        	<a class="button-light mobbutton orange displaymobile" href="#">50% Off <span></span></a>
        </aside>
        
        
        
        <div class="m1 t-all d-all strap headeronly displaydesktop">
            <h3>Explore the world and improve the lives of others</h3>
        </div>
        
        <div class="m1 s1 t1 d1">
            <div class="home-feature nocontent hbg ">
                <img src="assets/images/feature2.jpg" alt="TEFL Academy"/>
                <h2 class="left half">TEFL Jobs</h2>
                <a class="button-light oarrow absolutebr" href="#">More Info<span></span></a>
            </div>
        </div>
        <div class="m1 s2 t2 d2">
            <div class="home-feature nocontent ">
                <img src="assets/images/feature4.jpg" alt="TEFL Academy"/>
                <h2>Download 2014<br>Prospectus</h2>
                <a class="button-light oarrow absolutebr" href="#">Download<span></span></a>
            </div>
        </div>
        <div class="m1 s1 t3 d3">
            <div class="home-feature nocontent special">
                <img src="assets/images/feature5.svg" alt="TEFL Academy"/>
                <h2>Bring a friend <br>&amp; save £50!</h2>
                <h3>Book 2 places at the<br>same time &amp; get <strong>£50 off</strong></h3>
                <a class="button-light oarrow absolutebr" href="#">Book Now<span></span></a>
            </div>
        </div>
        <div class="m1 s2 t4 d4">
            <div class="home-feature nocontent hbg">
                <img src="assets/images/feature6.jpg" alt="TEFL Academy"/>
                <h2>Schools <br>Programme</h2>
                <a class="button-light oarrow absolutebr" href="#">More Info<span></span></a>
            </div>
        </div>
        
        <div class="m1 displaymobile">
         	<a class="button-light mobbutton people green displaymobile" href="#">Student Advice Centre <span></span></a>
        </div>
      </div> 

    
<?php include 'includes/footer.php'; ?>