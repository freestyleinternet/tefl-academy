<?php
	
	$siteurl = "http://localhost/tefl-academy/";
	//$siteurl = "http://theteflacademy.freestyleinternet.co.uk/";
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
	default:
		 $pageactive          = "class='page'";
		 break;
}
?>
<!DOCTYPE html>
    <!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
    <!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
    <!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
    <!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
    <!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
    <!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]--><head>
            
    <title></title>
    <!--[if lt IE 9]>
    <script src="js/vendor//html5shiv.js"></script>
    <![endif]-->
    <meta name="description" content="">
    <!--<meta name="viewport" content="user-scalable=yes;width=device-width;initial-scale=0.31; maximum-scale=1.0; minimum-scale=0.25">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">-->
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
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
	<link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    
    <link href="https://get.gridsetapp.com/27276/" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
	<script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
</head>

<body <?php echo $pageactive; ?>>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    
    <header>
    	<a class="verticalmoneyoff orange" href="#"><strong>50%</strong> OFF</a>
    	<div class="wrapper">
        	<div class="m1 t1-t2 d1-d2 box">
            	<div class="contact displaymobile">
                    <p><img src="assets/images/phone-icon-orange.svg" alt="TEFL Academy Phone Number"/><span>0800 689 9190</span></p>
                </div>
       	    	<a href="index.php"><img src="assets/images/tefl-academy-logo.svg" alt="TEFL Academy"/></a>
                <div class="searchmobile displaymobile">
                	<form class="search-form" action="#" method="post">
                        <input class="search" type="text" placeholder="Search">
                        <input type="submit" value="">
                    </form>
                </div>
                </div>
                <div class="m1 t3-t4 d3-d4 displaydesktop">
            	<a class="button-light people floatleft" href="#">Student Advice Centre</a>
                <ul class="social">
                    <li><a class="facebook" href="https://www.facebook.com/pages/The-TEFL-Academy/234302256611182"></a></li>
                    <li><a class="twitter" href="https://twitter.com/TEFLAcademyUK"></a></li>
                </ul>
            	<form class="search-form" action="#" method="post">
                	<input class="search" type="text" placeholder="Search">
                    <input type="submit" value="">
                </form>
                <div class="contact">
                    <p><img src="assets/images/phone-icon-orange.svg" alt="TEFL Academy Phone Number"/> Call us today <span>0800 689 9190</span></p>
                    <a class="button-light floatright" href="#">Call back request</a>
                </div>
            </div>
        </div>
    </header>
    
    <div class="wrapper"> 
        <ul class="mobilemenu displaymobile">
        	<li><a href="index.php" class="toggle"><img src="assets/images/trigger.svg" alt="TEFL Academy"/></a></li>
            <li><a href="/">About Us</a></li>
            <li><a href="/">Get in touch</a></li>
            <li><a class="last" href="/">Enrol</a></li>
        </ul>
        <div class="mobile-container displaymobile">
            <div class="mobile">
            	<ul class="holder">
                    <li><a href="/">Design</a></li>
                    <li><a href="/">HTML</a></li>
                    <li><a href="/">CSS</a></li>
                    <li><a href="/">JavaScript</a></li>
            	</ul>
            </div>
        </div>
        
        <nav class="m1 t1-t4 d1-d4 displaydesktop">
            <ul>
                <li><a class="home" href="#"><img src="assets/images/home-icon.svg" alt="TEFL Academy"/></a></li>
                <li><a href="#">About Us</a></li>
                <li>
                    <a href="#" aria-haspopup="true">Course Locations</a>
                    <ul>
                        <li><a href="/">Design</a></li>
                        <li><a href="/">HTML</a></li>
                        <li><a href="/">CSS</a></li>
                        <li><a href="/">JavaScript</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/" aria-haspopup="true">Further Info</a>
                    <ul>
                        <li><a href="/">Web Design</a></li>
                        <li><a href="/">Typography</a></li>
                        <li><a href="/">Front-End</a></li>
                    </ul>
                </li>
                <li><a href="/">Teaching Abroad</a></li>
                <li><a href="/">Jobs</a></li>
                <li><a href="/">Get in touch</a></li>
                <li><a class="last" href="/">Enrol</a></li>
            </ul>
        </nav>
	</div>