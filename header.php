<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
      
      <title><?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
?>
</title>

    <!-- Bootstrap -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
      
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <link rel="stylesheet" href="https://use.typekit.net/gbo3zat.css">
      <link rel="stylesheet" href="https://use.typekit.net/gbo3zat.css">
<?php wp_head(); ?> 
</head>
    
  <body>
      
<header class="container fluid navbarbg">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html"> <img class="img-responsive"  width="110" height="110" alt=“Logo” src="http://206.189.45.97/~mesh4/wp-content/themes/flipside_tours_webdesign/images/Logo.jpg">    
        </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active">
        <li><a href="index.html">Home</a></li>
         <li><a href="aboutus.html">About Us</a></li>
        <li><a href="services.html">Tours</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Bookings</a></li>
        <li><a href="aboutus.html">Get In Touch!</a></li>
      </ul>
    </div>
  </div>
    </nav>
   
<section class="container-fluid">
<div class="col-md-6">
 <h1 class="Flipsideheaderh1"> Flipside Tours</h1>
<p> Ready for unforgettable experiences <br> that last a lifetime...</p>
<p> Start your journey in the heart of Fremantle!</p>
    <a href="services.html" class="btn btn-default" >Book A Tour Now! </a>
    </div>  

    <div class="col-md-6 headerbg">
    <img class="img-responsive" alt=“FremantleImagery” src="http://206.189.45.97/~mesh4/wp-content/themes/flipside_tours_webdesign/images/header-bg.jpg">    
      <p class="text-right befriendstext"><strong> Let's Be Friends! </strong>
     <img src="http://206.189.45.97/~mesh4/wp-content/themes/flipside_tours_webdesign/images/instagramlogo.png"  width="35" alt=“Instagram”>
     <img src="http://206.189.45.97/~mesh4/wp-content/themes/flipside_tours_webdesign/images/googlelogo.png"  width="35" alt=“GooglePlus”>   
     <img src="http://206.189.45.97/~mesh4/wp-content/themes/flipside_tours_webdesign/images/facebooklogo.png" width="20" alt=“Facebook”> 
        </p> 
    </div> 
    
    </section> <!--- container fluid -->
      
</header> <!--- header -->