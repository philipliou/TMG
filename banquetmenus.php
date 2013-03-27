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
	<!-- Google Analytics Ends here -->
</head>
<body>

<div id="page-header">

<?php $current = 2; include("page-header.php") ?>
<!--
   </div>
   <div id="top-info">
   <div class="column-container">
   	<div class="column-left">
		   <h3> Hours </h3>
            <p class="column-left">
               Lunch <br /> 
              	Daily <br />
               11:30am - 2:15pm <br />
            </p>
            <p class="column-right">
               Dinner <br />
               Sun - Thurs <br />
               5:00pm - 9:15pm <br />
               Fri - Sat <br />
               5:00pm - 9:45pm <br />
            </p>
       </div>
       <div class="column-right">
       <h3> Phone </h3>
       	<p> 408.725.8168 </p>
       </div>
	</div>
   </div>
   
 <a href="home.php">
    <img src="Graphics/TMG Pictures/tmg_horse_silloutte.jpg" height="130" width="164" class="marginless-image float-left" />	</a> -->  </div>


<div id="content">
   
  <!-- <h1> Menu </h1>
   <a href="#" class="float-right"> Print Version [PDF] </a> -->

<div class="column-left menu-column">
	<?php $current2 = 11; include("menu-column.php") ?>
</div>

   <div id="menu">
 	 	<dl>	<dt>		</dt>	<dd class="category-head"> Lunch Banquet Menu </dd>	<dd class="price">		</dd>	</dl>
			<dl>	<dt> </dt>	<dd class="category-notes"> 8 person minimum. Served Monday through Friday. 15% Gratuity will be added. <br /> You may also work with our staff to customize a menu to suit your specific needs. </dd>	<dd class="price">	</dd>	</dl>
	
	<div class="column-left small-column text-left">
		
		<h3> $14.95 Per Person </h3>
			<p> Chinese Chicken Salad <br />
			 Egg Roll <br />
			 Soup of the Day<br />
			 Tangerine Beef <br />
			 Hunan Chicken <br />
			 Prawns with Snow Peas and Broccoli<br />
			 Mandarin Chow Mein <br />
			 Vegetable Delight <br />
			 Fried Rice or Steamed Rice </p>
	</div>
	<div class="column-right small-column text-left">
	
		<h3> $17.95 Per Person </h3>
			<p> Minced Chicken in Lettuce Cups <br />
				Wor Won Ton Soup <br />
				General Tso's Chicken  <br />
				Mongolian Beef <br />
				Prawns with Honeyed Walnuts  <br />
				Sweet and Sour Pork <br />
				Sauteed Fresh Vegetables  <br />
				Fried Rice or Steamed Rice <br />
			</p>
	</div>
	
	<dl>	<dt>		</dt>	<dd class="category-head"> Dinner Banquet Menu </dd>	<dd class="price">		</dd>	</dl>
	<dl>	<dt> </dt>	<dd class="category-notes"> 8 person minimum. 15% Gratuity will be added. <br /> You may also work with our staff to customize a menu to suit your specific needs. </dd>	<dd class="price">	</dd>	</dl>
	
<div class="column-left text-left">
	
		<h3> $20.95 Per Person</h3>
			<p> Egg Roll, Crab Cheese Puff, and Paper Wrapped Chicken <br />
				Hot and Sour Soup <br />
				Tangerine Beef <br />
				General Tso's Chicken <br />
				Prawns with Honeyed Walnuts <br />
				Three Delicacies Kung Pao Style <br />
				Vegetarian Deluxe Pan Fried Noodles <br />
				Fried Rice or Steamed Rice <br />
			</p>
</div>

<div class="column-right text-left">
	
		<h3> $29.95 Per Person </h3>
			<p> Minced Chicken in Lettuce Cups <br />
			    Imperial Soup <br />
			   	Peking Duck <br />
				Steamed Fish with Ginger and Scallion<br />
			    Lovers Prawns 	<br />
			    Mandarin Beef 	<br />
		     	Sesame Chicken <br />
		     	Chinese Greens with Black Mushrooms <br />
		     	Fried Rice or Steamed Rice <br />
		     	Fresh Fruit Assortment <br />
			</p>
</div>

</div>

<div id="footer">
	<?php include("footer.php") ?>
</div>

</body>
</html>