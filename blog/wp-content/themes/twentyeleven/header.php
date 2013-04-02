<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
	
	<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

<link rel="shortcut icon" href="http://localhost/stealth spliff/imagesimages/DD.jpeg">
<link href="http://fonts.googleapis.com/css?family=Arvo|Open+Sans:400,300,600,700" rel="stylesheet" type="text/css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- Stylesheets -->
<link href="http://localhost/stealth spliff/style.css" rel="stylesheet" type="text/css" media="screen" />

<!-- Javascript -->
<script type="text/javascript" src="http://localhost/stealth spliff/slideshowfade.js"></script>

    <style>
      #Slideshow1 img { width:1200px; height:300px }
    </style>
</head>
<body>
	
	<div id="menu-wrapper">
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="../index.html">Homepage</a></li>
			<li><a href="../blog/index.php">Blog</a></li>
			<li><a href="../photos.html">Photos</a></li>
			<li><a href="../about.html">About</a></li>
			<li><a href="../links.html">Links</a></li>
			<li><a href="../contact.html">Contact</a></li>
		</ul>
	</div>
	<!-- end #menu --> 
</div>
</div>
<body onload="startTime();">
<div id="banner">
	
  <script>

      var imgArray = new Array();
      imgArray[0] = "../images/CloudLogo.jpg";
      imgArray[1] = "../images/bottlelable2.jpg";
      imgArray[2] = "../images/LOGO2.jpg";
      imgArray[3] = "../images/ego_battery_laser.jpg";

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
 

