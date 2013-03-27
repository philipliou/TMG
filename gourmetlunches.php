<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='http://fonts.googleapis.com/css?family=Gentium+Basic:400,700' rel='stylesheet' type='text/css' />
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
<!--
	<a href="home.php">
   	<img src="Graphics/TMG Pictures/Mandarin Gourmet Logo.jpg" width="310" height="67" class="marginless-image float-left" />   </a>

<a href="home.php">
	<img src="Graphics/TMG Pictures/TMG Website Logo.jpg" width="308" height="229" class="float-left" />   </a>
     

   <div class="nav top-nav">
   
      <ul>
         <li><a href="home.php">HOME</a></li>
         <li><a href="lunch.php">LUNCH</a></li>
         <li><a href="#">DINNER</a></li>
         <li><a href="#">CATERING</a></li>
         <li><a href="#">LOCATIONS</a></li>
         <li><a href="#">ABOUT US</a></li>
      </ul>
   
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


<div id="content" class="menu">
	   
  <!-- <h1> Menu </h1>
   <a href="#" class="float-right"> Print Version [PDF] </a> -->

<div class="column-left menu-column">
<?php $current2 = 2; include("menu-column.php") ?>

</div>

   <div id="menu">
	
<dl>	<dt>		</dt> <dd class="category-head">	Gourmet Lunches</dd>	<dd class="price"> 	</dd>	</dl>
<dl>	<dt> 		</dt> <dd class="category-notes"> Served with Daily Appetizer, Fried or Steamed Rice, and Fortune Cookie	</dd>	<dd class="price">	</dd>	</dl>
<dl>	<dt>	Kathy’s Salad Plate	</dt>	<dd>	Iceberg lettuce, prawns, beef and chicken	</dd>	<dd class="price">	11.95	</dd>	</dl>
<dl>	<dt>	Mandarin Salad Plate	</dt>	<dd>	Chinese chicken salad with teriyaki beef strips and fried prawns	</dd>	<dd class="price">	13.75	</dd>	</dl>
<dl>	<dt>	Combination	</dt>	<dd>	Mandarin beef and prawns with honeyed walnuts	</dd>	<dd class="price">	12.95	</dd>	</dl>
<dl>	<dt>	Fresh catch	</dt>	<dd>	Kung pao scallops and prawns with honeyed walnuts	</dd>	<dd class="price">	12.95	</dd>	</dl>
<dl>	<dt>	Poultry	</dt>	<dd>	Chicken with daily vegetables and general tso’s chicken	</dd>	<dd class="price">	11.95	</dd>	</dl>
<dl>	<dt>	Walnut prawns with veggies	</dt>	<dd>	Prawns with honeyed walnuts and daily fresh vegetables	</dd>	<dd class="price">	11.95	</dd>	</dl>
<dl>	<dt>	Beef with veggies	</dt>	<dd>	Sautéed veggies with your choice of Mongolian or tangerine beef	</dd>	<dd class="price">	11.95	</dd>	</dl>
<dl>	<dt>	Chicken with veggies	</dt>	<dd>	Veggies and choice of General Tsos, Hunan, Kung Pao or Curry chicken	</dd>	<dd class="price">	11.95	</dd>	</dl>
<dl>	<dt>	Pineapple Beef and Chicken	</dt>	<dd>	Beef and chicken stir-fried with pineapple and veggies in a tangy sauce	</dd>	<dd class="price">	12.95	</dd>	</dl>
      
   </div>
   
</div>

<div id="footer">
	<?php include("footer.php") ?>
</div>

</body>
</html>