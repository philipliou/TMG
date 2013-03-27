<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='http://fonts.googleapis.com/css?family=Gentium+Basic:400,700' rel='stylesheet' type='text/css'/>
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
               preloadImage: 'Graphics/FoodGallery/peking_duck_wsj.jpg',
               play: 5000,
               pause: 2500,
               hoverPause: true
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

<div id="page-header">

<?php $current = 2; include("page-header.php") ?>
  </div>


<div id="content" class="menu">


<div class="column-left menu-column">
	<?php $current2 = 10; include("menu-column.php") ?>
</div>

   <div id="menu">
      

<dl> <dt> </dt>	<dd class="category-head">	Seasonal Specials	</dd>	<dd class="price">		</dd>	</dl> 	
</dl>
<dl>	<dt>	Basil Chicken	</dt>	<dd>	Boneless chicken, basil, whole garlic and jalapenos	</dd>	<dd class="price">	12.95	</dd>	</dl>
<dl>	<dt>	Basil Tofu	</dt>	<dd>	Crispy tofu, basil, whole garlic and jalapenos	</dd>	<dd class="price">	9.95	</dd>	</dl>
<dl>	<dt>	Hibachi Prawns	</dt>	<dd>	Buttery prawns sautéed with zucchini and onion	</dd>	<dd class="price">	15.95	</dd>	</dl>
<dl>	<dt>	Tropical Prawns	</dt>	<dd>	Jumbo prawns sautéed in a tangy fruity sauce of pineapple and lychee	</dd>	<dd class="price">	15.95	</dd>	</dl>
      
   </div>
   
</div>

<div id="footer">
	<?php include("footer.php") ?>
</div>

</body>
</html>