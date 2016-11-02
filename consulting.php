<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Website">
  <meta name="author" content="Ashutosh Singh">
  <title>Consulting</title>
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
  <link href="css/custom.css" rel="stylesheet">
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
            <a class="" href="index.php">Home</a>
          </li>
          <li>
            <a class="" href="customwebsites.php">Website</a>
          </li>
          <li>
            <a class="" href="consulting.php">Consulting</a>
          </li>
          <li>
            <a class="" href="reporting.php">Reporting</a>
          </li>
          <li>
            <a class="" href="seo.php">SEO</a>
          </li>
          <li>
            <a class="" href="applicationdev.php">App</a>
          </li>
          <li>
            <a class="" href="support.php">Support</a>
          </li>
          <li>
            <a class="" href="mobiledev.php">Mobile</a>
          </li>
          <li>
            <a class="" href="bpo.php">BPO</a>
          </li>
          <li>
            <a class="" href="training.php">Training</a>
          </li>
          <li>
            <a class="" href="webgamedev.php">Webgame</a>
          </li>
          <li>
            <a class="" href="pcgamedev.php">PCGame</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <section>
    <?php
  
    if(empty($_COOKIE['history'])){
    $url = array();    
    }else{
      $url =  unserialize($_COOKIE['history']);
    }
    
    array_push($url,"$_SERVER[REQUEST_URI]");
    setcookie('history', serialize($url));
    
    ?>

      <div class="container">
        <div class="row tpmg45">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">IT Software Consulting Services</h2>
            <h3 class="section-subheading text-muted">Customer needs are kept before technical challenges</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-md-5 col-sm-6 portfolio-item">
            <img src="img/portfolio/treehouse.png" class="img-responsive" alt="project1">
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">

            <h4> Solution Architecture and Design</h4>
            <p> We provide Database Design, Class and Interface Design, Consulting in selection of Suitable Framework and Technology, Inter-application Communication Strategies, Open Source System, General System Architecture, and tools to solve problems.
              Our System Audit helps client’s business to identify design flaws through suggestion of remedies.
            </p>
            <h4>Business Process Modelling</h4>
            <p>Our End-to-End Models ensures enabling of End-to-End Traceability Matrices. Models are entirely compliant with UML 2.5 Specifications.
            </p>
          </div>
          <a href="reporting.php">Next >>>></a>

        </div>
      </div>
  </section>


</body>

</html>