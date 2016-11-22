
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
        $searchquery="select COALESCE(total_rating / NULLIF(num_rating,0), 0) as avg_rating ,* from services order by COALESCE(total_rating / NULLIF(num_rating,0), 0) desc LIMIT 4;";
        $sqlsearch = pg_query($searchquery);
        $resultcount = pg_numrows($sqlsearch);
        $arr=array();
        $i=0;
        if (!$sqlsearch) {
            die('Could not query:' . pg_last_error());
        }
       else{
        while ($row = pg_fetch_array($sqlsearch,null, PGSQL_ASSOC)) {
              
                //$arr[$i]=array($row["page_url"], $row["title"], $row["subtitle"],$row["image_url"],$row["description"],$row["avg_rating"]); 
                $arr[$i]=array($row["id"], $row["title"],$row["page_url"],$row["image_url"],$row["description"],$row["total_rating"],$row["num_rating"],$row["visit"],$row["costs"],$row["avg_rating"]);
                $i++;
        }
        
       }

       //echo $arr;
        echo json_encode($arr);

        //pg_free_result($sqlsearch);
        
        pg_close($link);
                
    ?>


