
        <?php
    
    
        $db_host = 'ec2-54-235-76-139.compute-1.amazonaws.com';
        $db_port=5432;
        $db_username = 'jrpjshwnodylga';
        $db_password = 'uc9RYJi6HubC8h03v2VsIrsBUM';
        $db_name = 'd6s4nh527enkjs';
        /*
        $link = mysql_connect( $db_host, $db_username, $db_password) or die(mysql_error());
        */

        
    $link= pg_connect("host=$db_host port=$db_port dbname=$db_name user=$db_username password=$db_password")
    or die('Could not connect: ' . pg_last_error());
    

      //  mysql_select_db($db_name);
        $searchquery="SELECT * FROM users;";
        $sqlsearch = pg_query($searchquery);
        $resultcount = pg_numrows($sqlsearch);
        $arr=array();
        $i=0;
        if (!$sqlsearch) {
            die('Could not query:' . pg_last_error());
        }
       else{
        while ($row = pg_fetch_array($sqlsearch,null, PGSQL_ASSOC)) {
                $arr[$i]=array($row["firstname"], $row["lastname"], $row["email"]); 
                $i++;
        }
        
       }

       //echo $arr;
        echo json_encode($arr);

        //pg_free_result($sqlsearch);
        
        pg_close($link);
                
    ?>


