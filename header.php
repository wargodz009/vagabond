<?php 
$BASE_URL = 'http://vagabondwellness.byethost12.com/';
$file = $_SERVER["SCRIPT_NAME"];
$path_details = pathinfo( $file );
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class=" js flexbox rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>..:: Massage::..</title>
<meta name="description" content="vagabond wellness 24/7 home, hotel, condo massage and spa, we also cater spa party, manicure and pedicure">
<meta name="keywords" content="vagabond, wellness, 24/7 home, hotel, condomassage, spa, manicure, pedicure, on call, bentosa, xiamen">
<meta name="description" content=" | ">
<link rel="stylesheet" type="text/css" media="all" href="<?=$BASE_URL;?>files/css/normalize.css">
<link rel="stylesheet" type="text/css" media="all" href="<?=$BASE_URL;?>files/css/style(1).css?v=<?=rand();?>">
<link rel="stylesheet" type="text/css" media="all" href="<?=$BASE_URL;?>files/css/grid.css">

<script type="text/javascript" src="<?=$BASE_URL;?>files/js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="<?=$BASE_URL;?>files/js/audio.js"></script>
<script type="text/javascript" src="<?=$BASE_URL;?>files/js/custom.js"></script>
<script type="text/javascript" src="<?=$BASE_URL;?>files/js/superfish.js"></script>
<script type="text/javascript" src="<?=$BASE_URL;?>files/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?=$BASE_URL;?>files/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?=$BASE_URL;?>files/js/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="<?=$BASE_URL;?>files/js/jquery.tools.min.js"></script>
<script type="text/javascript" src="<?=$BASE_URL;?>files/js/jquery.loader.js"></script>
<script type="text/javascript" src="<?=$BASE_URL;?>files/js/swfobject.js"></script>
<script type="text/javascript" src="<?=$BASE_URL;?>files/js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="<?=$BASE_URL;?>files/js/jquery.flickrush.js"></script>
<script type="text/javascript">
	// initialise plugins
		jQuery(function(){
			// main navigation init
			jQuery('ul.sf-menu').superfish({
				delay:       1000, 		// one second delay on mouseout 
				animation:   {opacity:'show',height:'show'}, // fade-in and slide-down animation 
				speed:       'normal',  // faster animation speed 
				autoArrows:  false,   // generation of arrow mark-up (for submenu) 
				dropShadows: false   // drop shadows (for submenu)
			});
			
			// prettyphoto init
			jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({
				animation_speed:'normal',
				slideshow:5000,
				autoplay_slideshow: false
			});
			
		});
		
		// Init for audiojs
		audiojs.events.ready(function() {
			var as = audiojs.createAll();
		});
		$(function(){
			$('.sf-menu > li:last-child').addClass('last');
			$('.sf-menu > li').each(function(){
				  currindex = $(this).index();
				  $(this).css({zIndex:50-currindex})
			})
			$('.sf-menu > li > a').wrapInner('<span class="menu-txt"/>').append('<span class="bg-menu"></span>');
			$('.img-hover').append('<span class="mask"></span>');
			$('.img-hover').hover(function(){
					$(this).find('.mask-ie').stop().animate({opacity:0.5, right:0, top:0, bottom:0, left:0})
				}, function(){
					$(this).find('.mask-ie').stop().animate({opacity:0, right:'50%', top:'50%', bottom:'50%', left:'50%'})
			});
			if ($.browser.msie && $.browser.version < 10) {
				$('.img-hover').append('<span class="mask-ie"></span>');
				
				jQuery('input[type="submit"], input[type="reset"]').hover(function(){
					jQuery(this).addClass('submit-hover')
				 },
					 function(){
					  jQuery(this).removeClass('submit-hover')
				 });
			}
		})
</script>
<script type="text/javascript">
	jQuery(window).load(function() {
		// nivoslider init
		jQuery('#slider').nivoSlider({
			effect: 'fade',
			slices:15,
			boxCols:8,
			boxRows:8,
			animSpeed:500,
			pauseTime:5000,
			directionNav:false,
			directionNavHide:false,
			controlNav:true,
			captionOpacity:0.8,
			controlNavThumbs: true,
			controlNavThumbsFromRel: false,
			controlNavThumbsReplace: '-80x98.jpg'
		});
	});
</script>
<style type="text/css">body{font-family:Arial,Helvetica,sans-serif;color:#9fab28}#main{font-size:12px;font-style:normal;}</style>
</head>

<body class="home page page-id-203 page-template page-template-page-home-php">
<div id="main"> 
	<div class="bg-content">
		<div class="bg">
			<div class="container">
				<header id="header">
					<div class="container_24 clearfix">
						<div class="grid_24">
							<div class="logo">
								<a href="<?=$BASE_URL;?>" id="logo"><img src="<?=$BASE_URL;?>files/images/logo.png" alt="Spa&amp;Relax" title=""></a>
								<p class="tagline"></p>
							</div>
							<nav class="primary">
								<ul id="topnav" class="sf-menu sf-js-enabled">
									<li id="menu-item-205" class="menu-item menu-item-type-post_type menu-item-object-page <?=($path_details['basename'] == 'index.php'?"current-menu-item":'');?> page_item page-item-203 current_page_item menu-item-205" style="z-index: 50;">
										<a href="index.php" class="bg-menu">
											<span class="menu-txt">HOME</span>
										</a>
									</li>
									<li id="menu-item-21" class="menu-item <?=($path_details['basename'] == 'about_us.php'?"current-menu-item":'');?> menu-item-type-post_type menu-item-object-page menu-item-21" style="z-index: 49;">
										<a href="about_us.php" class="bg-menu">
											<span class="menu-txt">ABOUT US</span>
										</a>
									</li>
								</ul> 
							</nav> 
							<div id="widget-header">
							</div> 
						</div>
					</div> 
				</header>
			<div class="bg-slider">
				<div class="container_24 clearfix">
					<div class="grid_17">
						<section id="slider-wrapper">
							<div id="slider" class="nivoSlider">
								<img src="<?=$BASE_URL;?>files/images/slide-1.jpg" alt="" title="Relax, Rejuvinate and Free Your Body and Mind From Muscle Pains." style="display: none;">
								<img src="<?=$BASE_URL;?>files/images/slide-2.jpg" alt="" title="Relax, Rejuvinate and Free Your Body and Mind From Muscle Pains." style="display: none;">
								<img src="<?=$BASE_URL;?>files/images/slide-3.jpg" alt="" title="Relax, Rejuvinate and Free Your Body and Mind From Muscle Pains." style="display: none;">
								<img src="<?=$BASE_URL;?>files/images/slide-4.jpg" alt="" title="Relax, Rejuvinate and Free Your Body and Mind From Muscle Pains." style="display: none;">
							</div>
						</section> 
					</div>
					<div class="grid_7">
						<div id="my_requestquotewidget-3"> 
							<div class="top-box">
								<img src="<?=$BASE_URL;?>files/images/banner-with-text.png" alt="" class="banner-icon">
								<!--a href="#" class="button">more</a-->
							</div>
						</div> 
					</div>
				</div>
			</div>
			<div class="hr-main"></div>
			<div class="container_24 primary_content_wrap clearfix">
				<div class="clearfix">
					<div class="grid_17">
						<h1>Vagabond Wellness Massage</h1> <br/>
							<h2>We are skilled and well trained Male and Female Massage Therapists whose aim is to give our clients the best massage experience for Health and Wellness sake…</h2>