<?php
 
include_once 'database.php';

if(isset($_POST['save']))
{	 
	 $check_entry = $_POST['check_entry'];
	 $salesname = $_POST['salesname'];
	 $customername = $_POST['customername'];
	 $entry_date = $_POST['entry_date'];
	 
	 $sql = "INSERT INTO pjpdata (entry_date,check_entry,sales_person,customer_name)
	 VALUES ('$entry_date','$check_entry','$salesname','$customername')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);	 
}
?>