<?php
//$con = mysqli_connect("localhost","root","","pjp_record");
include_once 'database.php';
//include_once 'database_local.php';
$sql = "select distinct salesperson from otorderdetails";
$res = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- <script type="text/javascript" src="js/fetchndisplay.js"> </script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
  
  
  <style>
      body{
         font-family:Phetsarath OT;
      }
  </style>
    

</head>
<body>
<div class="container">
    <div style="text-align:center; color:red;">
       <h2> Online Ordertaking</h2>
      

    </div>    
    <div style="text-align:center; color:darkblue;">
       
       <?php echo "Today is " . date("d/m/y") . "<br>"; ?>

    </div>




    <div style="color:darkblue;"> <h4> ພະນັກງານຂາຍ:</h4></div>
    <select id="customers" onchange="selectbrand()" >
    <?php
    while ($row = mysqli_fetch_array($res)){
    ?>
    <option value="<?php echo $row['salesperson'] ?>"><?php echo $row['salesperson'] ?></option>
    <?php    
    }
    ?>
    </select>
</div>
<br>    
<div class="container">  
<table class="table table-bordered">
<thead class="thead-dark"  >        
                <tr class="table-info mysize">
                    <th style="width:11%;text-align:center;">Order ID</th>
                    <th style="width: 19%">Date</th>
                   <!-- <th style="width: 25%">Sales person</th>-->
                    <center>
                    <th style="width: 32%">Customer</th>
                    </center>
                    <th style="width: 33%">item</th>
                    <th style="width: 3%">Unit</th>
                    <th style="width: 1%">Qty</th>
                  
                    
                </tr>
</thead>
    <tbody id="ans">

    </tbody>
</table>

</div>

<script>
function selectbrand() {
var x=document.getElementById("customers").value;
$.ajax({
    url:"showcust.php",
    method: "post",
    data:{
        id:x
    },
    success: function(data){
        $("#ans").html(data);
    }
})

}
</script>



</body>
</html>