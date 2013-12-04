<?php
// If it's going to need the database, then it's 
// probably smart to require it before we start.
require_once("database.php");

class csv {
	
	protected static $table_name = "csv_test";
	public  static $fields = array('ID', 'Name', 'Address', 'City', 'State', 'Zip', 'CHFNM', 'CHFTITLE', 'Webaddress', 'County', 'Longitude', 'Latitude');
	public $ID;
	public $Name;
	public $Address;
	public $City;
	public $State;
	public $Zip;
	public $CHFNM;
	public $CHFTITLE;
	public $Webaddress;
	public $County;
	public $Longitude;
	public $Latitude;
	
	


  function openFile($f){
		$firstLine = true;
		$fields;
		$data;
		//Need a handler. Open the $f file and use r for read mode.
		if($handle = fopen($f,"r")){
			//Opening the file was a success. Let's try to get the csv data.
			while($line = fgetcsv($handle)){
				//Was it the first time?
				if($firstLine == true){
					$firstLine = false;
					$fields = $line;
				}
				else{
				//Adding the [] adds a new numerical index. Very important and useful!
				$data[] = array_combine($fields,$line);	
				}
			}
			//print_r($data);
		//HTML::makeTable($data);
		fclose($handle);
		
		//$this->writeFile('escape.csv',$data);
		//$this->writeToDatabase($data);
		return $data;
		
		}
		else{
			//Could not open file!
			echo "Failed to open the file " . $f;
		}
	}
	
	
	

  
 // Common Database Methods
 	public static function find_all() {
		return self::find_by_sql("SELECT * FROM ".self::$table_name);
  }
  
  public static function find_by_id($id=0) {
    $result_array = self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE id={$id} LIMIT 1");
		return !empty($result_array) ? array_shift($result_array) : false;
  }
  
  public static function find_by_sql($sql="") {
    global $database;
    $result_set = $database->query($sql);
    $object_array = array();
    while ($row = $database->fetch_array($result_set)) {
      $object_array[] = self::instantiate($row);
    }
    return $object_array;
  }

	public static function count_all() {
	  global $database;
	  $sql = "SELECT COUNT(*) FROM ".self::$table_name;
    $result_set = $database->query($sql);
	  $row = $database->fetch_array($result_set);
    return array_shift($row);
	}

	private static function instantiate($record) {
		// Could check that $record exists and is an array
    $object = new self;
		// Simple, long-form approach:
		// $object->id 				= $record['id'];
		// $object->username 	= $record['username'];
		// $object->password 	= $record['password'];
		// $object->first_name = $record['first_name'];
		// $object->last_name 	= $record['last_name'];
		
		// More dynamic, short-form approach:
		foreach($record as $attribute=>$value){
		  if($object->has_attribute($attribute)) {
		    $object->$attribute = $value;
		  }
		}
		return $object;
	}
	
	private function has_attribute($attribute) {
	  // We don't care about the value, we just want to know if the key exists
	  // Will return true or false
	  return array_key_exists($attribute, $this->attributes());
	}

	protected function attributes() { 
		// return an array of attribute names and their values
	  $attributes = array();
	  foreach(self::$fields as $field) {
	    if(property_exists($this, $field)) {
	      $attributes[$field] = $this->$field;
	    }
	  }
	  return $attributes;
	}
	
	protected function sanitized_attributes() {
	  global $database;
	  $clean_attributes = array();
	  // sanitize the values before submitting
	  // Note: does not alter the actual value of each attribute
	  foreach($this->attributes() as $key => $value){
	    $clean_attributes[$key] = $database->escape_value($value);
	  }
	  return $clean_attributes;
	}
	
	//protected function attributes() { //return array of attributes
	//return get_object_vars($this);
	//}
	
	 public function create($ar) {
	global $database;
	$fields = $this->fields;
	$table_name = $this->table_name;
	
	// Don't forget your SQL syntax and good habits:
	// - INSERT INTO table (key, key) VALUES ('value', 'value')
	// - single-quotes around all values
	// - escape all values to prevent SQL injection
	//$attributes = $this->attributes();
	//for($i=0; $i < sizeof($ar); $i++){
	$sql = "INSERT INTO $table_name (";
		$sql .= join(", ", $fields);
	  $sql .= ") VALUES ('";
		$sql .= join("', '", array_values($ar));
		$sql .= "')";
	  if($database->query($sql)) {
	    $this->id = $database->insert_id();
	    return true;
	  } else {
	    return false;
	  }
	}
	
	
}

	


?>