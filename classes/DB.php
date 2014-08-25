<?php 

	class DB {
	
	protected $db_name; 
    protected $db_user;
    protected $db_pass ;
    protected $db_host;  
	

	//CONSTRUCTOR(CONNECTION AND SELECT DATABASE) AND DESTRUCTOR
	public function __construct($dbname, $dbuser, $dbpass, $dbhost){
	
		$this->name = $dbname;
		$this->user = $dbuser;
		$this->pass = $dbpass;
		$this->host = $dbhost;
		
		$this->connection = mysql_connect($this->host, $this->user, $this->pass)
            OR die("There was a problem connecting to the database.");
			
		mysql_select_db($this->name, $this->connection)
        OR die("There was a problem selecting the database.");
	
	}
	
	 public function __destruct() {
        mysql_close($this->connection)
            OR die("There was a problem disconnecting from the database.");
			
			
    }
	

	//takes a mysql row set and returns an associative array, where the keys are the columns

	  public function processRowSet($rowSet, $singleRow = false)
    {
        $resultArray = array();
        while($row = mysql_fetch_assoc($rowSet))
        {
            array_push($resultArray, $row);
        }
 
        if($singleRow === true)
            return $resultArray[0];
 
        return $resultArray;
    }
	
	//Select rows from the database
   
	public function select($table){
		
		$sql = "SELECT * FROM $table";
		$result = mysql_query($sql);
		
		if(mysql_num_rows($result) == 1){
		
			return $this->processRowSet($result, $singleRow == true);
			
		}
		
		return $this->processRowSet($result);
	
	}
	
	//ADD to database
	public function addCurrency($incur, $outcur, $addrate){
		
		$q1 = "INSERT INTO input (currencies) VALUES ('$incur')";
		mysql_query($q1) OR trigger_error("Could not send query");
		$q2 = "INSERT INTO output (currencies) VALUES ('$outcur')";
		mysql_query($q2) OR trigger_error("Could not send query");
		$q3 = "INSERT INTO rates (input, output, rate) VALUES ('$incur', '$outcur', '$addrate')";
		mysql_query($q3) OR trigger_error("Could not send query");
	
	}
	
	//ADD DATA FROM XE

		
	
	

	
	public function checkPost(){
		
		return $this->processRowSet($result);
	
	}
	
}

?>