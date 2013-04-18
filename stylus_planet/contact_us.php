<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/php-contact-form-tutorial.html
*/
require_once("./include/fgcontactform.php");

$formproc = new FGContactForm();


//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('egurinowitsch@yahoo.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');


if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
       	print '<script type="text/javascript">'; 
		print 'alert("Thank you! Your email has been sent.")'; 
		print '</script>';  
		print '<script type="text/javascript">document.location.href = "contact_us.php";</script>';
   }
}

?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!--displays the name of the product from the database based on the id of the product-->
<title>Stylus Planet-Contact Us</title>
<!--[if lt IE 9]>
     <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/slide.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/contact.css">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    
    <!-- PNG FIX for IE6 -->
    <!-- http://24ways.org/2007/supersleight-transparent-png-in-ie6 -->
    <!--[if lte IE 6]>
        <script type="text/javascript" src="login_panel/js/pngfix/supersleight-min.js"></script>
    <![endif]-->
    <script src="js/gen_validatorv31.js"></script>
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
     	<h2>Contact Us</h2>
     </div>
     <div><p id="important3">*This website was created for portfolio purposes only. The identity and branding for this project is completely fictional and is not affiliated with any real company and you cannot order any products. As a student, this project is intended to display skills involved in the creation of the website. This project is in no way intended for commercial gain.</p></div> 
     <section id="contact_form">
     <img src="img/women_contact.png" alt="women on phone" id="contact_image"/>
    <div id="form">
   
    	<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >


<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<div class='short_explanation'><span class="asterik">*</span> Required Fields</div>

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
<div class='container2'>
    <label for='name' >Your Full Name<span class="asterik">*</span>: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='contactus_name_errorloc' class='error'></span>
</div>
<div class='container2'>
    <label for='name' >Company Name: </label><br/>
    <input type='text' name='company_name' id='name' value='<?php echo $formproc->SafeDisplay('company_name') ?>' maxlength="50" /><br/>   
</div>
<div class='container2'>
	<label for='name' >Telephone Number: </label><br/>
	 <input type="text" name="area_code" id="area_code" value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="3"/>
               - <input type="text" name="digits1" id="digits1" value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="3"/> -
                <input type="text" name="digits2" id="digits2" value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="4"/>
</div>
<div class='container2'>
    <label for='email' >Email Address<span class="asterik">*</span>:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>

<div class='container2'>
    <label for='message' >Message<span class="asterik">*</span>:</label><br/>
    <textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
     <span id='contactus_message_errorloc' class='error'></span>
</div>


<div class='container2'>
    <input type='submit' id='submit' name='Submit' value='Submit' />
</div>

</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

      </div>  
    </section>       

    <footer>
    <p>&copy; 2012 Eric Gurinowitsch</p>
    </footer>
    </div>
    <script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");
	
	frmvalidator.addValidation("message","req","Please provide your message");

// ]]>
</script>
</body>
</html>