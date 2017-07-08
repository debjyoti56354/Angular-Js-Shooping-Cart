<?php

$conn=mysqli_connect("localhost","root","","ang_cart");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$id=$_POST['id'];
	$rating1=$_POST['ratings'];
	$sql="select * from product where id=$id";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$avg_ratings=$row['avg_ratings'];
	$no_of_rating=$row['no_of_rating'];

	$ratings=$avg_ratings*$no_of_rating+$rating1;
		$no_of_rating=$no_of_rating+1;
	$avg_ratings=$ratings/$no_of_rating;
	
	//echo $avg_ratings;
	//echo $no_of_rating;
	
	$sql1= "UPDATE `product` SET avg_ratings='$avg_ratings',no_of_rating=$no_of_rating where id=$id";

		mysqli_query($conn,$sql1);
		header('Location:http://localhost/boot%20ang/ecomm.html');

?>