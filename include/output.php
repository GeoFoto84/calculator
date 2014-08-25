<?php 

    
	if($result != NULL){
		
		$number = htmlspecialchars($result * $_POST['input']);
		echo "<div class=\"alert alert-success\" role=\"alert\">The amount is " . $number . " </div>";
		
		
	}else{
		
		echo "<h2 class=\"alert alert-success\" role=\"alert\"> Conversion rates for these currencies are on their way! Check back soon... </h2>";
		exit;
		
	}
	
	
	

	
	
	
	
	

?>