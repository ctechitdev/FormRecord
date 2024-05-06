<?php
	require_once 'database.php';
	
	if(ISSET($_POST['update'])){
		$c_id = $_POST['cus_id'];
		
		$c_name = $_POST['cus_name'];
		$s_code = $_POST['sale_code'];
		$c_date = $_POST['cus_date'];
		
		//echo "$c_name / $s_code / $c_date";
		
		mysqli_query($conn, "update customers set customername = '$c_name',salescode = '$s_code' ,Cday = '$c_date'  where id = '$c_id'   ") or die(mysqli_error());

		header("location: pjp_ViewCust.php");
	}
?>