<?php
	include('database.php');
	
	$customername=$_POST['customername'];
	$salescode=$_POST['salescode'];
	$day=$_POST['day'];
		
	mysqli_query($conn,"insert into `customers` (customername,salescode,Cday) values ('$customername','$salescode','$day')");
	header('location:pjp_maintain.php');
	
?>