<?php $mailcatcher = "http://$_SERVER[HTTP_HOST]:1080" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LAP Docker Dashboard</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="index/justified-nav.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted">LAP Docker Dashboard</h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="#">Dashboard</a></li>
            <li><a href="adminer.php">Adminer</a></li>
            <li><a href="<?php print $mailcatcher; ?>">Mailcatcher</a></li>
            <li><a href="http://usda-ocio-eas.github.io/lap-docker/news/">News</a></li>
            <li><a href="http://usda-ocio-eas.github.io/lap-docker/contrib/">Contrib</a></li>
            <li><a href="http://usda-ocio-eas.github.io/lap-docker/docs/">Docs</a></li>
          </ul>
        </nav>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Start Development Now!</h1>
        <p class="lead">LAP Docker let's your team begin working without wait.</p>
        <p><a class="btn btn-lg btn-success" href="http://usda-ocio-eas.github.io/lap-docker/docs/" role="button">Get started today</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Dashboard Usage!</h2>
          <p class="text-danger">The dashboard links are set to use default ports.</p>
          <p>Mailcatcher, Adminer, and other dashboard links expect the default quickstart port mapping configurations. Using non-standard ports may direct to other Virtual Machines or not respond. </p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Support</h2>
          <p>If you encounter a bug with the LAP Docker software, we want to hear from you! Send us a note and we'll be sure to fix or help you resolve the issue. </p>
          <p><a class="btn btn-primary" href="mailto:rone.williams@ocio.usda.gov" role="button">Contact &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <h2>Contribute</h2>
          <p>LAP Docker is an open source software dedicated to providing rapid web application development, testing, and debugging. If you'd like to contribute to LAP Docker, get it touch.</p>
          <p><a class="btn btn-primary" href="mailto:rone.williams@ocio.usda.gov" role="button">Contribute &raquo;</a></p>
        </div>
      </div>

      <!-- Site footer -->
      <footer class="footer">
        <p>LAP Docker is maintained by the USDA OCIO EAS Web Tech Team.</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>