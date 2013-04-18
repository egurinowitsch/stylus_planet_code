<?php
//read in the db conn code from a separate file:
include("includes/function_lib.php");
//intercept the chosen id from the products page:
$chosen_id=$_POST["view_id"];
//execute a function from that include, using the id passed
run_my_query("DELETE FROM stylus_table WHERE id=$chosen_id");
//redirect user to main product page
header("Location:products.php");
//no html for header(Location); or it will not work on server
?>