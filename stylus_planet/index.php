<?php

session_start();
include("includes/function_lib.php");

	$result = run_my_query("DROP TABLE stylus_table");
	$result = run_my_query("CREATE TABLE stylus_table( ".
														"id int PRIMARY KEY auto_increment, ".
														"product_name char(30), ".
														"price DEC(6,2), ".
														"descr text, ".
														"small_descr text, ".
														"img_thumb char(50), ".
														"img_large char(50), ".
														"paypal char(50) ".
														")"
														);
							$result = run_my_query("INSERT INTO stylus_table ".
							"(id, product_name, price, descr, small_descr, img_thumb, img_large, paypal) ".
							"VALUES ".
							"(NULL, 'Stylus Rx', 24.95, 'On the go stylus, lightweight 
	and durable. Turn your ipad or any touch device into a canvas 
	or notepad. With the smooth and responsive usability, it is like 
	using a real pen.', 'On the go stylus, lightweight 
	and durable.', 'rx_thumb.jpg', 'rx_large.jpg', '9T7GTZUYJ5XES') "
							);	
							$result = run_my_query("INSERT INTO stylus_table ".
							"(id, product_name, price, descr, small_descr, img_thumb, img_large, paypal) ".
							"VALUES ".
							"(NULL, 'Stylus GT/2', 27.95, 'Two for one stylus. Same responsive 
	and fluid usability as the Stylus Rx. When you are done using the 
	stylus on your touch device, flip it over and use the traditional 
	pen to take notes or sketch on regular paper.', 'Flip this stylus over and
	use it as a traditional pen.', 'gt_thumb.jpg', 'gt_large.jpg', 'NMMURSV2QJE4A') "
							);	
							$result = run_my_query("INSERT INTO stylus_table ".
							"(id, product_name, price, descr, small_descr, img_thumb, img_large, paypal) ".
							"VALUES ".
							"(NULL, 'Stylus LX', 22.95, 'Simple and traditional stylus used for 
	making your creativity come to life in the digital universe. 
	Typical use is sketching, drawing and note taking on any 
	touch device.', 'Typical use is sketching, drawing and note taking.', 'lx_thumb.jpg', 'lx_large.jpg', '9EGGPNR4FRYLQ') "
							);	
							$result = run_my_query("INSERT INTO stylus_table ".
							"(id, product_name, price, descr, small_descr, img_thumb, img_large, paypal) ".
							"VALUES ".
							"(NULL, 'Sketch Pen 500', 127.95, 'Capture your sketches digitally with 
	the Sketch Pen 500. This unit allows you to draw on paper with the use 
	of multiple layers to later use on common illustrating or photo software. 
	You can even save your drawings as common file extensions such as jpeg 
	or png.', 'Capture your sketches digitally with 
	the Sketch Pen 500.', 'sketch_thumb.jpg', 'sketch_large.jpg', 'UTD9F7ZT75NKY') "
							);
							$result = run_my_query("INSERT INTO stylus_table ".
							"(id, product_name, price, descr, small_descr, img_thumb, img_large, paypal) ".
							"VALUES ".
							"(NULL, 'Pen Tab 1.2', 189.95, 'Most popular pen tablet of our line. Easy 
	to use and compatible with all photo and illustration software. Touch 
	input features scrolling, zooming and rotating your screen.', 'Easy 
	to use and compatible with all photo and illustration software.', 
	'one_two_thumb.jpg', 'one_two_large.jpg', 'YEXU6B32QP37W') "
							);	
							$result = run_my_query("INSERT INTO stylus_table ".
							"(id, product_name, price, descr, small_descr, img_thumb, img_large, paypal) ".
							"VALUES ".
							"(NULL, 'Pen Tab 1.8', 198.95, 'Draw, sketch, create. The Pen Tab 1.8 is 
	great for digital painting and creating digital artwork with the feel 
	of using a traditional medium with the wireless stylus.', 'The Pen Tab 1.8 is 
	great for digital painting.', 'one_eight_thumb.jpg', 
	'one_eight_large.jpg', 'B2BXK47PUT3TY') "
							);	
							$result = run_my_query("INSERT INTO stylus_table ".
							"(id, product_name, price, descr, small_descr, img_thumb, img_large, paypal) ".
							"VALUES ".
							"(NULL, 'Pen Tab 2.1', 275.99, 'With 48.4 square inches of working space, the 
	Pen Tab 2.1 is perfect for design professionals looking for professional 
	results. Easy to use multi-touch functions and pressure sensitive pen.',
	'The Pen Tab 2.1 is perfect for design professionals.',
	'two_one_thumb.jpg', 'two_one_large.jpg', 'LSVVXPS45VDX2') "
							);	
							$result = run_my_query("INSERT INTO stylus_table ".
							"(id, product_name, price, descr, small_descr, img_thumb, img_large, paypal) ".
							"VALUES ".
							"(NULL, 'Pen Tab 2.8', 310.85, 'The Pen Tab 2.8 has an extra-large working space 
	of 218 square inches, perfect for professionals who prefer a large digital 
	canvas. This tablet makes the creation of digital art and paintings a breeze.',
	'The Pen Tab 2.8 has an extra-large working space 
	of 218 square inches.', 'two_eight_thumb.jpg', 'two_eight_large.jpg', 'TLG23ALWE6JG4') "
							);	
							$result = run_my_query("INSERT INTO stylus_table ".
							"(id, product_name, price, descr, small_descr, img_thumb, img_large, paypal) ".
							"VALUES ".
							"(NULL, 'Office Tab 360', 1585.98, 'This interactive pen display is perfect 
	for office professionals. The Office Tab 360 has a 17-inch display with 
	1280 x 1024 resolution as well as an easy hook-up to overhead projectors. 
	Take notes in a meeting, accept signatures, sketch ideas or give presentations 
	like a pro.', 'This interactive pen display is perfect 
	for office professionals.', 'threesixty_thumb.jpg', 'threesixty_large.jpg', '3TAWZ6MBZFX28') "
							);
							$result = run_my_query("INSERT INTO stylus_table ".
							"(id, product_name, price, descr, small_descr, img_thumb, img_large, paypal) ".
							"VALUES ".
							"(NULL, 'Display Pro 680', 1999.95, 'The Display Pro 680 is a 21.5 inch HD 
	Widescreen LCD equipped with pen input capabilities. Professionals choice 
	for photo editing, illustrations, digital paintings and animations. The 
	Display Pro 680 is designed to tilt and rotate to make you the most comfortable 
	while you are creating your next masterpiece.', 'The Display Pro 680 is a 21.5 inch HD 
	Widescreen LCD.', 'sixeighty_thumb.jpg', 'sixeighty_large.jpg', 'T2AJA3JLX6A4A') "
							);		
	
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Stylus Planet</title>
<!--[if lt IE 9]>
     <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
	<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/slide.css" media="screen" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script src="js/script.js"></script>
	<script>
  	$(function() {
    	$(".rslides").responsiveSlides();
 	 });
	</script>
    <!-- PNG FIX for IE6 -->
    <!-- http://24ways.org/2007/supersleight-transparent-png-in-ie6 -->
    <!--[if lte IE 6]>
        <script type="text/javascript" src="login_panel/js/pngfix/supersleight-min.js"></script>
    <![endif]-->
    
    <script src="js/slide.js" type="text/javascript"></script>
