  <?php
  
$db_host = 'ec2-54-235-76-139.compute-1.amazonaws.com';


$db_port=5432;


$db_username = 'jrpjshwnodylga';


$db_password = 'uc9RYJi6HubC8h03v2VsIrsBUM';


$db_name = 'd6s4nh527enkjs';



$link= pg_connect("host=$db_host port=$db_port dbname=$db_name user=$db_username password=$db_password")
or die('Could not connect: ' . pg_last_error());

$path = $_SERVER['REQUEST_URI'];
$filename = substr(strrchr($path, "/"), 1);
	
$query = "UPDATE services SET visit = visit + 1  where page_url='$filename'";


pg_query($query)
or die(pg_last_error());


pg_close($link);

    if(empty($_COOKIE['history'])){
    $url = array();    
    }
    else{
      $url =  unserialize($_COOKIE['history']);
    }
    
    array_push($url,"$_SERVER[REQUEST_URI]");
    setcookie('history', serialize($url));
    
    ?>