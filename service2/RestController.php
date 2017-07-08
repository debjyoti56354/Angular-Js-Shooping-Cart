<?php require_once("EmployeesRestHandler.php"); 
   $view = ""; 
   if(isset($_GET["view"])) 
	   $view = $_GET["view"]; /* controls the RESTful services URL mapping */ 
   
	switch($view){ 
 
 case "all":   // to handle REST Url /mobile/list/  
 $mobileRestHandler = new EmployeesRestHandler();  
 $mobileRestHandler->getAllEmployees(); 
 break;   

 case "single":   // to handle REST Url /mobile/show/<id>/ 
 $mobileRestHandler = new EmployeesRestHandler();
 $mobileRestHandler->getEmployee($_GET["id"]); 
 break; 
 
 case "" :  
 //404 - not found;  
 break; } ?> 