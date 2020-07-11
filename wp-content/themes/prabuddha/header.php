<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title><?php
/*
 * Print the <title> tag based on what is being viewed.
 */
global $page, $paged;

wp_title('|', true, 'right');

// Add the blog name.
bloginfo('name');

// Add the blog description for the home/front page.
$site_description = get_bloginfo('description', 'display');
if ($site_description && ( is_home() || is_front_page() ))
    echo " | $site_description";

// Add a page number if necessary:
if ($paged >= 2 || $page >= 2)
    echo ' | ' . sprintf(__('Page %s', 'twentyten'), max($paged, $page));
?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" rel="stylesheet" type="text/css" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/themes/light/light.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/themes/dark/dark.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/themes/bar/bar.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/nivo-slider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/css/style_banner.css" type="text/css" media="screen" />

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/script.js"></script>    

        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.nivo.slider.js"></script>


        <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            
            });
        
            function imageClicked(img) {
                document.forms["searchform"].submit();
            }
        </script>
        <script type="text/javascript">
            $(document).ready(function () {	
	
                $('#nav li').hover(
                function () {
                    //show its submenu
                    $('ul', this).slideDown(100);

                }, 
                function () {
                    //hide its submenu
                    $('ul', this).slideUp(100);			
                }
            );
	
            });
        </script>

<style>
/* * {box-sizing: border-box}  
body {font-family: Verdana, sans-serif; margin:0}  **/
img {vertical-align: middle;}
.mySlides {display: none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
<script>
var slideIndex = 1;
showSlides(slideIndex);
function showSlidesStart(){
	setTimeout(showSlidesStart,3000)
	plusSlides(1);	
}
function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

</script>
        <?php
        /* We add some JavaScript to pages with the comment form
         * to support sites with threaded comments (when in use).
         */
        if (is_singular() && get_option('thread_comments'))
            wp_enqueue_script('comment-reply');

        /* Always have wp_head() just before the closing </head>
         * tag of your theme, or you will break many plugins, which
         * generally use this hook to add elements to <head> such
         * as styles, scripts, and meta tags.
         */
        wp_head();
        ?>
    </head>
    <body onload="setTimeout(showSlidesStart,5000);">
        <div class="main">
            <div class="header">
                <div class="header_top">
                    <div class="logo"><a href="<?php echo home_url('/'); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/images/logo.png" title="Home" alt="img" /></a></div>
                    <div class="header_top_right">
                    <span style=" float: right; margin-right: 5px; margin-top: -39px;">
			<?php  dynamic_sidebar( 'social-link-widget-area' ); ?>                          
                    </span>             
                        <div class="in_put"> 
                            <form action="<?php echo home_url('/'); ?>" name="searchform" id="searchform" method="get" >
                                <input type="text"  name="s" class="header_input"/>
                                <div class="search_icon">
                                    <input type="image" src="<?php bloginfo('template_url'); ?>/images/search_icon.png"  name="submit"  onclick="imageClicked(this)"/>

                                </div>                                  
                            </form> 

                        </div>

                        <div class="home_icon"><a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/home_icon.png" alt="img" /></a></div>
                    </div> 
                </div>
                <div class="header_bottom">
                    <div style="width:100%; height:auto; float:left; background:url(<?php bloginfo('template_url'); ?>/images/top_nav_bg.jpg) repeat-x;">
                        <div id="menu-container" class="mymenu" >
                            <?php wp_nav_menu(array('menu' => 'header_menu', 'items_wrap' => '<ul id="nav">%3$s</ul>', 'theme_location' => 'primary')); ?>            
                        </div>           
                    </div>      
                    <div class="banner_nav">
                        <div class="banner_nav_left"> 

                            <div class="breadcrumbs">
                                <?php
                                if (!is_home() && !is_front_page()) {
                                    if (function_exists('bcn_display')) {
                                        bcn_display();
                                    }
                                }
                                ?>
                            </div>            	
                        </div>
                        <div class="banner_nav_right">
                        </div>
                    </div>
					<!-- Slider start  -->
						<div class="slideshow-container">
						<div class="mySlides fade" style="display:block">
						  <img src="banner/BANNER_1.jpg" style="width:100%">
						</div>
						<div class="mySlides fade">
						  <img src="banner/BANNER_2.jpg" style="width:100%">
						</div>
						<div class="mySlides fade">
						  <img src="banner/BANNER_3.jpg" style="width:100%">
						</div>
						<div class="mySlides fade">
						  <img src="banner/BANNER_4.jpg" style="width:100%">
						</div>
						<div class="mySlides fade">
						  <img src="banner/BANNER_5.jpg" style="width:100%">
						</div>

						<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="next" onclick="plusSlides(1)">&#10095;</a>

						</div>					
					<!-- Slider ends  -->
                </div>
            </div> 