<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	
    <title>Add currency</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a style="cursor:default" class="navbar-brand"><i style=" margin-right:5px" class="fa fa-exchange"></i>Currency calculator</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="../">Home</a></li>
            <li><a href="about.html">About</a></li>
			<li class="active"><a href="add.php">Add currency</a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
	<div class="head">
        <h1>Add Currency</h1>
        <p class="lead">Add input and output currency, and their conversion rate.</p>
      </div>

      <div class="starter-template">
         <a href="../"><img src="img/cur.png" alt="wallet" /></a>
      </div>
	  
	  <div class="starter-template">
		<!-- FORM INPUTS-->
	  <form action="add.php" method="post">	
			<div class="add_div">
			<h3>Input currency</h3>
		  <input class="input_currency_add" type="text" name="input" required />
	  </div>
	  <div class="add_div"><h3>Output currency</h3>
		  <input class="input_currency_add" type="text" name="output" required />
	  </div>
	  <div class="add_div"><h3>Rate</h3>
		  <input class="input_currency_add" type="text" name="rate" required />
	  </div>
	  <div class="add_div_sub">
		  <button type="submit" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-indent-left"></span> Add Conversion</button></div>
	  </form>
	  <!-- END FORM INPUTS-->
      </div>
	 
	<?php require_once 'classes/addcurrency.php'; ?>
	  
	  
    </div><!-- /.container -->
	
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
