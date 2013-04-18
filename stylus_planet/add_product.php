<?php
//redirect user away if they haven't logged in 
session_start();
//checks to see if user is logged in to use add button
//uses javascript popup alert box to display error and redirects to products.php
if(!isset($_SESSION['user_priv'])){
	print '<script type="text/javascript">'; 
	print 'alert("MUST BE LOGGED IN TO ADD OR DELETE PRODUCTS")'; 
	print '</script>';
	print '<script type="text/javascript">';
	print"window.location.href = 'products.php'";
	print '</script>'; 
}
//read in the db conn code from a separate file:
include("includes/function_lib.php");
//execute a function from that include
$result = run_my_query("SELECT * FROM stylus_table");

?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Stylus Planet-Add Product</title>
<!--[if lt IE 9]>
     <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/slide.css" media="screen">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<script src="js/validation.js"></script>
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
     <div class="header">
     	<h2>Add Product</h2>
     </div>
     <div><p id="important">*This website was created for portfolio purposes only. The identity and branding for this project is completely fictional and is not affiliated with any real company and you cannot order any products. As a student, this project is intended to display skills involved in the creation of the website. This project is in no way intended for commercial gain.</p></div> 
     <section>
     <div class="subnav_add">
     	<a href="index.php" class="subhead">Home&nbsp;> </a>
        <a href="products.php" class="subhead">&nbsp; Products&nbsp;></a>
        <a href="add_product.php" class="subhead">&nbsp; Add Product</a>
        </div>
     <div id="add_text">
     <p id="add_text2">Administrator(s), you are currently on the Add Product page. All fields are required and images should be sized to match the specifications below. Thumbnail images should be 150px by 150px and large images should be 400px-width by 300px-height and the file extensions should be .jpg. For technical assistance call our IT department at <span id="order_number">1-800-555-TECH.</span>
     </p>
     </div>
     <form action="process_add.php" method="post" enctype="multipart/form-data" onSubmit="return checkform();"
     id="add_form">
     	<p>Name:</p><p> <input type="text" name="newname" class="form_add" maxlength="15" ><span class="error"></span></p>
        
        <p>Price:</p><p><input type="text" pattern="\-?\d+(\.\d{0,})?" required title="Insert only numbers Ex. 9999.99" maxlength="7"name="newprice" class="form_add" ><span class="error"></span></p>
        <p>Short Description:</p><p> <textarea name="newshort" rows="3" class="form_add" ></textarea><span class="error"></span></p>
        <p>Long Description:</p><p> <textarea name="newlong" rows="7" class="form_add" ></textarea><span class="error"></span></p>
        <p>Thumbnail Image:</p>
        <p>(150 x 150 jpg)</p><p>
         <input type="file" name="newthumb" class="form_add"><span class="error"></span></p>
        <p>Large Image:</p> 
        <p>(400 x 300 jpg)</p><p>
        <input type="file" name="newlarge" class="form_add"><span class="error"></span></p>
        <input type="submit" id="submit_btn">
        <p class="required">*All Fields Required</p>
     </form>
     </section>
     <footer>
    <p>&copy; 2012 Eric Gurinowitsch</p>
    </footer>
    </div>
 </body>
</html>    
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     