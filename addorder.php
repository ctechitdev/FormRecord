<?php
include_once 'database.php';
//include_once 'database_local.php';
if(isset($_POST['save']))
{	 
	 $entry_date = $_POST['entry_date'];
	 $salesname = $_POST['salesname'];
	 $customername = $_POST['customername'];
	 $item1=$_POST['item1'];
	 $item2=$_POST['item2'];
	 $item3=$_POST['item3'];
	 $item4=$_POST['item4'];
	 $item5=$_POST['item5'];
	 
	 $qty1=$_POST['quantity'];
	 
	 if(empty($$qty1)){
	     $qty1 = 0;
	 }
	 
	 $qty2=$_POST['quantity2'];
	 $qty3=$_POST['quantity3'];
	 $qty4=$_POST['quantity4'];
	 $qty5=$_POST['quantity5'];
	 $unit1=$_POST['unit1'];
	 $unit2=$_POST['unit2'];
	 $unit3=$_POST['unit3'];
	 $unit4=$_POST['unit4'];
	 $unit5=$_POST['unit5'];


	 $sql = "INSERT INTO tblorder (entry_date,salesname,customer,item1,
     item2,item3,item4,item5,qty1,qty2,qty3,qty4,qty5,unit1,unit2,unit3,unit4,unit5)
	 VALUES ('$entry_date','$salesname','$customername','$item1',
     '$item2','$item3','$item4','$item5','$qty1','$qty2','$qty3' ,'$qty4' ,'$qty5','$unit1','$unit2','$unit3','$unit4','$unit5')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);	 
}
?>