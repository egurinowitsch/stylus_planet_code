<?php
//read in the db conn code from a separate file:
include("includes/function_lib.php");
//var
//make var to store the products name that is typed on add_product.php:
$new_name= $_POST['newname'];
//make var to store the products price that is typed on add_product.php:
$new_price= $_POST['newprice'];
//make var to store the products short description that is typed on add_product.php:
$new_short= $_POST['newshort'];
//make var to store the products long description that is typed on add_product.php:
$new_long= $_POST['newlong'];

//id
//make a var to store the new id of the new record:
$new_id=0;
//retrieve the highest PK ID number from the table
$result=run_my_query("SELECT * FROM stylus_table ORDER BY id DESC LIMIT 1");
while($row=mysql_fetch_array($result)){
	$new_id = $row['id'];
}
//add one to the highest id being used:
$new_id++;

//images
//make a name for the uploaded image,concatenate an 'i' then the PK ID
$thumb_name='i'.$new_id.$_FILES['newthumb']['name'];
//move the uploaded JPG to a location and filename of our choice
move_uploaded_file($_FILES['newthumb']['tmp_name'], "img/thumbs/$thumb_name");
//make a name for the uploaded image,concatenate an 'i' then the PK ID
$large_name='i'.$new_id.$_FILES['newlarge']['name'];
//move the uploaded JPG to a location and filename of our choice
move_uploaded_file($_FILES['newlarge']['tmp_name'], "img/large_image/$large_name");

//
run_my_query("INSERT INTO stylus_table
	(id, product_name, price, descr, small_descr, img_thumb, img_large)
	VALUES
	($new_id, \"$new_name\", $new_price, \"$new_long\", \"$new_short\", \"$thumb_name\", \"$large_name\")	
");

//redirect user to main product page
//no html for header(Location); or it will not work on server
header("Location:products.php");

?>