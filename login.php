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
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Employee Login</h2>
          <h3 class="section-subheading text-muted">Please enter details below</h3>
        </div>
      </div>

      <form class="form" action="access.php" role="form" method="post">

        <!--<input type="text" name="something" value="<?= ($_POST['email']) ?>" />-->
        <div class="form-group">
          <label for="username1">Username</label>
          <input type="text" class="form-control" id="username1" name="username1" placeholder="Enter username" autofocus>
        </div>
        <div class="form-group">
          <label for="password1">Password</label>
          <input type="password" class="form-control" id="password1" name="password1" placeholder="Enter password">
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

      </form>
    </div>
  </section>

</body>

</html>