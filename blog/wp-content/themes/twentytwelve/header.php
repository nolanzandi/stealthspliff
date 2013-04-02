<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="pingback" href="localhost/stealth%spliff/blog/xmlrpc.php" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="shortcut icon" href="images/DD.jpeg">
<link href="http://fonts.googleapis.com/css?family=Arvo|Open+Sans:400,300,600,700" rel="stylesheet" type="text/css" />

<!-- Stylesheets -->
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

<!-- Javascript -->
<script type="text/javascript" src="slideshowfade.js"></script>

    <style>
      #Slideshow1 img { width:1200px; height:300px }
    </style>
</head>
<body>
	
	<div id="menu-wrapper">
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="../stealth spliff/index.html">Homepage</a></li>
			<li><a href="http://localhost/stealth spliff/blog/index.php">Blog</a></li>
			<li><a href="http://localhost/stealth spliff/photos.html">Photos</a></li>
			<li><a href="http://localhost/stealth spliff/about.html">About</a></li>
			<li><a href="http://localhost/stealth spliff/links.html">Links</a></li>
			<li><a href="http://localhost/stealth spliff/contact.html">Contact</a></li>
		</ul>
	</div>
	<!-- end #menu --> 
</div>
</div>
<body onload="startTime();">
<div id="banner">
	
  <script>

      var imgArray = new Array();
      imgArray[0] = "images/CloudLogo.jpg";
      imgArray[1] = "images/bottlelable2.jpg";
      imgArray[2] = "images/LOGO2.jpg";
      imgArray[3] = "images/ego_battery_laser.jpg";

      slideshowFade('Slideshow1','',imgArray,20,5000);
    
    </script>	
</div>

<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Stealth<span>Spliff</span></a></h1>
			<p>Better breathing, better blazing</p>
		</div>
	</div>
</div>
<div id="wrapper"> 





