<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- page specific -->
    <title>IP Checker | Find your IP!</title>
    <meta name="description" content="Basic IP address lookup sample code"/>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php
  require '../includes/functions.php';
  $remote_ip = $_SERVER['REMOTE_ADDR'];
  $forwarded_ip = forwarded_ip();
  ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
          <h1 class="text-uppercase">IP Checker</h1>
          <p class="lead">Request came from<br /></p>
            <h3><?php echo $remote_ip; ?></h3>
          <?php if($forwarded_ip != 'None') { ?>
            <p class="lead">The request was forwarded for<br /></p>
              <h3><?php echo $forwarded_ip; ?></h3>            
          <?php } ?>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
