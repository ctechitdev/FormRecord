
<?php
include_once 'database.php';
//include_once 'database_local.php';
if(isset($_POST['save']))
{	 
	 $shopname = $_POST['shopname'];
     $person1 = $_POST['person1']; 
	 $salesperson = $_POST['salesperson'];
	 
	 $product =  ($_POST['product']);
 
	 
     $scquality =  ($_POST['scquality']);
	 if(empty($scquality)){
		 $scquality = 0;
	 }
     $scmarket =  ($_POST['scmarket']);
	 if(empty($scmarket)){
		 $scmarket = 0;
	 }
     $scprice =  ($_POST['scprice']);
	 if(empty($scprice)){
		 $scprice = 0;
	 }
	 
     $comment = $_POST['comment'];
	 
     
	 
	// debug echo"product : $product / scquality : $scquality / scmarket : $scmarket / scprice : $scprice "; 
	 
	 
	 //$salesname = $_POST['salesname'];
	 //$customername = $_POST['customername'];
	 //$entry_date = $_POST['entry_date'];
	 
	 //$sql = "INSERT INTO pjpdata (entry_date,check_entry,sales_person,customer_name)
	 //VALUES ('$entry_date','$check_entry','$salesname','$customername')";
	 	$sql = "INSERT INTO survey (shopname,person1,salesperson,scquality,scmarket,scprice,comment,product,Entry_date)
	 VALUES ('$shopname','$person1','$salesperson','$scquality','$scmarket','$scprice','$comment','$product',now())";


     if (mysqli_query($conn, $sql)) {
		echo "ບັກທືກສຳເລັດ !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);	 
}
?>