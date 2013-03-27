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
    <img src="Graphics/TMG Pictures/tmg_horse_silloutte.jpg" height="130" width="164" class="marginless-image float-left" />	</a> -->  

</div>
<!-- End of page-header Div -->

<div id="content">
   
  <!-- <h1> Menu </h1>
   <a href="#" class="float-right"> Print Version [PDF] </a> -->

<div class="column-left menu-column">
	<?php $current2 = 1; include("menu-column.php") ?>
</div>

   <div id="menu">
 
	 <dl>	<dt>		</dt>	<dd class="category-head"> Chef’s Specials </dd>	<dd class="price">		</dd>	</dl>
<dl>	<dt>	Steamed Fish in Ginger	</dt>	<dd>	Fish fillet, scallions, ginger, cilantro and soy on fiery platter	</dd>	<dd class="price">	15.95 / 18.95	</dd>	</dl>
<dl>	<dt>	Prawns & Honeyed Walnuts	</dt>	<dd>	Prawns crisp-sautéed and honeyed walnuts in a tangy sauce	</dd>	<dd class="price">	15.95	</dd>	</dl>
<dl>	<dt>	Salt & Pepper Prawns	</dt>	<dd>	Prawns with a zesty salt and pepper coating	</dd>	<dd class="price">	15.95	</dd>	</dl>
<dl>	<dt>	Peking Prawns	</dt>	<dd>	Lightly battered prawns sautéed with a pungent sauce	</dd>	<dd class="price">	15.95	</dd>	</dl>
<dl>	<dt>	3 Delicacies Kung Pao	</dt>	<dd>	Shrimp, beef, scallops, and peanuts sautéed in Kung Pao sauce	</dd>	<dd class="price">	13.95	</dd>	</dl>
<dl>	<dt>	Phoenix Seafood Delight	</dt>	<dd>	Sautéed prawns, scallops, lobster and vegetables in a nest	</dd>	<dd class="price">	16.95	</dd>	</dl>
<dl>	<dt>	Salt & Pepper Scallops	</dt>	<dd>	Golden-battered scallops with a zesty salt and pepper coating	</dd>	<dd class="price">	15.95	</dd>	</dl>
<dl>	<dt>	Chang Sha Chicken	</dt>	<dd>	Chicken with garlic sauce, green onion, cilantro and ginger	</dd>	<dd class="price">	11.95	</dd>	</dl>
<dl>	<dt>	Da Chain Chicken	</dt>	<dd>	Chicken chunks with chilies and vegetables in a tangy sauce	</dd>	<dd class="price">	11.95	</dd>	</dl>
<dl>	<dt>	Sesame Chicken	</dt>	<dd>	Battered chicken breast with sesame seeds in a tangy sauce	</dd>	<dd class="price">	12.55	</dd>	</dl>
<dl>	<dt>	Peking Chicken	</dt>	<dd>	Golden crunchy lightly battered breast meat in a zesty sauce	</dd>	<dd class="price">	12.55  	</dd>	</dl>
<dl>	<dt>	General Tso’s Chicken	</dt>	<dd>	Chicken breast, dried chili pod and bell pepper in a spicy sauce	</dd>	<dd class="price">	11.95	</dd>	</dl>
<dl>	<dt>	Peking Duck	</dt>	<dd>	Our own delectable recipe, crispy skin, tender meat, pancakes	</dd>	<dd class="price">	32.00 </dd>	</dl>
<dl>	<dt>	Mandarin Beef	</dt>	<dd>	Slices of lightly battered beef sautéed in a distinctive citrus sauce	</dd>	<dd class="price">	12.95	</dd>	</dl>
<dl>	<dt>	Tangerine Beef	</dt>	<dd>	Beef stir-fried with tangerine peels and chilies in a spicy sauce	</dd>	<dd class="price">	12.95	</dd>	</dl>
<dl>	<dt>	General Tso’s Beef	</dt>	<dd>	Marinated steak, onion and chili peppers served on a sizzling platter	</dd>	<dd class="price">	12.95	</dd>	</dl>
<dl>	<dt>	Imperial Pork	</dt>	<dd>	Battered chunks of pork filet toss cooked with imperial sauce	</dd>	<dd class="price">	10.95	</dd>	</dl>
<dl>	<dt>	Sautéed String Beans	</dt>	<dd>	Stir-fried until dried and tossed in a spicy garlic sauce	</dd>	<dd class="price">	9.95	</dd>	</dl>
	</div>
<!-- End of Menu Div -->

	</div>
<!-- End of Content Div -->

<div id="footer">
	<?php include("footer.php") ?>
</div>

</body>
</html>