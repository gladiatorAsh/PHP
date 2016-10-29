<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Website">
  <meta name="author" content="Ashutosh Singh">
  <title>Code Warriors Login</title>
  <!-- Bootstrap Core CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom Fonts -->
  <link href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <!-- Theme CSS -->
  <link href="css/agency.min.css" rel="stylesheet">
  <link href="css/login.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
  <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand page-scroll" href="#page-top">Code Warriors</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="hidden">
            <a href="#page-top"></a>
          </li>
          <li>
            <a class="page-scroll" href="index.php">Home</a>
          </li>
          <li>
            <a class="page-scroll" href="#services">Services</a>
          </li>
          <li>
            <a class="page-scroll" href="#portfolio">Portfolio</a>
          </li>
          <li>
            <a class="page-scroll" href="#about">About</a>
          </li>
          <li>
            <a class="page-scroll" href="#team">Team</a>
          </li>
          <li>
            <a class="page-scroll" href="#news">News</a>
          </li>
          <li>
            <a class="page-scroll" href="#contact">Contact</a>
          </li>
          <li>
            <a class="page-scroll" href="login.php">Login</a>
          </li>
          <li>
            <a class="" href="user.html">User Section</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>

  <section>
    <div class="container">


      <form action="" method="post">
        <p>
          Search :
          <input type="text" name="searchTerm" />
          <input type="submit" name="btnSubmit" value="Submit" />
        </p>

        <?php
    
    if(isset($_POST['btnSubmit'])){ //check if form was submitted
        $input = $_POST['searchTerm']; //get input text
        echo "You entered: ".$input;
        
        
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
        $searchquery="SELECT * FROM users WHERE '$input' in (firstname, lastname, email,homephone,cellphone);";
        $sqlsearch = pg_query($searchquery);
        $resultcount = pg_numrows($sqlsearch);
        
        if (!$sqlsearch) {
            die('Could not query:' . pg_last_error());
        }
        
        printf("<p>Your search returned %s result(s) : </p>",$resultcount);
        
        printf("<table>");
                
        while ($row = pg_fetch_array($sqlsearch,null, PGSQL_ASSOC)) {
            
            
            printf("<tr>");
            printf("<td class='extrapadding'><b> Name: </b> %s <b> Email: </b> %s  <b>Cellphone:</b> %s <b>Homephone:</b> %s </td>", $row["firstname"]." ".$row["lastname"],$row["email"],$row["cellphone"],$row["homephone"]);
            printf("</tr>");
            printf("<tr>");
            printf("<td class='extrapadding'><b>Address:</b> %s</td>", $row["homeaddress"]);
            
            printf("</tr>");
            
        }
        
        printf("</table>");
        
        pg_free_result($sqlsearch);
        
        pg_close($link);
        
    }
        
    ?>

      </form>
    </div>
  </section>


</body>

</html>