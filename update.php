<?php
	include('database.php');
	$id=$_GET['id'];
	
	$customername=$_POST['customername'];
	$salescode=$_POST['salescode'];
    
    $day=$_POST['Cday']; 
	
	mysqli_query($conn,"update `customers` set customername='$customername', salescode='$salescode', Cday='$day' where id='$id'");
	header('location:pjp_maintain.php');
?>