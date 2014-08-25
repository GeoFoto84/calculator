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
	
    <title>Currency calculator | OOP</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	
	  
	<?php 
		//DATABASE CONNECTION
		require_once 'classes/DB.php';
		//$db = new DB("a7581166_data", "a7581166_user", "AbCd1234", "mysql14.000webhost.com");
		$db = new DB("currency", "geofoto", "AbCd1234", "localhost");
		//$db->connect();
		
		
		
		//FETCH INPUT
		$cur = array();
		$curout = array();
		$cur = $db->select('input');
		$curout = $db->select('output');
		$len = count($db->select('input'));
		$lenout = count($db->select('output'));
		
	?>
  
  
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
            <li class="active"><a href="../">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="add.php">Add currency</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
<div class="head">

        <h1>Welcome to Currency calculator</h1>
        <p class="lead">An online tool to convert currencies.</p>
      </div>
      <div class="starter-template">
         <a href="../"><img src="img/cur.png" alt="wallet"/></a>
      </div>
	  
	  <div class="starter-template">
   <form action="form.php" method="post" id="FormId">
	  <div>
		  <input class="input_currency" type="number" name="input" required />
	  </div>
	  <div>
	 	  <?php	
 
		echo "<select class=\"input_buttons\" name=\"currencyin\">";
		for ($i = 0; $i < $len; $i++){
			
			
			echo "<option value='" . $cur[$i]['currencies'] . "'";
			
			echo ">" . $cur[$i]['currencies'] . "</option>\n";
		
		}
		
		echo "</select>"
  ?>
	  
	    <h4 style = "display:initial"> to </h4>
     
  <?php	
 
		echo "<select class=\"input_buttons\" name=\"currencyout\">";
		for ($i = 0; $i < $lenout; $i++){
			
			
			echo "<option value='" . $curout[$i]['currencies'] . "'";
			
			echo ">" . $curout[$i]['currencies'] . "</option>\n";
		
		}
		
		echo "</select>"
  ?>
	
	  <button type="submit" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-refresh"></span> Convert
</button>
	  </form>
      </div>
	  <div class="starter-template" >
		
	  </div>
	  <div>
	  <!-- CALL CALCULATOR-->
	  <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'){require_once 'classes/calculator.php';}?>		
</div>
	


	  
	
    </div><!-- /.container -->

	
    <!-- Bootstrap core JavaScript
	
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
