<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!--displays the name of the product from the database based on the id of the product-->
<title>Stylus Planet-Product Reviews:</title>
<!--[if lt IE 9]>
     <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/slide.css" media="screen">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    
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
<div class="container">
	<header>
    	<h1><img src="img/logo.jpg" alt="Stylus Planet" id="logo"/></h1> 
        <h1><img src="img/logo2.png" alt="Stylus Planet" id="logo2"/></h1>  
    </header>
    <div id="nav_bar">    
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
     
     <!--HTML-->
     <div class="header">
     <!--displays the name of the product from the database based on the id of the product-->
     	<h2>Product Reviews</h2>
     </div>
     <div><p id="important">*This website was created for portfolio purposes only. The identity and branding for this project is completely fictional and is not affiliated with any real company and you cannot order any products. As a student, this project is intended to display skills involved in the creation of the website. This project is in no way intended for commercial gain.</p></div> 
     <section>
     <div id="review_image_area">
     <img id="review_image" src="img/product_reviews.jpg" alt="women writing a review"/>
     </div>
     <div id="review_area">
    	
        
        <div class="review_intro">
     
	<p id="review_text">Feel free to browse or add a product review below:</p>
    	</div>
        <div class="review_btns">
        <p><a href="review_add.php" id="add3">Add Review</a></p>
    	</div>
<?php
//make a var that refers to the path to the XML
$fileDir = "xml/";
//open a connection to the folder full of XML files
$handle = opendir($fileDir);
//begin a while loop to perform a routine on each file in the folder
while (($file = readdir($handle))!== FALSE){
	//tell it to skip to the next item in the folder if the current item is not a file
	if(is_dir($fileDir.$file))continue;
//load the XML from the current file into an array variable
$reviewFile = simplexml_load_file($fileDir.$file);
	//store each of the array's values(productName, model#, retailer, comments, and customerName) in a different var
	$a_productName = $reviewFile->productName;
	$a_date = $reviewFile->date;
	$a_retailer = $reviewFile->retailer;
	$a_comments = $reviewFile->comments;
	$a_customerName = $reviewFile->customerName;
	//use [] for attributes not ->
	$a_id = $reviewFile['id'];
//create an HTML structure for the data. In the midst of that, echo the variables
?>
<div class="review_info">
<h4 id="pname"><?php echo $a_productName; ?></h4>
<p id="date"><?php echo $a_date; ?></p>
<p id="retailer">Purchased at: <?php echo $a_retailer; ?></p>
<p id="comments"><?php echo $a_comments; ?></p>
<p id="cname"><?php echo $a_customerName; ?></p>
</br>
</br>
</div>
<?php
//close the WHILE loop
}
?>
</div>
		</div>
	</section>

    <footer>
    <p>&copy; 2012 Eric Gurinowitsch</p>
    </footer>
    </div>
    
</body>
</html>