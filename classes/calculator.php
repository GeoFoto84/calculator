<?php
	
	//DEFINE ARRAY
	
	$cur = array();
	$curout = array();
	$rate = array();
	
	
	//FETCH ARRAYS FROM DATABASE
	
	$cur = $db->select('input');
	$curout = $db->select('output');
	$conrates = $db->select('rates');
	
	
	//FIND LENGTH
	
	$len = count($db->select('input'));
	$lenout = count($db->select('output'));
	$lenrate = count($db->select('rates'));
	
	class Calculator {
		
		//Properties
		
		private $_input;
		private $_cur1;
		private $_cur2;
		public $convert;
		
		
		public $rates = array();
		
		//Magic Methods
		
		public function __construct($arg1, $arg2, $ar3){
			
			$this->_input = mysql_real_escape_string($_POST['input']);
			$this->_cur1 = mysql_real_escape_string($_POST['currencyin']);
			$this->_cur2 = mysql_real_escape_string($_POST['currencyout']);
		
		}
		
		//Calculator Methods
		public function setRates($conrates){
			
			$this->rates = $conrates;
			
		}
		
		public function output(){
			
			$lenRateInside = 0;
			$lenRateInside = count($this->rates);
			
			// CALCULATOR ENGINE ~ SEARCH DATABASE FOR BOTH INPUT AND OUTPUT 
			
			for($i=0, $j=0; $i < $lenRateInside ; $i++, $j++){
	
				if($this->rates[$i]['input'] == $this->_cur1 && $this->rates[$j]['output'] == $this->_cur2){
					
					return $this->rates[$i]['rate'];
					break;				
					
				}
				
			}
			
		}
	
	}
	
	//Create the Calculator Object
	
	try{
	
	$convert = new Calculator($_POST['input'],$_POST['currencyin'],$_POST['currencyout']);
	$convert->setRates($conrates);
	
	$result=0;
	$result = $convert->output();
	
	include 'include/output.php';
	
	}catch(Exception $e){
		
		echo "Exception caught: " . $e;
		exit;
	
	}
?>