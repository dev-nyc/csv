<?php 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
ini_set('max_execution_time', 200);
require_once("./includes/database.php"); 
require_once("./includes/csv.php"); 
require_once("./layouts/header.php"); 



?>
<form action="process.php" method="post">
			id: <input type="text" name="id" value="" />
			<br />
			<input type="submit" name="submit" value="Submit" />
		</form> 
		

<?php	
require_once("./layouts/footer.php"); 
	
?>


