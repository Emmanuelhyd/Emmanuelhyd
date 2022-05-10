<?php

     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "crunchpress@info.com";
    $email_subject = "New Membership Form Submission";
	$error_message = '';

     

     
    // validation
    if(
        !isset($_POST['name']) ||
		!isset($_POST['email']) ||
		!isset($_POST['website']) ||
		!isset($_POST['subject']) ||
		!isset($_POST['comments']))
		
		{
			
			echo "Fields are not filled properly";
			die();
    }
     
    $name = $_POST['name']; // required
	$email = $_POST['email']; // required
	$website = $_POST['website']; // required
	$subject = $_POST['subject']; // required
	$comments = $_POST['comments'];
	
     
$email_message = '<html>';
$email_message = '<body>';
$email_message = '<head>';
$email_message = '<title>Your Details Are Below</title>';
$email_message = '</head>';
$email_message .= '<h1>Your Details Are Below</h1>';
$email_message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$email_message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$email_message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$email_message .= "<tr><td><strong>Website:</strong> </td><td>" . strip_tags($_POST['website']) . "</td></tr>";
$email_message .= "<tr><td><strong>Subject:</strong> </td><td>" . strip_tags($_POST['subject']) . "</td></tr>";
$email_message .= "<tr><td><strong>Comments:</strong> </td><td>" . strip_tags($_POST['comments']) . "</td></tr>";
$email_message .= "</table>";
$email_message .= "</body></html>";	






$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: ". $email . "\r\n";
$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


