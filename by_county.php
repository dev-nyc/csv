<?php 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
ini_set('max_execution_time', 200);
require_once("./includes/database.php"); 
require_once("./includes/csv.php"); 
require_once("./layouts/header.php"); 

?>
<html>
	<head>
		<title>
			RESULT
		</title>
	</head>
	<body>
<?php
$county = csv::find_by_sql($sql="select * from csv_test order by county asc");
foreach($county as $record){
	echo $record->Name ."<br />";
	echo $record->Address ."<br />";
	echo $record->City ." " .$record->State ."<br />";
	echo $record->County ."<br />";
	echo "<br />";
	}
?>
</body>
</html>



<?php	
require_once("./layouts/footer.php"); 
	
?>
