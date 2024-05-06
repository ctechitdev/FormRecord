<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $customername = $_POST['customername'];
	 $salescode = $_POST['salescode'];
	 

	 $sql = "INSERT INTO customers (customername,salescode)
	 VALUES ('$customername','$salescode')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 mysqli_close($conn);	 
}
?>