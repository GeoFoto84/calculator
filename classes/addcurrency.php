<?php 
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	require_once 'classes/DB.php';
	$db = new DB("currency", "geofoto", "AbCd1234", "localhost");
	
	
	
	//Escapes special characters
	$incur = mysql_real_escape_string($_POST['input']);
	$outcur = mysql_real_escape_string($_POST['output']);
	$addrate = mysql_real_escape_string($_POST['rate']);
	
	
	$db->addCurrency($incur, $outcur, $addrate );
	echo "<h3 class=\"alert alert-success\" role=\"alert\">Thanks for adding the conversion. Keep on going, add some more for better currency calculator! </h3>";
	
}

?>