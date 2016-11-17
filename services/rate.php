<?php

$db_host = 'ec2-54-235-76-139.compute-1.amazonaws.com';


$db_port=5432;


$db_username = 'jrpjshwnodylga';


$db_password = 'uc9RYJi6HubC8h03v2VsIrsBUM';


$db_name = 'd6s4nh527enkjs';



$link= pg_connect("host=$db_host port=$db_port dbname=$db_name user=$db_username password=$db_password")
or die('Could not connect: ' . pg_last_error());



if($_POST['action'] == "rate") {
	
	$rating=(float)$_POST["rating"];
	
	$url=$_POST["id"];
	
	
	$query = "UPDATE services SET total_ratings = total_ratings +$rating, no_ratings=no_ratings+1  where url='$url'";
	
	
	pg_query($query)
	or die(pg_last_error());
	
	
	pg_close($link);
	
	echo "ok";
	
	
}


?>