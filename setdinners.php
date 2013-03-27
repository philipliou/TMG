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
	<?php $current2 = 13; include("menu-column.php") ?>
</div>

   <div id="menu">
 	 	<dl>	<dt>		</dt>	<dd class="category-head"> Set Dinners </dd>	<dd class="price">		</dd>	</dl>
			<dl>	<dt> </dt>	<dd class="category-notes"> 2 person minimum. <br /> All dinners served with Fried Rice or Steamed Rice. <br /> </dd>	<dd class="price">	</dd>	</dl> 
		<p> </p>
	
	<div class="column-left small-column">
		
		<h3> Tasters Delight Dinner </h3>
		<h4> $18.95 Per Person </h4>
		<p>	
			<b> Soup </b> <br/>
			Wor Wonton Soup 
		</p>
		
		<p>
			<b> Appetizers </b> <br />
			Egg Roll <br />
			Golden Battered Prawn 
		</p>
		<p>		<b> Entrees </b>  <br />
				<i>(One choice per person) </i>
				<ol class="no-style">
				 <li> Moo Shi Pork </li>
				 <li> Sweet and Sour Pork </li>
				 <li> Cashew Nut Chicken </li>
				 <li> Mongolian Beef  </li>
				 <li> Tangerine Beef  </li>
				 <li> Lemon Chicken </li>
				 <li> Mandarin Deluxe Pan Fried Noodles </li>
				 <li> Prawns with Snow Peas and Broccoli </li>
				 <li> Dry Sautéed String beans  </li>
				 <li> Vegetable Delight </li>
			    </ol>
		</p>
	</div>
	<div class="column-right small-column">
	
		<h3> Gourmet Delight Dinner </h3>
		<h4> $23.95 Per Person </h4>
		<p> 
			<b> Soup </b> <br />
			Three Flavor Sizzling Rice Soup
		</p>
		
		<p>
			<b> Appetizers </b> <br />
			Golden Battered Prawn <br /> 
			Teriyaki Beef <br /> 
			Paper Wrapped Chicken <br />
			Chinese Chicken Salad
		</p>
		<p>
			<b> Entrees </b> <br />
			<i> (One choice per person) </i>
				<ol class="no-style">
				 <li> Beef and Scallops on Sizzling Plate </li>
				 <li> Prawns with Honeyed Walnuts </li>
				 <li> General Tso's Chicken </li>
				 <li> Peking Prawns  </li>
				 <li> Mandarin Beef  </li>
				 <li> Phoenix Seafood Delight </li>
				 <li> Three Delicacies Kung Pao Style </li>
				 <li> Mongolian Lamb </li>
			    </ol>
		</p>
	</div>
</div>

</div>

<div id="footer">
	<?php include("footer.php") ?>
</div>

</body>
</html>