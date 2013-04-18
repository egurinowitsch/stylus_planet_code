<?php
////Be sure and validate what user typed in 

//store the product name, model #, retailer, comments and username that the user typed in the form
$user_productName = $_POST['newproductName'];
$user_model = $_POST['newmodel'];
$user_retailer = $_POST['newretailer'];
$user_comments = $_POST['newcomments'];
$user_customerName = $_POST['newname'];

//make a var that refers to the path to the XML
$fileDir = "xml/";
//create a new blank document in PHP's 'mind'
$doc = new DOMDocument();

//create the 'review' root element, floating in the doc
$root = $doc->createElement('review');
//attach the review tag as the root of the XML hierarchy
$doc->appendChild($root);

////////////////////ProductName///////////////////////
//to add a child element for productName, first create it, floating in the doc
$pname = $doc->createElement('productName');
//attach that element as a child of the review tag
$root->appendChild($pname);
//make a text node to contain what the user typed as their productName
$pntext = $doc->createTextNode($user_productName);
//attach that text node as a child of the productName tag
$pname->appendChild($pntext);

//////////////////////Model////////////////////////////
//to add a child element for model, first create it, floating in the doc
$model = $doc->createElement('date');
//attach that element as a child of the review tag
$root->appendChild($model);
//make a text node to contain what the user typed as their model
$mtext = $doc->createTextNode($user_model);
//attach that text node as a child of the model tag
$model->appendChild($mtext);

//////////////////////Retailer////////////////////////////
//to add a child element for retailer, first create it, floating in the doc
$retailer = $doc->createElement('retailer');
//attach that element as a child of the review tag
$root->appendChild($retailer);
//make a text node to contain what the user typed as their retailer
$rtext = $doc->createTextNode($user_retailer);
//attach that text node as a child of the retailer tag
$retailer->appendChild($rtext);

//////////////////////Comments////////////////////////////
//to add a child element for comments, first create it, floating in the doc
$comments = $doc->createElement('comments');
//attach that element as a child of the review tag
$root->appendChild($comments);
//make a text node to contain what the user typed as their comments
$ctext = $doc->createTextNode($user_comments);
//attach that text node as a child of the comments tag
$comments->appendChild($ctext);

//////////////////////Customer Name////////////////////////////
//to add a child element for customerName, first create it, floating in the doc
$customerName = $doc->createElement('customerName');
//attach that element as a child of the review tag
$root->appendChild($customerName);
//make a text node to contain what the user typed as their customerName
$cntext = $doc->createTextNode($user_customerName);
//attach that text node as a child of the customerName tag
$customerName->appendChild($cntext);

//////////////////ID/////////////////////////
//make an id value that's the timestamp of right now(when user submits)
$id = date('YmdHis');
//use that timestamp as the id attribute of the article tag
$root->setAttribute('id',$id);

//build a filename for the doc, concatenating the path, the word 'review', the timestamp, and the xml extension
$filename = $fileDir.'review'.$id.'.xml';
//save the doc as a physical file in the right folder
$doc->save($filename);

//redirect back to View All Reviews
header("Location:view_all_reviews.php");
?>