<?php
	$id=$_GET['id'];
	include('database.php');
	mysqli_query($conn,"delete from `customers` where id='$id'");
	echo "Customer deleted ID = " . $id . "<br>";
	//header('location:index.php');
?>