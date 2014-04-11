<?php	
	//$siteurl = "http://localhost/tefl-academy/";
	$siteurl = "http://theteflacademy.freestyleinternet.co.uk/";
	$file = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	
	$pageactive = '';
	
	switch ($file)
	{
	case $siteurl."news.php":
		 $pageactive          = "class='news'";
		 break;
	case $siteurl."news-single.php":
		 $pageactive          = "class='news-single'";
		 break;
	case $siteurl."jobs-board.php":
		 $pageactive          = "class='jobs'";
		 break;
	case $siteurl."jobs-single.php":
		 $pageactive          = "class='jobs'";
		 break;
	case $siteurl."about.php":
		 $pageactive          = "class='page'";
		 break;
	case $siteurl."accreditation.php":
		 $pageactive          = "class='page'";
		 break;
	case $siteurl."contact-us.php":
		 $pageactive          = "class='page'";
		 break;
	case $siteurl."teaching-abroad.php":
		 $pageactive          = "class='teachingabroad'";
		 break;
	
	case $siteurl."student-advice-centre.php":
		 $pageactive          = "class='page'";
		 break;
	case $siteurl."student-advice-centre-inner.php":
		 $pageactive          = "class='page'";
		 break;
	case $siteurl."teacher-profiles.php":
		 $pageactive          = "class='page'";
		 break;
	case $siteurl."schools-programme.php":
		 $pageactive          = "class='page'";
		 break;
	case $siteurl."stories-single.php":
		 $pageactive          = "class='storiesinner'";
		 break;
	case $siteurl."teacher-stories.php":
		 $pageactive          = "class='page'";
		 break;
	case $siteurl."testimonials.php":
		 $pageactive          = "class='page'";
		 break;
	case $siteurl."course-information.php":
		 $pageactive          = "class='page'";
		 break;
	case $siteurl."course-location.php":
		 $pageactive          = "class='location'";
		 break;
	case $siteurl."course-landing-london.php":
		 $pageactive          = "class='page'";
		 break;
	case $siteurl."teaching-abroad-asia.php":
		 $pageactive          = "class='page'";
		 break;
	case $siteurl."teaching-abroad-latin-america.php":
		 $pageactive          = "class='page'";
		 break;
	case $siteurl."teaching-abroad-europe.php":
		 $pageactive          = "class='page'";
		 break;
	case $siteurl."teaching-abroad-middle-east.php":
		 $pageactive          = "class='page'";
		 break;
	case $siteurl."teaching-abroad-map.php":
		 $pageactive          = "class='page'";
		 break;
	case $siteurl."booking-your-details.php":
		 $pageactive          = "class='withfootermargintop'";
		 break;
	case $siteurl."booking-contact-details.php":
		 $pageactive          = "class='withfootermargintop'";
		 break;
	case $siteurl."booking-review-order.php":
		 $pageactive          = "class='withfootermargintop'";
		 break;
	case $siteurl."faqs.php":
		 $pageactive          = "class='faqs'";
		 break;
	case $siteurl."teaching-abroad-single.php":
		 $pageactive          = "class='page'";
		 break;
	case $siteurl."call-back-request.php":
		 $pageactive          = "class='page'";
		 break;
	default:
		 $pageactive          = "class='home'";
		 break;
}
?>
<!DOCTYPE html>
    <!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 10 ]>    <html lang="en" class="ie"> <![endif]-->
<!--[if lt IE 11]> <html lang="en" class="ie"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
    
    <head>        
    <title></title>
    <!--[if lt IE 9]>
    <script src="js/vendor//html5shiv.js"></script>
    <![endif]-->
    <meta name="description" content="">
    <!--<meta name="viewport" content="user-scalable=yes;width=device-width;initial-scale=0.31; maximum-scale=1.0; minimum-scale=0.25">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">-->
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Doesn't always work! -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="shortcut icon" href="favicon.ico">
    <!-- For third-generation iPad with high-resolution Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144-precomposed.png">
    <!-- For iPhone with high-resolution Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png">
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
	
    <link href="assets/css/gridset.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
	<script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

</head>

