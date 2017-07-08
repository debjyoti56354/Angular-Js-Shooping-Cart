<?php require_once("SimpleRest.php");
 require_once("Employees.php");   

 class EmployeesRestHandler extends SimpleRest { 
 
 function getAllEmployees() {  
 
  $employee = new Employees(); 
  $rawData = $employee->getAllEmployees(); 
 
  if(empty($rawData)) {  
  $statusCode = 404;    
  $rawData = array('error' => 'No employees found!');    
  } 
  else { 
  $statusCode = 200;   } 
 
$requestContentType = 'application/json';   
$this ->setHttpHeaders($requestContentType, $statusCode);   

$response = $this->encodeJson($rawData);   
echo $response;  }    

public function encodeHtml($responseData) {  
 $htmlResponse = "<table border='1'>";  
 foreach($responseData as $res) {  
 foreach($res as $key=>$value){    
 $htmlResponse .= "<tr><td>". $key. "</td><td>". $value. "</td></tr>";  
 }  
 } 
 $htmlResponse .= "</table>";  
 return $htmlResponse;    } 

 public function encodeJson($responseData) {  
 $jsonResponse = json_encode($responseData); 
 return $jsonResponse;    } 

 public function encodeXml($responseData) {  
 // creating object of SimpleXMLElement  
 $xml = new SimpleXMLElement('<?xml version="1.0"?><employee></employee>');   
 foreach($responseData as $key=>$value) 
 {    $xml->addChild($key, $value);   }   
 return $xml->asXML();  }  

 public function getEmployee($id) { 
 
  $employee = new Employees();   
  $rawData = $employee->getEmployee($id); 
 
  if(empty($rawData)) {  
  $statusCode = 404;  
  $rawData = array('error' => 'No employees found!');  
  } 
  else { 
  $statusCode = 200;   } 
 
  $requestContentType = 'application/json';  
  $this->setHttpHeaders($requestContentType, $statusCode);  
  $response = $this->encodeJson($rawData); 
  echo $response;  } } ?> 