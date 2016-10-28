<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Website">
  <meta name="author" content="Ashutosh Singh">
  <title>Code Warriors</title>
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
  <link href="css/custom.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <p>User successfully saved</p>
  <table>

    <?php
    
    
    // This function will run within each post array including multi-dimensional arrays
    function ExtendedAddslash(&$params)
    {
        foreach ($params as &$var) {
            // check if $var is an array. If yes, it will start another ExtendedAddslash() function to loop to each key inside.
            is_array($var) ? ExtendedAddslash($var) : $var=addslashes($var);
        }
    }
    
    
    // Initialize ExtendedAddslash() function for every $_POST variable
    ExtendedAddslash($_POST);
    
    // define variables and set to empty values
    $fname =$lname = $email = $password =$homephone = $address = $cellphone = "";
    
    /*
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    $email = test_input($_POST["email"]);
    $homephone = test_input($_POST["homephone"]);
    $address = test_input($_POST["address"]);
    $cellphone = test_input($_POST["cellphone"]);
    }
    */
    
    foreach ($_POST as $key => $value) {
        echo "<tr>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }
    
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $homephone = $_POST['homephone'];
        $address = $_POST['address'];
        $cellphone =$_POST['cellphone'];
    }
    
    
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    /*
    $db_host = 'localhost:3306';
    $db_username = 'root';
    $db_password = 'admin';
    $db_name = 'CMPE273';
  $link=  mysql_connect( $db_host, $db_username, $db_password) or die(mysql_error());
    mysql_select_db($db_name);
  
    */

    $link= pg_connect("host=localhost:5433 dbname=CMPE272 user=postgres password=admin")
    or die('Could not connect: ' . pg_last_error());
    
    
    $query = "INSERT INTO users
    (
    firstname,
    lastname,
    email,
    password,
    homeaddress,
    homephone,
    cellphone)
    VALUES
    (
    '$fname',
    '$lname',
    '$email',
    '$password',
    '$address',
    '$homephone',
    '$cellphone'
    );
    ";
    
    pg_query($query)
    or die(pg_last_error());
    
    pg_close($link);


    ?>
  </table>
</body>

</html>