<?php
require_once("StudentRestHandler.php");
		
$view = "";
if(isset($_GET["view"]))
	$view = $_GET["view"];
/*
controls the RESTful services
URL mapping
*/
switch($view){

	case "all":
		// to handle REST Url /mobile/list/
		$mobileRestHandler = new MobileRestHandler();
		$mobileRestHandler->getAllStudents();
		break;
		
	case "single":
		// to handle REST Url /mobile/show/<id>/
		$mobileRestHandler = new MobileRestHandler();
		$mobileRestHandler->getStudent($_GET["id"]);
		break;

	case "" :
		//404 - not found;
		break;
}
?>
