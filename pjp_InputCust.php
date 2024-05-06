<?php
include_once 'database.php';

$message_notify ="";

if(isset($_POST['save']))
{	 
	 $customername = $_POST['customername'];
	 $salescode = $_POST['salescode'];
	 $Cday = $_POST['pjpday'];
	 

	 $sql = "INSERT INTO customers (customername,salescode,Cday)
	 VALUES ('$customername','$salescode','$Cday')";
	 if (mysqli_query($conn, $sql)) {
		$message_notify =  "New record created successfully !";
	 } else {
		$message_notify =    "Error: " . $sql . " " . mysqli_error($conn);
	 }
 
}
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
<head>





<style>
body {
         background-color: whiteblue;
         font-family: Arial, Helvetica, sans-serif,Saysettha OT;
    }

    .container{
        background-color: lightblue;
        box-shadow: 1px 1px 2px 1px grey;
        padding: 50px 8px 20px 38px;
        width: 27%;
        height:50%;
        margin-left:35%;

    }

    .txt {
    width: 80%;
    height:3%;
    border:1px solid brown;
    border-radius:05px;
    padding: 10px 15px 10px 15px;
    margin:10px 0px 15px 0px;
}

.button {
  padding: 5px 25px;
  font-size: 12px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: yellow;
  background-color: darkblue;
  border: none;
  border-radius: 5px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

h3 {text-align: center;color:blue;}

</style>




</head>




  <body>
    <center>
  <a href="nav.php"><img src="KPLOGO.png" alt="Hot Air Balloons" width="70" height="70"></a>
    </center>
  <h3 >     Tyre sales product: Input customer code  </h3>
  <?php
  if($message_notify == ""){
	  ?>
	  
	 
	  <?php
  }else{
	  ?>
	     <h3> <?php echo "$message_notify" ?> </h3>
	  <?php
  }
  ?>

  <div  class=container>
  
	<form method="post" action="">
	    <?php
	    
	    $query="SELECT * FROM `salesperson`";
$result1=mysqli_query($conn,$query);
	    
	    ?>
	     Sales Person Code:<br>
   <select name="salescode"> <br>
   <br>
   <option value="">--select-- </option>
   <?php  while ($row1=mysqli_fetch_array($result1)):;?>
     <option value="<?php echo $row1[2];?>"><?php echo $row1[2];?> </option>
   <?php endwhile;?>
   </select> <br>
   <br>
	    
	    
	    PJP Day ex. Monday:<br>
		<input type="text" CLASS="txt" name="pjpday"><br>
		
		Customer: ex.F-561-003-144-ຮ້ານ ໂພໄຊ ບໍລິການ <br>
		<input type="text" CLASS="txt" name="customername" />
		<br>
		 

   <br>
   <br>
		<input class=button type="submit" name="save" value="Add">
		
		
	</form>

  </div>


	
  </body>
</html>