@mail($email_to, $email_subject, $email_message, $headers); 
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Prayer Church</title>
<!--Custom Css-->
<link href="css/custom.css" rel="stylesheet" type="text/css">
<!--Bootstrap 3.1.1 Css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!--Color Css-->
<link href="css/color.css" rel="stylesheet" type="text/css">
<!--Font Awesome-->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--Fevicon-->
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
<!--Bxslider Css-->
<link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
<!--Content Slider Css-->
<link href="css/content_slider_style.css" rel="stylesheet" type="text/css" />
<!--Pretty Photo Css-->
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!--Html 5 Js-->
<script src="js/html5.js"></script>
</head>
<body>
<!--Wrapper Start-->
<div id="wrapper"> 
  <!--Header Start-->
  <header id="header"> 
    <!--Head Topbar Start-->
    <section class="head-topbar">
      <div class="container holder">
        <div class="left"> <strong class="ph"><i class="fa fa-phone"></i>(123) 456 7980</strong> <a href="mailto:" class="email"><i class="fa fa-envelope"></i>info@prayer.com</a> </div>
        <div class="right">
          <ul class="topbar-social">
            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fa fa-tumblr-square"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-flickr"></i></a></li>
          </ul>
          <a id="active-btn" href="#" class="btn-search"><i class="fa fa-search"></i></a> <a href="#" class="btn-login"><i class="fa fa-user"></i></a> </div>
        <form action="#" id="search-box-form" class="search-box">
          <input name="" type="text" class="topbar-search-input" placeholder="Search for...">
          <button value="" class="topbar-btn-search"><i class="fa fa-search"></i></button>
          <a href="#" class="crose"><i class="fa fa-times"></i></a>
        </form>
      </div>
    </section>
    <!--Head Topbar End--> 
    
    <!--Logo Row Star-->
    <section class="logo-row">
      <div class="container"> <strong class="logo"><a href="#"><img src="images/logo.png" alt="logo"></a></strong>
        <div class="event-timer"> <strong class="title">Next Event:</strong>
          <div class="countdown countdown-container "
     data-start="1362139200"
     data-end="1388461320"
     data-now="1387461319"
     data-border-color="rgba(255, 255, 255,1)">
            <div class="clock">
              <div class="clock-item clock-days countdown-time-value">
                <div class="wrap">
                  <div class="inner">
                    <div id="canvas-days" class="clock-canvas"></div>
                    <div class="text">
                      <p class="val">0</p>
                      <p class="type-days type-time">DAYS</p>
                    </div>
                  </div>
                </div>
                <span class="colun-1">:</span> </div>
              <div class="clock-item clock-hours countdown-time-value">
                <div class="wrap">
                  <div class="inner">
                    <div id="canvas-hours" class="clock-canvas"></div>
                    <div class="text">
                      <p class="val">0</p>
                      <p class="type-hours type-time">HRS</p>
                    </div>
                  </div>
                </div>
                <span class="colun-2">:</span> </div>
              <div class="clock-item clock-minutes countdown-time-value">
                <div class="wrap">
                  <div class="inner">
                    <div id="canvas-minutes" class="clock-canvas"></div>
                    <div class="text">
                      <p class="val">0</p>
                      <p class="type-minutes type-time">MNTS</p>
                    </div>
                  </div>
                </div>
                <span class="colun-3">:</span> </div>
              <div class="clock-item clock-seconds countdown-time-value">
                <div class="wrap">
                  <div class="inner">
                    <div id="canvas-seconds" class="clock-canvas"></div>
                    <div class="text">
                      <p class="val">0</p>
                      <p class="type-seconds type-time">SECS</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Logo Row End--> 
    
    <!--Navigation Row Start-->
    <section class="navigation-row">
      <div class="container">
        <div role="navigation" class="navbar-inverse">
          <div class="container">
            <div class="navbar-header">
              <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="collapse navbar-collapse">
              <ul id="nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Sermons</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Blogs</a></li>
                <li><a href="#">Gallary</a>
                  <ul>
                    <li><a href="#">Gallery Large</a></li>
                    <li><a href="#">Gallery Medium</a></li>
                    <li><a href="#">Gallery Small</a></li>
                    <li><a href="#">Gallery Masonry</a></li>
                    <li><a href="#">Gallery Album Style</a></li>
                  </ul>
                </li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">Shortcodes</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Shop</a></li>
              </ul>
            </div>
            <!--/.nav-collapse --> 
          </div>
        </div>
      </div>
    </section>
    <!--Navigation Row End--> 
  </header>
  <!--Header End--> 
  <!-- Main Start-->
  <div id="main"> 
    <!--Inner Pages Heading Area Start-->
    <section class="inner-headding">
      <div class="container">
        <h1>Contact Us</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit fringilla ut nisi non semper</p>
      </div>
    </section>
    <!--Inner Pages Heading Area End--> 
    <!-- Start of Thank -->
    <section id="content_Wrapper" class="mbtm">
      <section class="container container-fluid">
        <section class="row-fluid">
          <section class="span12 thanx-page">
          <div class="holder">
            <h2>Thank You</h2>
            <p>Thank you for your form submission, as soon as we get this we will get back to you shortly.</p>
            </div>
          </section>
        </section>
      </section>
    </section>
	<!-- End of Thank -->
  </div>
  <!-- Main End--> 
  
  <!-- Footer Area Start-->
  <footer id="footer">
    <section class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="footer-box-1">
              <h4>About Church</h4>
              <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="footer-box-1">
              <h4>Tweets</h4>
              <ul id="footer-tweet">
                <li>
                  <div class="tweets"> <strong class="name">@johndoe</strong>
                    <p>There are many variations of passages the majority.</p>
                    <a href="#">themeforest.net/item/prayerchurch</a> </div>
                  <div class="tweets"> <strong class="name">@dazy</strong>
                    <p>There are many variations of passages the majority.</p>
                    <a href="#">themeforest.net/item/prayerchurch</a> </div>
                </li>
                <li>
                  <div class="tweets"> <strong class="name">@johndoe</strong>
                    <p>There are many variations of passages the majority.</p>
                    <a href="#">themeforest.net/item/prayerchurch</a> </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="footer-box-1">
              <h4>Stay with US</h4>
              <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
              <form action="#" class="newsletter">
                <input name="" class="input-newsletter" type="text" required pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$" placeholder="Enter email for Newsletter">
                <input name="" type="submit" class="btn-submit-news" value="Submit">
              </form>
            </div>
          </div>
          <div class="col-md-3">
            <div class="footer-box-1">
              <h4>Contact</h4>
              <address>
              <p>The Church Branch,<br>
                123 Lorem Ipsum Avenue, New York
                United States, 012345</p>
              <ul>
                <li><i class="fa fa-phone"></i>0123 456 7890</li>
                <li><i class="fa fa-print"></i>0123 456 7890</li>
                <li><i class="fa fa-envelope-o"></i><a href="mailto:" class="email">info@prayer.com</a></li>
                <li><i class="fa fa-skype"></i>0123 456 7890</li>
              </ul>
              </address>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Footer Social Row Start-->
    <section class="footer-social">
      <div class="container">
        <ul>
          <li><a href="#" class="social-color-1"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#" class="social-color-2"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#" class="social-color-3"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#" class="social-color-4"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#" class="social-color-5"><i class="fa fa-tumblr"></i></a></li>
          <li><a href="#" class="social-color-6"><i class="fa fa-skype"></i></a></li>
          <li><a href="#" class="social-color-7"><i class="fa fa-youtube"></i></a></li>
        </ul>
      </div>
    </section>
    <!--Footer Social Row End--> 
    <!-- Copyrights Section Start-->
    <section class="copyrights-section">
      <div class="container"> <strong class="copy"><span class="bold">Prayer</span> &copy; 2014, All Rights Reserved, Designed &amp; Developed by: <a href="http://www.crunchpress.com/" target="_blank" class="web">CrunchPress</a></strong> </div>
    </section>
    <!-- Copyrights Section End--> 
  </footer>
  <!-- Footer Area End--> 
</div>
<!--Wrapper End--> 
<!--Jquery Js--> 
<script src="js/jquery.js" type="text/javascript"></script> 
<!--Bootstrap Js--> 
<script src="js/bootstrap.js" type="text/javascript"></script> 
<!--Upcoming News Times Js--> 
<script src="js/jquery.plugin.js"></script> 
<!--Upcoming News Times Js--> 
<script src="js/jquery.countdown.js"></script> 
<!--Bxslider Js--> 
<script src="js/jquery.bxslider.min.js"></script> 
<!--Filterable JS--> 
<script type="text/javascript" src="js/jquery-filterable.js"></script> 
<!--Flex Timeline JS--> 
<script type="text/javascript" src="js/jquery.flexisel.js"></script> 
<!-- Style Switcher --> 
<script type="text/javascript" src="js/styleswitch.js"></script> 
<script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script> 
<!--Costom Js--> 
<script src="js/custom.js" type="text/javascript"></script>
</body>

</html>
