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
		
		$id = $_POST['id'];
		
		$new = csv::find_by_id($id);
		echo $new->Name ."<br />";
		echo $new->Address ."<br />";
		echo $new->City ." " .$new->State;
		?>
	</body>
</html>

<?php	
require_once("./layouts/footer.php"); 
	
?>
