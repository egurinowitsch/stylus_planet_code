<?php 

	$f_name = $_POST['f_name'];
	$l_name = $_POST['l_name'];
	$c_name = $_POST['c_name'];
	$area_code = $_POST['area_code'];
	$digits1 = $_POST['digits1'];
	$digits2 = $_POST['digits2'];
	$email  = $_POST['email'];
	$message = $_POST['message'];
	
	//if first name value was not all letters...
	if(is_numeric($f_name)){		
	//send them back to the form, passing an error message
	header('Location:contact_us.php?error=not_letters');
	exit();//stop executing code on this page
	}
	//if first name textfield is left blank...
	if($f_name == ''){		
	//send them back to the form, passing an error message
	header('Location:contact_us.php?error=no_name');
	exit();//stop executing code on this page
	}
	//if last name value was not all letters...
	if(is_numeric($l_name)){		
	//send them back to the form, passing an error message
	header('Location:contact_us.php?error=not_letters');
	exit();//stop executing code on this page
	}
	//if last name textfield is left blank...
	if($l_name == ''){		
	//send them back to the form, passing an error message
	header('Location:contact_us.php?error=no_name2');
	exit();//stop executing code on this page
	}
	
	/*intercept text field data from act4.php, and store it in a var:*/
	$email = htmlspecialchars($_POST['email']);
	/*checks to make sure all the characters for a valid email are entered*/
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
    {
	//send them back to the form, passing an error message	
    header('Location:contact_us.php?error=no_email');
	exit();//stop executing code on this page
    }
	
	$formcontent="From: $f_name $l_name \n Company: $c_name \n Telephone: $area_code - $digits1 - $digits2 \n Message: $message";
	$recipient = "egurinowitsch@yahoo.com";
	$subject = "Contact Form";
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	
	print '<script type="text/javascript">'; 
	print 'alert("Thank you! Your email has been sent.")'; 
	print '</script>';  
/*echo "Thank You!" . " -" . "<a href='contact.php' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
*/
print '<script type="text/javascript">document.location.href = "contact_us.php";</script>';


?>
 