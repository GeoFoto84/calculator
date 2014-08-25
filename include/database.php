<?php 

	$username = "geofoto";
	$password = "AbCd1234";
	$hostname = "localhost"; 

	//connection to the database
	$dbhandle = mysql_connect($hostname, $username, $password) 
    or die("Unable to connect to MySQL");
	
	
	//Select database
	$selected = mysql_select_db('currency', $dbhandle);
	
	
	
?>