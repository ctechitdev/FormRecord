<!DOCTYPE html>
<html>
<head>
<style>
body {
         background-color: whiteblue;
    }

    .container{
        background-color: whitesmoke;
        box-shadow: 1px 1px 2px 1px grey;
        padding: 50px 8px 20px 38px;
        width: 30%;
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
  background-color: #04AA6D;
  border: none;
  border-radius: 5px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.tiltle {
  font-weight: bold;
  color:green;
  text-align: Right;
}

</style>




</head>




  <body>
  <h1><center> PjP record</center> </h1>
  <div  class=container>
	<form method="post" action="process.php">
    <div class="tiltle">
   <!--<a href="takeorder_1330.php">Take Order</a>-->
   </div>	
  Check Date 
    : <br>
  	    <input type="date" id="entry_date" name="entry_date">
        <br>
        <br>
    Check Entry <br>   
       	<select name="check_entry">
                <option value="">--select-- </option>
                <option value="IN"> IN</option>
                <option value="OUT"> OUT</option>
        </select><br>
        <br>
   
    <?php 
include_once 'database.php';

?>
   Check Sales person:<br> 
   <select name="salesname">
    <option disabled selected>-- Select salesperson --</option>
    <?php

      $sql = "SELECT * From salesperson where s_scode=1330";
      $result1=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_array($result1)){
        echo "<option value='". $row['salesname'] ."'>" .$row['salesname'] ."</option>";  
      }
      
   ?>

<br><br>


<?php
//include_once 'database_local.php';
include_once 'database.php';
?>
  </select> <br> <br>

   Check customer:<br>
   <select name="customername">
    <option disabled selected>-- Select customer--</option>
    <?php
      $Day=date("l");
      $sql = "SELECT * From customers where salescode=1330 and Cday='$Day'";
      //$sql = "SELECT * From customers where Cday=$Myday;=$Day

      $result2=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_array($result2)){
        echo "<option value='". $row['customername'] ."'>" .$row['customername'] ."</option>";  
      }
      
   ?>
  </select>   










  
   <br>
   <br>
		<input class=button type="submit" name="save" value="submit">


  </div>

	</form>
	
  </body>
</html>