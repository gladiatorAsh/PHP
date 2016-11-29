<?php
extract($_POST);
extract($_GET);
echo $prodid;
echo $visits;
        $db_host = 'ec2-54-235-76-139.compute-1.amazonaws.com';
        $db_port=5432;
        $db_username = 'jrpjshwnodylga';
        $db_password = 'uc9RYJi6HubC8h03v2VsIrsBUM';
        $db_name = 'd6s4nh527enkjs';

    $link= pg_connect("host=$db_host port=$db_port dbname=$db_name user=$db_username password=$db_password")
    or die('Could not connect: ' . pg_last_error());

$query="update services set visit=".$visits." where id=".$prodid;
echo $query;
$answer=pg_query($connection,$query);
pg_close($link);
?>