<?php
function run_my_query($query){
	//connect to server. In real practice, we need to say mysql_connect(name of server, username, password)
	$handle = mysql_connect('db445706707.db.1and1.com','dbo445706707','mongo123');
	if($handle==false){
		//if the above line misfired, stop running scripts and show a custom error
		die("Bad Server Connection".mysql_error());	
	} 
	//connect to our DB
	$db = mysql_select_db('db445706707')
	or die("DB problem - ".mysql_error()); 
	
	//run the query, storing the results in an array, which we'll display in the BODY
	$result = mysql_query($query)
	or die("Query Problem - ".mysql_error());
	//close your server connection
	mysql_close($handle);
	//send back the info to where the function was called
	return $result;
}//closes function
?>