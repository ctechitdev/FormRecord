
<?php
include_once 'database.php';
//include_once 'dbconfig.php';
//include_once 'database_local.php';
if(isset($_POST['save']))
{	 
	 $dept = $_POST['dept'];
	 $dept2 = $_POST['dept2'];
     $responder = $_POST['responder']; 
	 $proceedanstep = $_POST['proceedanstep']; 
     $skilltoserve = $_POST['skilltoserve'];
     $convinient = $_POST['convinient'];
	 $clearexplain = $_POST['clearexplain'];
	 $intendtoserve =$_POST['intendtoserve'];
	 $haveknowledge = $_POST['haveknowledge'];
	 $humanrelate = $_POST['humanrelate'];
	 $generalview =$_POST['generalview'];
	 $comment = $_POST['comment'];
	 
	 
	 
	 //$haveknowledge = $_POST['haveknowledge'];
	 //$humanrelate = $_POST['humanrelate'];
	 //$proceedanstep =$_POST['proceedanstep'];

	 //$salesperson = $_POST['salesperson'];
	 
	 //$product =  ($_POST['product']);
 
	 
     //$scquality =  ($_POST['scquality']);
	 //if(empty($scquality)){
		// $scquality = 0;
	 //}
     //$scmarket =  ($_POST['scmarket']);
	 //if(empty($scmarket)){
		 //$scmarket = 0;
	 //}
     //$scprice =  ($_POST['scprice']);
	 //if(empty($scprice)){
	//	 $scprice = 0;
	 //}
	 
    
	 
     
	 
	// debug echo"product : $product / scquality : $scquality / scmarket : $scmarket / scprice : $scprice "; 
	 
	 
	 //$salesname = $_POST['salesname'];
	 //$customername = $_POST['customername'];
	 //$entry_date = $_POST['entry_date'];
	 
	 //$sql = "INSERT INTO pjpdata (entry_date,check_entry,sales_person,customer_name)
	 //VALUES ('$entry_date','$check_entry','$salesname','$customername')";
	 	//$sql = "INSERT INTO survey (shopname,person1,salesperson,scquality,scmarket,scprice,comment,product,Entry_date)
		 $sql = "INSERT INTO survey_int (responder,dept,dept2,proceedanstep,skilltoserve,convinient,clearexplain,haveknowledge,humanrelate,generalview,comment,intendtoserve,Entry_date)
		 VALUES ('$responder','$dept','$dept2','$proceedanstep','$skilltoserve', '$clearexplain','$convinient','$haveknowledge','$humanrelate','$generalview','$comment','$intendtoserve',now())";
	// VALUES ('$shopname','$person1','$salesperson','$scquality','$scmarket','$scprice','$comment','$product',now())";

       
     if (mysqli_query($conn, $sql)) {
		echo "ບັກທືກສຳເລັດ !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);	 
}
?>