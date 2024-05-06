
<?php
include_once 'database.php';
//include_once 'database_local.php';
if(isset($_POST["Submit"])){
   // $conn=mysqli_connect("localhost","root","","pjp_record");
    $customername=$_POST["customername"];
    $salesperson=$_POST["salesperson"];
    $sql="INSERT INTO invoices (customername,salesperson) values('$customername','$salesperson')";
     mysqli_query($conn,$sql);
    $invoiceid=mysqli_insert_id($conn);
    for ($a = 0; $a <count($_POST["itemname"]);$a++){
    $sql="INSERT INTO items(invoiceid,itemname,itemquantity,itempacking) values('$invoiceid','".$_POST["itemname"][$a]."','".$_POST["itemquantity"][$a]."','".$_POST["packing"][$a]."')";
    mysqli_query($conn,$sql);
    }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>

  
input {
    width: 50px;px;
    text-align: center;
background:lightblue;

}
option {
    background:lightgreen;
}


.button1 {width: 87px;
font-weight:bold;
color:white;
}


</style>

</head>
<body>
<div class="container">
<form method="post" action="FormOT.php">
  <br>
    <h2 style="text-align:center;color:darkblue;">KP COMPANY LIMITED  </h2>
    <h3 style="text-align:center;color:red;font-weight:bold;">Draft Sales Record  </h3>
Select customer:<br>
<!-- <select name="customername">-->
<input list="brow" style="width: 410px;" name="customername">
<datalist id="brow">

 <option disabled selected >-- Select Customer--</option>
 <?php
   $Day=date("l");
   $sql = "SELECT * From customers where salescode=1305 and Cday='$Day'";
   //$sql = "SELECT * From customers where Cday=$Myday;=$Day

   $result2=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_array($result2)){
     echo "<option value='". $row['customername'] ."'>" .$row['customername'] ."</option>";  
   }
   
?>
</datalist id="brow">
<br><br>
Select Sales Person:<br>
<select name="salesperson">
    <option disabled selected></option>
    <?php

   //$sql = "SELECT * From salesperson where s_scode=1305";
   $sql = "SELECT salesname From salesperson ";
      $result1=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_array($result1)){
        echo "<option value='". $row['salesname'] ."'>" .$row['salesname'] ."</option>";  
      }
      
   ?>

<br>



  </select> 
  <br><br>

<table>
    <tr>
        <!--   <th>#</th>-->
   <th >Item Name  </th>
   <th >Quantity  </th>
   <th >Packing  </th>
 <!--    <th >Item Quantity</th>-->
    </tr>    
 <tbody id="tbody"></tbody>

</table>    

<p>
<br>
    <button type="button" class="btn btn-primary" onclick="addItem();">
    Add Item

    </button>
</p>
<p>

    <button type="button" class="btn btn-danger" onclick=" deleteItem();">
    Del Item

    </button>
</p>




<p>
    <!--<input type="submit"  name="Submit">-->
    <button type="submit"  name="Submit" class="btn btn-info button1">Submit</button>


</p>    


</form>  
</div>
<script>
var items = 0;    
function addItem() {
    items++;
var  html = "<tr>";
     html += "<td>" + items + "</td";
    
html += "<td > <select name='itemname[]' <?php $sql = "SELECT ITEMNAME From item ";
                  $result1=mysqli_query($conn,$sql);
                  while($row=mysqli_fetch_array($result1)){
                    echo "<option value='". $row['ITEMNAME'] ."'>" .$row['ITEMNAME'] ."</option>";  
                  }
                  ?>
</select></td> ";

html += "<tr><td > <input name='itemquantity[]'</td></tr>";
html += "<tr><td > <input name='packing[]'</td></tr>";
html += "</tr>";
document.getElementById("tbody").insertRow().innerHTML = html;
  
}



</script>    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

<script>
id="tbody";


function deleteItem() {
document.getElementById("tbody").deleteRow(-1);
}



</script>   




</body>
</html>