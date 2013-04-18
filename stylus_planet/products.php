<?php
//to be able to access session variables below, start with
session_start();
//retrieve and store information for display...
//first step: source your SQL file
//This code does not access it form the .sql file...source it!

//read in the db conn code from a separate file:
include("includes/function_lib.php");

//set up a default column to sort by
$sortcol="id";
//if the page has been refreshed by clicking one of the sort links below,
//the order "ordercol" has been passed through the $_GET array
if(isset($_GET['ordercol'])){
	//use the column name being passed as the col to sort by in the ORDER BY clause coming up
	$sortcol=$_GET['ordercol'];	
}
//execute a function from that include
$result = run_my_query("SELECT * FROM stylus_table ORDER by $sortcol");
?>
<!doctype html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Stylus Planet-Products</title>
<!--[if lt IE 9]>
     <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
	<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/slide.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/qunit.css" media="screen" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    
    <!-- PNG FIX for IE6 -->
    <!-- http://24ways.org/2007/supersleight-transparent-png-in-ie6 -->
    <!--[if lte IE 6]>
        <script type="text/javascript" src="login_panel/js/pngfix/supersleight-min.js"></script>
    <![endif]-->
    
    <script src="js/slide.js" type="text/javascript"></script>
    <script src="js/mootools-1.3.2-min.js"></script>
	<script src="js/simpleCart.js"></script>
    <script>
		simpleCart({
			checkout: {
				type: "SendForm" ,
				url: "http:eric@ericgdesign.com",
				method: "GET" ,
				success: "products.php" ,
				cancel: "products.php"
			}
		});
	</script>
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
     <div class="header">
     	<h2>Products</h2>
     </div>
     <div><p id="important">*This website was created for portfolio purposes only. The identity and branding for this project is completely fictional and is not affiliated with any real company and you cannot order any products. As a student, this project is intended to display skills involved in the creation of the website. This project is in no way intended for commercial gain.</p></div> 
     <section>
     	<img id="product_banner" src="img/products.jpg" alt="stylus pen, pen tablet, interactive display"/>
     	
     	<p id="welcome">
        &nbsp; &nbsp; &nbsp; Welcome to the Stylus Planet online catalog. Here at Stylus Planet we provide consumers with top of the line digital tablets, styluses, and interactive pen displays at reasonable prices. All of our products come with a 30 day free trial. Try our products out and if you are unhappy in any way we will give you a full refund no questions asked. Thank you for shopping at Stylus Planet.
        </p>
       <div class="addProduct">
        	<a href="products.php?ordercol=product_name" class="add">Sort by name</a>
			<a href="products.php?ordercol=price" class="add">Sort by price</a>
       
       <!--checks users privilege from login and database and displays add button-->
        <?php if(isset($_SESSION['user_priv'])){
			if($_SESSION['user_priv']=="admin"){
		?>
        <a href="add_product.php" class="add2">Add Product</a>
         <?php }
	}?>
        </div>
    	<div class="display">
        <div class="simpleCart_shelfItem">
    		<?php
            ///display info///
            //this says "perform the actions in {} to each item in the array (each item being a row retrieved by the SELECT *).
            //Each row is itself an assoc array, so one field's value can be referred to as $row['columnname']
            while ($row = mysql_fetch_array($result)){
				//store the small description in a var
				$p_smallDesc = $row['small_descr'];
                //store the product name in a var
                $p_name = $row['product_name'];
                //store the price in a var
                $p_price = $row['price'];
                //store the thumbnail image in a var
                $p_thumb = $row['img_thumb']; 
                //store the id in a var
                $p_id = $row['id']; ?>
                
                <!--HTML-->
                
                <div class="items">
                <form action="product_details.php" method="post"><!--value of form is the id's from the database-->
                	<input type="hidden" name="view_id" value="<?php echo $p_id ?>" >
                <!--displays thumbnail images from database -->
                
                <p><input type="image" class="thumbs" src="img/thumbs/<?php echo $p_thumb ?>" ></p>
        <div class="ribbon-wrapper">
			<div class="ribbon-front">
            <!--displays names of products from database -->
			<input type="submit" id="name" value="<?php echo $p_name ?>">
			</div>
            <div class="ribbon-edge-topleft"></div>
            <div class="ribbon-edge-topright"></div>
            <div class="ribbon-edge-bottomleft"></div>
            <div class="ribbon-edge-bottomright"></div>
            <div class="ribbon-back-left"></div>
            <div class="ribbon-back-right"></div>
        </div>   
        		<!--displays prices of products from database -->             
                <h4 class="price">$<?php echo $p_price ?></h4>
                <!--displays a small description from database -->
                <p class="sm_desc"><?php echo $p_smallDesc ?></p>
                <input type="submit" id="readMore" value="Read More >>">
               </form>
               
              
               <div id="delete_wrapper">
               <!--checks users privilege from login and database and displays delete buttons-->
                <?php if(isset($_SESSION['user_priv'])){
			if($_SESSION['user_priv']=="admin"){
		?>
                <form action="process_delete.php" method="post">
                <!--value of form is the id's from the database-->
                <input type="hidden" name="view_id" value="<?php echo $p_id ?>" >
                	<input type="submit" value="Delete" id="delete">
                </form>
                 <?php }
	}?>
    
                </div>
         </div> 
            <?php }//closes the while loop
            ?>
            </div>
		</div>
       <div id="order">
       <p id="order_text">Please call our toll free number for more information about our products or to place an order at <span id="order_number">1-800-1ST-YLUS</span></p>
       </div>
	</section>
   
    <footer>
    <p>&copy; 2012 Eric Gurinowitsch</p>
    </footer>
</div>    
    
              
</div>			               
</body>
</html>			
			
            
       

    