</head>

<body>
	<!-- Panel -->
<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
				<!-- Login Form -->
				<form class="clearfix" action="process_login.php" method="post">
					<h1>Administrator Login</h1>
                    
                    <label class="grey" for="username">Username:</label>
					<input class="field" type="text" name="username" id="username" value="" size="23" />
					<label class="grey" for="password">Password:</label>
					<input class="field" type="password" name="password" id="password" size="23" />
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Login" class="bt_login" />
                    <span class="lost-pwd">*Log in with the username and <br/>password "boss" for privileges to<br/> add and delete records</span>
				</form>
                
			</div>     					
		</div>
</div> <!-- /login -->				
    <!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
	    	<li class="left">&nbsp;</li>
	        <li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open" href="#">  Log In  </a>
				<a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
			</li>
	    	<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
	
</div> <!--panel -->

<div class="pageContent">
<div class="container1">
	<header id="index_header">
    	<h1><img src="img/logo.jpg" alt="Stylus Planet" id="logo"/></h1> 
        <h1><img src="img/logo2.png" alt="Stylus Planet" id="logo2"/></h1>  
    </header>
    <div id="fadeshow1">
            <ul class="rslides">
              <li><img src="img/slide1.jpg" alt=""></li>
              <li><img src="img/slide2.jpg" alt=""></li>
              <li><img src="img/slide3.jpg" alt=""></li>
              <li><img src="img/slide4.jpg" alt=""></li>
            </ul>
       </div> 
    <div id="nav_bar_index">    
    	<nav>
        	<ul>
            	<li><a href="index.php">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="view_all_reviews.php" id="credits">Reviews</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
            </ul>
        </nav>
     </div>
     <div><p id="important2">*This website was created for portfolio purposes only. The identity and branding for this project is completely fictional and is not affiliated with any real company and you cannot order any products. As a student, this project is intended to display skills involved in the creation of the website. This project is in no way intended for commercial gain.</p></div> 
     
     	<section id="index_text_area">
        	<p class="index_text">
            Welcome to Stylus Planet. This site will give you the opportunity to see the very best in creative application tools. We are proud to say that our products are built with only the highest quality components. We recruit top engineers and creative professionals to thoroughly design and test our products to ensure the best user experience. It is our goal to increase your productivity in this ever changing web application environment.<br/><br/> Maintain your edge with Stylus Planet products, the very best in creative tools. Please view our selection of stylus pens, pen tablets and interactive displays. Thank you for visiting Stylus Planet.  
            </p>
        	
            <div class="icon_section1">
            	<a class="icon_btn" href="products.php"><img class="icons" src="img/products_icon.png" alt"product icon" onmouseover="this.src='img/products_icon_hover.png'" 
onmouseout="this.src='img/products_icon.png'"/></a>
                <h4 class="icon_header">Products</h4>
                <p class="icon_text">
                	Browse our selection of Stylus Pens, Pen Tablets, and Interactive Displays
                </p>
            </div>
            <div class="icon_section2">
            	<a class="icon_btn" href="view_all_reviews.php"><img class="icons" src="img/review_icon.png" alt"review icon" onmouseover="this.src='img/review_icon_hover.png'" 
onmouseout="this.src='img/review_icon.png'"/></a>
                <h4 class="icon_header">Product Reviews</h4>
                <p class="icon_text">
                	Before purchasing, see the customer reviews of our high quality products
                </p>
            </div>
            <div class="icon_section3">
            	<a class="icon_btn" href="contact_us.php"><img class="icons" src="img/contact_icon.png" alt"contact icon" onmouseover="this.src='img/contact_icon_hover.png'" 
onmouseout="this.src='img/contact_icon.png'"/></a>
            	<h4 class="icon_header">Contact Us</h4>
                <p class="icon_text">
                	Feel free to contact us with any comments, questions or concerns 
                </p>
            </div>
        </section>
        
     <footer>
    <p>&copy; 2012 Eric Gurinowitsch</p>
    </footer>
</div>
</div>
</body>
</html>