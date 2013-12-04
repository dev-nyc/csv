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
	//Export CSV FILE TO MYSQL TABLE ONCE
	//$ar1 = $csv1->openFile("test2.csv");
	//for($i=0; $i < sizeof($ar1); $i++){
		//$csv1->create($ar1[$i]);
	//}
?>	
	<div class="container">
		            <ul class="nav navbar-nav">
		            	<li><a href="find_all.php" title="">ALL UNIVERSITIES</a></li>
		                <li><a href="find_id" title="">FIND BY ID</a></li>
		                <li><a href="by_county" title="">ORDERD BY COUNTY</a></li>
		               
		            </ul>
		            </div>
	
	
	
	
	
	
<?php	
require_once("./layouts/footer.php"); 
	
?>



	

