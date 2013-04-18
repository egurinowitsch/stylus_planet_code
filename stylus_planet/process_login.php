<?php
//begin validation: if user left fields blank, send them back to login//

//end validation//

//store the uname and upass that the user typed in on the login page
$theirname="";
 if(isset($_POST['username'])) {
      $_POST['username'] = trim($_POST['username']);
     if(preg_match('/^[a-zA-Z0-9^$.*+\[\]{,}]{1,24}$/u', $_POST['username'])){
         $theirname = $_POST['username'];
     }
 }
 $theirpass="";
 if(isset($_POST['password'])) {
      $_POST['password'] = trim($_POST['password']);
     if(preg_match('/^[a-zA-Z0-9^$.*+\[\]{,}]{1,24}$/u', $_POST['password'])){
         $theirpass = $_POST['password'];
     }
 }

//run a query to see if there's anyone in the user table by that info:
include("includes/function_lib.php");
$result = run_my_query("SELECT * FROM user_table WHERE username=\"$theirname\" AND password=\"$theirpass\"");
//if such a user was found...
if ($row = mysql_fetch_array($result)){
	//...do beneficial things
	//echo"Valid";
	//access a session:
	session_start();
	//look at the Unique Identifier we're assigned as a session starts
	//echo session_id();
	//store their username
	$_SESSION['user_name']=$row['username'];
	//store their privilege level
	$_SESSION['user_priv']=$row['privilege'];
	//sends them to another page
	header('Location:products.php');
//...otherwise...
}else{
	//make them try logging in again
	//uses javascript popup alert box to display error and redirects to products.php
	print '<script type="text/javascript">'; 
	print 'alert("PLEASE TRY AGAIN. THE USERNAME OR PASSWORD IS INCORRECT.")'; 
	print '</script>';
	print '<script type="text/javascript">';
	print"window.location.href = 'products.php'";
	print '</script>';  

}

?>