<?php 
	
	ini_set("display_errors", true);
	date_default_timezone_set( "Europe/Athens" ); 
	define( "DB_DSN", "mysql:host=localhost;dbname=cms" );
	define( "DB_USERNAME", "geofoto" );
	define( "DB_PASSWORD", "AbCd1234" );
	
	define("ZF2_PATH", "zend");
	define( "CLASS_PATH", "classes" );
	define( "TEMPLATE_PATH", "templates" );
	

	
	//The article class file will be in every page
	require( CLASS_PATH . "/DB.php" );
	
	//The zend framework
	require(ZF2_PATH . "zend/library/Zend")
	
	function handleException( $exception ) {
		
		echo "Sorry, a problem occurred. Please try later.";
		error_log( $exception->getMessage() );
	
	}
	
	set_exception_handler( 'handleException' );
	
?>