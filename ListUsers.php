<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Website">
  <meta name="author" content="Ashutosh Singh">
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
 
</head>

<body id="page-top" class="index">

    <div>
    <table class="table table-bordered table-striped table-hover">
    <?php

    function get_data($url) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}

   $url = "https://codewarriors.herokuapp.com/allusers.php";

    $result=get_data($url);
    $rows=json_decode($result);

    echo "<thead><tr><th>#</th><th>Name</th><th>Email</th></tr></thead>";
    echo "<tbody>";      
    for($i=0;$i<count($rows);$i++){
            
            printf("<tr>");
            printf("<td>%s</td><td class='extrapadding'> %s</td><td> %s </td>", $i+1,$rows[$i][0]. " ".$rows[$i][1],$rows[$i][2]);
            printf("</tr>");            
        }
        echo("</tbody>")

    ?>
    </table>
    </div>
</body>
</html>