<body <?php echo $pageactive; ?>>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
     <![endif]-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=306982196115534";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
                        
    <a class="verticalmoneyoff orange button" href="#openModal1"  type="button" value="Zoom In Modal Window"  data-type="zoomin"></a>

    <header>
        <div id="openModal1" class="modalDialog">
            <div class="window-container green-offer zoomin">
				<a href="#close" title="Close" class="close"></a>
				<h2>BOOK NOW FOR</h2>
                <h1>50% OFF</h1>
                <p>Special offer ends</p>
                <p class="smallerline">28th February 2014</p>
                <p class="smallerlinetwo">Was &pound;350 - Now Only &pound;175</p>
                <a class="button-light oarrow fixedwidthmodaloarrow orange" href="#">ENROL NOW <span></span></a>
            </div>
        </div>
        
		<div id="openModal3" class="modalDialog">
                <div class="window-container form-modal zoomin">
                    <a href="#close" title="Close" class="close"></a>
                    <h1>SCHOOLS PROGRAMME</h1>
                    <p>Vestibulum sed mi commodo neque imperdiet rutrum. Nulla porttitor dapibus augue quis bibendum.</p>
                    <form class="modalform" action="#" method="post">
                        <div>
                            <label>Full Name</label>
                            <input type="text">
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="text">
                        </div>
                        <div>
                            <label>Telephone</label>
                            <input type="text">
                        </div>
                        <div>
                            <label>Prefered Study Location</label>
                            <div class="styled">
                               <select>
                                  <option>Please select</option>
                                  <option>Option one</option>
                                  <option>Option two</option>
                                  <option>Option three</option>
                               </select>
                            </div>
                        </div>
                        <div>
                            <label>Message</label>
                            <textarea></textarea>
                        </div>
                        <div>
                            <label class="fullwidth">PLEASE ENTER THE CODE BELOW</label>
                            <label class="code">6nc2m</label>
                        </div>
                        <div>
                            <label>Type Code Here</label>
                            <input type="text">
                        </div>
                        <input class="buttontype" type="submit" value="Submit">
                    </form>
                </div>
            </div>

    	<div class="wrapper">
        	<div class="m1 t1-t2 d1-d2 box">
            	<div class="contact displaymobile">
                    <p><img src="assets/images/phone-icon-orange-mobile.svg" alt="TEFL Academy Phone Number"/><span>01273 806 380</span></p>
                </div>
       	    	<a class="logo" href="index.php"></a>
                <div class="searchmobile displaymobile">
                	<form class="search-form" action="#" method="post">
                        <input class="search" type="text" placeholder="Search">
                        <input type="submit" value="">
                    </form>
                </div>
                </div>
                <div class="m1 t3-t4 d3-d4 displaydesktop">
            	<a class="button-light people floatleft" href="student-advice-centre.php">Student Advice Centre</a>
                <ul class="social">
                    <li><a class="facebook" href="https://www.facebook.com/pages/The-TEFL-Academy/234302256611182"></a></li>
                    <li><a class="twitter" href="https://twitter.com/TEFLAcademyUK"></a></li>
                </ul>
            	<form class="search-form" action="#" method="post">
                	<input class="search" type="text" placeholder="Search">
                    <input type="submit" value="">
                </form>
                <div class="contact">
                    <p><img src="assets/images/phone-icon-orange.svg" alt="TEFL Academy Phone Number"/> Call us today <span>01273 806 380</span></p>
                    <a class="button-light floatright modalbutton" href="#openModal2" type="button" value="Zoom In Modal Window"  data-type="zoomin">Call back request</a>
                </div>
				<div id="openModal2" class="modalDialog">
                    <div class="window-container form-modal zoomin">
                        <a href="#close" title="Close" class="close"></a>
                        <h1>CALL BACK REQUEST</h1>
                        <p>Vestibulum sed mi commodo neque imperdiet rutrum. Nulla porttitor dapibus augue quis bibendum.</p>
                        <form class="modalform" action="#" method="post">
                            <div>
                                <label>Name</label>
                                <input type="text">
                            </div>
                            <div>
                            	<label>Telephone</label>
                            	<input type="text">
                            </div>
                            <div>
                                <label>Best Time to Call</label>
                                <div class="styled">
                                   <select>
                                      <option>Please select</option>
                                      <option>Option one</option>
                                      <option>Option two</option>
                                      <option>Option three</option>
                                   </select>
                                </div>
                            </div>
                            <div>
                                <label>Message</label>
                                <textarea></textarea>
                            </div>
                            <div>
                                <label class="fullwidth">PLEASE ENTER THE CODE BELOW</label>
                                <label class="code">6nc2m</label>
                            </div>
                            <div>
                                <label>Type Code Here</label>
                                <input type="text">
                            </div>
                            <input class="buttontype" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <div class="wrapper"> 
        <ul class="mobilemenu displaymobile">
        	<li><a href="index.php" class="toggle"><img src="assets/images/trigger.svg" alt="TEFL Academy"/></a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="call-back-request.php">Get in touch</a></li>
            <li><a class="active last" href="/">Enrol</a></li>
        </ul>
        <div class="mobile-container displaymobile">
            <div class="mobile">
            	<ul class="holder">
                    <li><a href="course-location.php">Course Locations</a></li>
                    <li><a href="teaching-abroad-map.php">Teaching Abroad</a>
                    	<ul>
                            <li><a href="teaching-abroad-asia.php">Asia</a></li>
                            <li><a href="teaching-abroad-latin-america.php">Latin America</a></li>
                            <li><a href="teaching-abroad-europe.php">Europe</a></li>
                            <li><a href="teaching-abroad-middle-east.php">Middle East</a></li>
                        </ul>
                    </li>
                    <li><a href="jobs-board.php">Jobs</a></li>
                    <li><a href="testimonials.php">Testimonials</a></li>
            	</ul>
            </div>
        </div>

        <nav class="m1 t1-t4 d1-d4 displaydesktop">
            <ul>
                <li><a class="home" href="/"><img src="assets/images/home-icon.svg" alt="TEFL Academy"/></a></li>
                <li><a href="about.php">About Us</a>
                	<ul>
                        <li><a href="testimonials.php">Testimonials</a></li>
     					
                    </ul>
                </li>
                <li>
                    <a href="course-location.php" aria-haspopup="true">Course Locations</a>
                    <ul>
                        <li><a href="course-landing-london.php">London</a></li>
                        <li><a href="/">Link</a></li>
                        <li><a href="/">Link</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/" aria-haspopup="true">Further Info</a>
                    <ul>
                        <li><a href="/">Link</a></li>
                        <li><a href="/">Link</a></li>
                        <li><a href="/">Link</a></li>
                    </ul>
                </li>
                <li><a href="teaching-abroad.php">Teaching Abroad</a>
                	<ul>
                        <li><a href="teaching-abroad-asia.php">Asia</a></li>
                        <li><a href="teaching-abroad-latin-america.php">Latin America</a></li>
                        <li><a href="teaching-abroad-europe.php">Europe</a></li>
                        <li><a href="teaching-abroad-middle-east.php">Middle East</a></li>
                    </ul>	
                </li>
                <li><a href="jobs-board.php">Jobs</a></li>
                <li><a href="#openModal2" type="button" value="Zoom In Modal Window"  data-type="zoomin">Get in touch</a></li>
                <li class="last"><a class="active" href="/">Enrol</a></li>
            </ul>
        </nav>
	</div>