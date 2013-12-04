<?php 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
ini_set('max_execution_time', 200);
require_once("./includes/database.php"); 
require_once("./includes/csv.php"); 
require_once("./layouts/header.php"); 

?>

<?php

	$csvs = csv::find_all();
	foreach($csvs as $record){
	echo $record->Name ."<br />";
	echo $record->Address ."<br />";
	echo "<br />";
	}
?>

<?php	
require_once("./layouts/footer.php"); 
	
?>
