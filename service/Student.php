<?php
/* 
A domain Class to demonstrate RESTful web services
*/
ini_set("display_errors",1);
Class Student {
	
	public function db_connect(){
		$con = mysqli_connect("localhost", "root", "") ;
		mysqli_select_db($con,"ang_cart");
		return $con;
	}

	public function getAllStudents(){
		$con = $this->db_connect();
		$sql = "select * from product";
		$result = mysqli_query($con,$sql);
		$data = array();
		$i=0;
		while($row = mysqli_fetch_assoc($result))
		{
			//print_r($row);
			/*$data[$i]['id'] = $row['id'];
			$data[$i]['name'] = $row['name'];
			$data[$i]['gender'] = $row['gender'];
			$data[$i]['city'] = $row['city'];			
			$data[$i]['id'] = $row['Id'];
			$data[$i]['name'] = $row['Name'];
			$data[$i]['gender'] = $row['Gender'];
			$data[$i]['salary'] = $row['Salary'];*/
			$data[$i]['id'] = $row['id'];
			$data[$i]['name'] = $row['name'];
			$data[$i]['descp'] = $row['descp'];
			$data[$i]['price'] = $row['price'];
				$data[$i]['image'] = $row['image'];
			$data[$i]['avg_ratings'] = $row['avg_ratings'];
			$data[$i]['no_of_rating'] = $row['no_of_rating'];
			$i++;
		}
		return $data;
	}
	
	public function getStudent($id){
		
		$i=0;
		$con = $this->db_connect();
		$sql = "select * from product where id = $id";
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0)
		{
			$data = array();		
			while($row = mysqli_fetch_array($result))
			{
				/*$data[$i]['id'] = $row['id'];
				$data[$i]['name'] = $row['name'];
				$data[$i]['gender'] = $row['gender'];
				$data[$i]['salary'] = $row['city'];
				$data[$i]['id'] = $row['Id'];
				$data[$i]['name'] = $row['Name'];
				$data[$i]['gender'] = $row['Gender'];
				$data[$i]['salary'] = $row['Salary'];*/
				$data['id'] = $row['id'];
			$data['name'] = $row['name'];
			$data['descp'] = $row['descp'];
			$data['price'] = $row['price'];
				$data['image'] = $row['image'];
			$data['avg_ratings'] = $row['avg_ratings'];
			$data['no_of_rating'] = $row['no_of_rating'];	
				$i++;
			}
			return $data;
		}else{
			return false;
		}
	}	
}
?>