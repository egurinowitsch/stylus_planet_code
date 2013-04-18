<?php
//retrieve and store information for display...
//first step: source your SQL file
//This code does not access it form the .sql file...source it!

//read in the db conn code from a separate file:
include("includes/function_lib.php");
//intercept the chosen id from the products page:
$chosen_id=$_POST["view_id"];
//execute a function from that include, using the id passed
$result = run_my_query("SELECT * FROM stylus_table WHERE id=$chosen_id");

            ///display info///
            //this says "perform the actions in {} to each item in the array (each item being a row retrieved by 		            the SELECT *).
            //Each row is itself an assoc array, so one field's value can be referred to as $row['columnname']
            while ($row = mysql_fetch_array($result)){
				//store the description in a var
				$p_descr = $row['descr'];
                //store the product name in a var
                $p_name = $row['product_name'];
                //store the price in a var
                $p_price = $row['price'];
                //store the large image in a var
                $p_imgLarge = $row['img_large']; 
                //store the id in a var
                $p_id = $row['id'];
				//links to paypal with button code
				$paypal = $row['paypal'];
			
	 ?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!--displays the name of the product from the database based on the id of the product-->
<title>Stylus Planet-Product:<?php echo $p_name ?></title>
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
     	<h2>Product: <?php echo $p_name ?></h2>
     </div>
     <div><p id="important">*This website was created for portfolio purposes only. The identity and branding for this project is completely fictional and is not affiliated with any real company and you cannot order any products. As a student, this project is intended to display skills involved in the creation of the website. This project is in no way intended for commercial gain.</p></div> 
     <section>
    	<div class="subnav">
     	<a href="index.php" class="subhead">Home&nbsp;> </a>
        <a href="products.php" class="subhead">&nbsp; Products&nbsp;></a>
        <!--displays the name of the product from the database based on the id of the product-->
        <p class="subhead">&nbsp; <?php echo $p_name ?></p>
        </div>
    	<div class="d_display"> 
        	<!--<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="--><?php /*?><?php /* echo $paypal ?>"><?php */?>
               <!-- <input type="hidden" name="item_name" value="<?php /*?><?php echo $p_name ?>"><?php */?>-->
                           
               <div class="item_detail">
               <!--displays the name of the product from the database based on the id of the product-->
               <h2 class="d_name"><?php echo $p_name ?></p>
               <!--displays the price of the product from the database based on the id of the product-->
                <p class="d_price">$<?php echo $p_price ?></p>
                <!--displays the description of the product from the database based on the id of the product-->
                <p class="d_descr"><?php echo $p_descr ?></p>
                <!--displays the large image of the product from the database based on the id of the product-->    
                <p><img src="img/large_image/<?php echo $p_imgLarge ?>" alt="Product Image" class="d_img"/><p>
                        
               </div>
               <!--<input type="submit" value="Add to Cart" name="submit" >
              
            </form>-->   
                
            <?php }//closes the while loop
            ?>
		</div>
        <div id="order">
       <p id="order_text">Please call our toll free number for more information about our products or to place an order at <span id="order_number">1-800-1ST-YLUS</span></p>
       </div>
	</section>

    <footer>
    <p>&copy; 2012 Eric Gurinowitsch</p>
    </footer>
    </div>
    
</body>
</html>