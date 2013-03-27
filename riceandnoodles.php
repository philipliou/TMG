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
	<?php $current2 = 7; include("menu-column.php") ?>
</div>

   <div id="menu">
 
	<dl> <dt> </dt>	<dd class="category-head">	Rice and Noodles	</dd>	<dd class="price">		</dd>	</dl> 
<dl>	<dt>	Mandarin Fried Rice	</dt>	<dd>	Beef, chicken and shrimp with carrots, peas, onions and eggs	</dd>	<dd class="price">	7.95	</dd>	</dl>
<dl>	<dt>	Fried Rice	</dt>	<dd>	Choice of pork, chicken or beef combined with chopped carrots, peas, onions and eggs	</dd>	<dd class="price">	7.95	</dd>	</dl>
<dl>	<dt>	Vegetable Fried Rice	</dt>	<dd>	Carrots, peas, baby corn, mushrooms, onions and eggs with rice	</dd>	<dd class="price">	7.95	</dd>	</dl>
<dl>	<dt>	Mandarin Chow Mein	</dt>	<dd>	Beef, chicken and shrimp combined with chopped cabbage	</dd>	<dd class="price">	7.95	</dd>	</dl>
<dl>	<dt>	Chow Mein	</dt>	<dd>	Choice of pork, chicken or beef with stir-fried noodles	</dd>	<dd class="price">	7.95	</dd>	</dl>
<dl>	<dt>	Vegetable Chow Mein	</dt>	<dd>	Cabbage, carrots, baby corn and mushrooms with stir-fried noodles	</dd>	<dd class="price">	7.95	</dd>	</dl>
<dl>	<dt>	Chow Fun	</dt>	<dd>	Thick rice noodles, bean sprouts, green onion and chicken or beef	</dd>	<dd class="price">	8.55	</dd>	</dl>
<dl>	<dt>	Three Flavored Chow Fun	</dt>	<dd>	Thick rice noodles, bean sprouts, green onion, shrimp, chicken, scallops	</dd>	<dd class="price">	9.55	</dd>	</dl>
<dl>	<dt>	Mandarin Pan Fried Noodles	</dt>	<dd>	Noodles, shrimp, scallops, beef and veggies on a sizzling platter	</dd>	<dd class="price">	12.95	</dd>	</dl>
<dl>	<dt>	Vegetable Pan Fried Noodles	</dt>	<dd>	Crunchy noodles and assorted vegetables on a sizzling platter	</dd>	<dd class="price">	9.95	</dd>	</dl>
<dl>	<dt>	Steamed White Rice	</dt>	<dd>	White Rice	</dd>	<dd class="price">	1.00	</dd>	</dl>
<dl>	<dt>	Steamed Brown Rice	</dt>	<dd>	Brown Rice	</dd>	<dd class="price">	1.50	</dd>	</dl>
<dl>	<dt>		</dt>	

   </div>
   
</div>

<div id="footer">
	<?php include("footer.php") ?>
</div>

</body>
</html>