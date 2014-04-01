<?php include 'includes/header.php'; ?>
    <?php 
    	$mapArray = array(
			 'MR' => array(
			    'name' =>  'TEFL Mauritana',
			    'country' => 'Mauritana',
				'flagSrc'  => '/assets/images/flag-map.svg',
			    'significance' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar eget mi id fermentum.  ',
			    'moreLink' => '#', 
			  ),
			  'AU' => array(
			    'name' =>  'TEFL Austrailia',
			    'country' => 'Austrailia',
				'flagSrc'  => '/assets/images/flag-map.svg',
			    'significance' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar eget mi id fermentum.  ',
			    'moreLink' => '#',
			  ),
			  'TH' => array(
			    'name' =>  'TEFL Thailand',
			    'country' => 'Thailand',
				'flagSrc'  => '/assets/images/flag-map.svg',
			    'significance' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar eget mi id fermentum.  ',
			    'moreLink' => '#',
			  ),
			  'EG' => array(
			    'name' =>  'TEFL Egypt',
			    'country' => 'Egypt',
				'flagSrc'  => '/assets/images/flag-map.svg',
			    'significance' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar eget mi id fermentum.  ',
			    'moreLink' => '#',
			  ),

		);
		
		global $mapTeaching; 
		
		$mapTeaching = json_encode($mapArray);
    ?> 
    <div class="wrapper">
    	
      	<section class="m1 t-all d-all">
			<h1 class="green-header large">Teaching Abroad</h1>
            <div class="world-map displaydesktop">
				<h1>Teaching Abroad <span>Hover on country to find out more information on teaching overseas</span></h1>
                <div id="container1"></div>
            </div>
            
            <div class="displaymobile">
                <div class="ac-container displaymobile">
                <div>
                    <input id="ac-1" name="accordion-1" type="checkbox" />
                    <label for="ac-1">Teaching in Africa</label>
                    <article class="ac-large">
                        <ul class="colourlist">
                            <li>Country name</li>
                            <li>Country name</li>
                            <li>Country name</li>
                            <li>Country name</li>
                            <li>Country name</li>
                            <li>Country name</li>
                            <li>Country name</li>
                            <li>Country name</li>
                        </ul>
                    </article>
                </div>
                <div>
                    <input id="ac-2" name="accordion-1" type="checkbox" />
                    <label for="ac-2">Teaching in the Middle East</label>
                    <article class="ac-large">
                        <ul class="colourlist">
                            <li>Country name</li>
                            <li>Country name</li>
                            <li>Country name</li>
                            <li>Country name</li>
                            <li>Country name</li>
                            <li>Country name</li>
                            <li>Country name</li>
                            <li>Country name</li>
                        </ul>
                    </article>
                </div>
                <div>
                    <input id="ac-3" name="accordion-1" type="checkbox" />
                    <label for="ac-3">Teaching in Europe</label>
                    <article class="ac-large">
                        <ul class="colourlist">
                            <li>Country name</li>
                            <li>Country name</li>
                            <li>Country name</li>
                            <li>Country name</li>
                            <li>Country name</li>
                            <li>Country name</li>
                            <li>Country name</li>
                            <li>Country name</li>
                        </ul>
                    </article>
                </div>
            </div>
               
				<a class="button-light mobbutton displaymobile" href="call-back-request.php">Call back request</a>
				<a class="button-light mobbutton orange displaymobile" href="#">Get 50% OFF! <span></span></a>
                <a class="button-light mobbutton people green displaymobile" href="#">Student Advice Centre <span></span></a>
            </div>
            
        </section>
        
        <div class="m1 t-all d-all strap headeronly displaydesktop">
            <h3>Explore the world and improve the lives of others</h3>
        </div>
        
        <div class="m1 s1 t1 d1 displaydesktop">
            <figure class="square">
				<figcaption class="green">Teaching in<br>Thailand</figcaption>
                <img src="assets/images/square-thailand.jpg" alt="TEFL Teaching Job - Thailand" >
            </figure>
        </div>
        <div class="m1 s2 t2 d2 displaydesktop">
            <figure class="square">
				<figcaption>Teaching in the<br>Middle East</figcaption>
                <img src="assets/images/square-middle-east.jpg" alt="TEFL Teaching Job - Thailand" >
            </figure>
        </div>
        <div class="m1 s1 t3 d3 displaydesktop">
            <figure class="square">
				<figcaption class="green">Teaching in<br>Europe</figcaption>
                <img src="assets/images/square-europe.jpg" alt="TEFL Teaching Job - Thailand" >
            </figure>
        </div>
        <div class="m1 s2 t4 d4 displaydesktop">
            <figure class="square">
				<figcaption>Teaching in<br>Latin America</figcaption>
                <img src="assets/images/square-latin-america.jpg" alt="TEFL Teaching Job - Thailand" >
            </figure>
        </div>
        
      </div> 

    
<?php include 'includes/footer.php'; ?>

