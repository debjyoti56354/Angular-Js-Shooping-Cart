<?php /*  A domain Class to demonstrate RESTful web services */ 

Class Employees {   
 public function db_connect(){ 
 $con = mysql_connect("localhost", "root", "");  
 mysql_select_db("ang_cart", $con); 
 return $con;  }   

 public function getAllEmployees(){  

 $i=0;  
 $con = $this->db_connect();  
 $sql = "select * from tblEmployees"; 
 $result = mysql_query($sql, $con);
 $data = array();  
 
 while($row = mysql_fetch_array($result))   
 {    
$data[$i]['id'] = $row['Id'];  
  $data[$i]['name'] = $row['Name']; 
  $data[$i]['gender'] = $row['Gender']; 

 
   $data[$i]['salary'] = $row['Salary']; 
   $i++;   }  
   return $data;  
   
   }    
   
   public function getEmployee($id){      
   $i=0; 
   $con = $this->db_connect();   
   $sql = "select * from tblEmployees where Id = $id";  
   $result = mysql_query($sql, $con);  
   if(mysql_num_rows($result)>0)  
	   {    $data = array();    
   
   while($row = mysql_fetch_array($result))  
	   {  
   $data[$i]['id'] = $row['Id'];  
   $data[$i]['name'] = $row['Name'];    
   $data[$i]['gender'] = $row['Gender'];   
   $data[$i]['salary'] = $row['Salary']; 
   $i++;   
   }   
   return $data;  
   }
   else{    
   return false;  
   } 
   }  } ?>