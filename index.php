<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='https://fonts.googleapis.com/css?family=Gentium+Basic' rel='stylesheet' type='text/css' />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title> The Mandarin Gourmet - Cupertino</title>
<link rel="shortcut icon" href="../The Mandarin Gourmet/PHP Files/favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="tmg.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
      <script src="http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js"></script>
      <script src="js/slides.min.jquery.js"></script>
		<script>
         $(function(){
            $('#slides').slides({
               preload: true,
			   preloadImage: 'Graphics/FoodGallery/painting_big.jpg',
               play: 3000,
               pause: 4000,
               hoverPause: false,
					fadeSpeed: 800,
					crossfade: true,
					effect: 'fade',
					bigTarget: true,
					
            });
         });
      </script>
	<!-- The below script is for Google Analytics -->
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-26464733-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</head>
<body>
<div id="home-header">

	<a href="index.php">
	<!--<img src="Graphics/TMG Pictures/logo.jpg" /> -->
	<!-- <img src="Graphics/TMG Pictures/Horse Logo.gif" /> -->
	<!-- <img src="Graphics/TMG Pictures/TMG Website Logo Glossy 2.jpg" /> -->
	<img src="Graphics/TMG Pictures/TMG Website Logo THIN No Logo.png" />
	</a>
   
</div>

<div class="nav home-nav">
 	<ul>
      <!--<li><a href="index.php">HOME</a></li> -->
      <li><a href="gourmetlunches.php">MENU</a></li>
      <li><a href="catering.php">CATERING</a></li>
      <li><a href="locations.php">LOCATIONS</a></li>
      <li><a href="photos.php">PHOTOS</a></li>
      <li><a href="info.php">INFO</a></li>
   </ul>
</div>

<div id="home-content">
<!--   
   <div id="container">
		<div id="example">
		   <div id="slides">
				<div class="slides_container">
					<a href="Graphics/TMG Pictures/night_exterior.jpg" alt="Slide 1"> <img src="Graphics/TMG Pictures/night_exterior.jpg" /> </a>
					<a href="Graphics/TMG Pictures/horses_interior.jpg" title="Happy Bokeh raining Day | Flickr - Photo Sharing!" target="_blank"><img src="Graphics/TMG Pictures/horses_interior.jpg" alt="Slide 3"></a>
					<a href='Graphics/TMG Pictures/bar_interior.jpg' title="We Eat Light | Flickr - Photo Sharing!" target="_blank"><img src='Graphics/TMG Pictures/bar_interior.jpg' alt="Slide 4"></a>
					<a href="Graphics/TMG Pictures/interior_painting.jpg" title="" target="_blank"><img src="Graphics/TMG Pictures/interior_painting.jpg" alt="Slide 5"></a>
               <a href="Graphics/TMG Pictures/mongolian_beef_big.jpg" title="" target="_blank"><img src="Graphics/TMG Pictures/mongolian_beef_big.jpg" alt="Slide 6"></a>
               <a href="Graphics/TMG Pictures/honey_walnut_big.jpg" title="" target="_blank"><img src="Graphics/TMG Pictures/honey_walnut_big.jpg" alt="Slide 7"></a>
               <a href="Graphics/TMG Pictures/painting_day.jpg" title="" target="_blank"><img src="Graphics/TMG Pictures/painting_day.jpg" alt="Slide 8"></a>
				</div>
			</div>
		</div>
	</div>
	-->
	<img src="Graphics/TMG Pictures/interior_painting.jpg" class="image" alt="Slide 5" />

<div id="home-info" class="column-container">
	<div class="column-left">
			<h4 class="hours colored-background"> LUNCH HOURS</h4>
				<p> 7 Days a Week &nbsp;&nbsp;11:30 am - 2:15 pm </p>
			<h4 class="hours colored-background"> DINNER HOURS</h4>
			 	<p class="hours"> Sunday - Thursday &nbsp;&nbsp;5:00 pm - 9:15 pm </p>
				<p class="hours"> Friday - Saturday &nbsp;&nbsp;&nbsp;&nbsp;5:00 pm - 9:45 pm </p>
			
	</div>

	<div class="column-right float-right">
		<h4 class="hours colored-background"> ADDRESS </h4>
			<p> 10145 N. De Anza Blvd. <br/>
  				Cupertino, CA 95014 </p>
	
  				<a href="http://maps.google.com/maps?q=mandarin+gourmet,+cupertino,+ca&daddr=10145+North+De+Anza+Boulevard,+Cupertino,+CA+95014+(Mandarin+Gourmet+Cupertino)&hl=en&ll=37.324441,-122.032614&spn=0.010579,0.022724&sll=37.324445,-122.032595&sspn=0.006295,0.006295&view=map&geocode=CanxSbhd8eowFZ2GOQIdLe65-CHRv0sTH7Yegw&t=m&z=16&vpsrc=0" target="_blank"> Get Directions</a>
			</div>
		</div>
</div>
<div id="footer">
			<?php include("footer.php") ?>
</div>
<!-- End Footer Div -->

</body>
</html>