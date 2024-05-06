<?php
include_once 'database.php';
//include_once 'database_local.php';
?>


<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
  body {
    background-color: whitesmoke;
  }
</style>

</head>

<body>
<br>
<h3><center> Take order record</center> </h3> 
<center>
<div >
<?php
echo "Today's date is: " .date("d/m/y") ;
?>
</div>
</center>
  <div  class=container>
	<form method="post" action="addorder.php">

		Check Date 
    : <br>
  	    <input type="date" id="entry_date" name="entry_date">
        <br>
        <br>
  
   
   
   Check Sales person:<br> 
   <select name="salesname">
    <option disabled selected>-- Select salesperson --</option>
    <?php

   $sql = "SELECT * From salesperson where s_scode=1305";
      $result1=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_array($result1)){
        echo "<option value='". $row['salesname'] ."'>" .$row['salesname'] ."</option>";  
      }
      
   ?>

<br><br>



  </select> <br> <br>

   Check customer:<br>
   <!-- <select name="customername">-->
   <input list="brow" name="customername">
   <datalist id="brow">



    <option disabled selected>-- Select customer--</option>
    <?php
      $Day=date("l");
      $sql = "SELECT * From customers where salescode=1305 and Cday='$Day'";
      //$sql = "SELECT * From customers where Cday=$Myday;=$Day

      $result2=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_array($result2)){
        echo "<option value='". $row['customername'] ."'>" .$row['customername'] ."</option>";  
      }
      
   ?>
  <!-- </select>   <br> <br>-->
  
  </datalist id="brow">

  <br> <br>

	<div class="input-group">
		<span class="input-group-text">item1</span>
        
		    
                <!--<select name="item1" class="it1">-->
               <input list="brow2" name="item1" size=25px>
               <datalist id="brow2">
               <option disabled selected>-- Select Product --</option>
                <?php
            
                  $sql = "SELECT ITEMNAME From item";
                  $result1=mysqli_query($conn,$sql);
                  while($row=mysqli_fetch_array($result1)){
                    echo "<option value='". $row['ITEMNAME'] ."'>" .$row['ITEMNAME'] ."</option>";  
                  }
                  
               ?>
               </datalist id="brow2">
               <!--</select> -->

               <span class="input-group-text">unit</span>
                <select name="unit1" id="unit1">
                <option value="Case">case</option>
                <option value="pcs">pcs</option>
                </select>

		<span class="input-group-text"
			style="border-left: 0; border-right: 0;">
			Quantity
		</span>
		<input type="number" name=quantity "	
			placeholder="quantity..." />
	</div>

    
<div class="input-group">
		<span class="input-group-text">item2</span>
        
		    
               <!--<select name="item2" class="it1"> -->
               <input list="brow3" name="item2" size=25px>
               <datalist id="brow3">



                <option disabled selected>-- Select Product --</option>
                <?php
            
                  $sql = "SELECT * From item";
                  $result1=mysqli_query($conn,$sql);
                  while($row=mysqli_fetch_array($result1)){
                    echo "<option value='". $row['ITEMNAME'] ."'>" .$row['ITEMNAME'] ."</option>";  
                  }
                  
               ?>
               </datalist id="brow3">
               <!--</select> -->

               <span class="input-group-text">unit</span>
                <select name="unit2" id="unit2">
                <option value="Case">case</option>
                <option value="pcs">pcs</option>
                </select>

		<span class="input-group-text"
			style="border-left: 0; border-right: 0;">
			Quantity
		</span>
		<input type="number" name=quantity2 "	
			placeholder="quantity..." />
	</div>

    <div class="input-group">
		<span class="input-group-text">item3</span>

       
              
<!--<select name="item3" class="it3"> -->
<input list="brow4" name="item3" size=25px>
               <datalist id="brow4">


                <option disabled selected>-- Select Product --</option>
                <?php
            
                  $sql = "SELECT * From item";
                  $result1=mysqli_query($conn,$sql);
                  while($row=mysqli_fetch_array($result1)){
                    echo "<option value='". $row['ITEMNAME'] ."'>" .$row['ITEMNAME'] ."</option>";  
                  }
                  
               ?>
                </datalist id="brow4">
               <!--</select> -->

               <span class="input-group-text">unit</span>
                <select name="unit3" id="unit3">
                <option value="Case">case</option>
                <option value="pcs">pcs</option>
                </select>

		<span class="input-group-text"
			style="border-left: 0; border-right: 0;">
			Quantity
		</span>
		<input type="number" name=quantity3 "	
			placeholder="quantity..." />
	</div> 
  
    <div class="input-group">
		<span class="input-group-text">item4</span>
        
		   
               
              <!--<select name="item4" class="it1"> -->
              <input list="brow5" name="item4" size=25px>
              <datalist id="brow5">



                <option disabled selected>-- Select Product --</option>
                <?php
            
                  $sql = "SELECT * From item";
                  $result1=mysqli_query($conn,$sql);
                  while($row=mysqli_fetch_array($result1)){
                    echo "<option value='". $row['ITEMNAME'] ."'>" .$row['ITEMNAME'] ."</option>";  
                  }
                  
               ?>
                </datalist id="brow5">
               <!--</select> -->

               <span class="input-group-text">unit</span>
                <select name="unit4" id="unit4">
                <option value="Case">case</option>
                <option value="pcs">pcs</option>
                </select>

		<span class="input-group-text"
			style="border-left: 0; border-right: 0;">
			Quantity
		</span>
		<input type="number" name=quantity4 "	
			placeholder="quantity..." />
	</div> 
    
<!-- ITEM5 -->
  <div class="input-group">
		<span class="input-group-text">item5</span>
        
		   
            
                      
              <!--<select name="item5" class="it1"> -->
              <input list="brow6" name="item5" size=25px>
              <datalist id="brow6">



                <option disabled selected>-- Select Product --</option>
                <?php
            
                  $sql = "SELECT * From item";
                  $result1=mysqli_query($conn,$sql);
                  while($row=mysqli_fetch_array($result1)){
                    echo "<option value='". $row['ITEMNAME'] ."'>" .$row['ITEMNAME'] ."</option>";  
                  }
                  
               ?>
               </datalist id="brow6">
               <!--</select> -->

               <span class="input-group-text">unit</span>
                <select name="unit5" id="unit5">
                <option value="Case">case</option>
                <option value="pcs">pcs</option>
                </select>

		<span class="input-group-text"
			style="border-left: 0; border-right: 0;">
			Quantity
		</span>
		<input type="number" name=quantity5 "	
			placeholder="quantity..." />
	</div> 
    
  <br>

	<input class="btn btn-primary" type="submit" name="save" value="submit">

  


</body>

</html>
