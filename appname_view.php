<?php
//$con = mysqli_connect("localhost","root","","pjp_record");
include_once 'database.php';
//include_once 'database_local.php';
$sql = "select distinct dept  from appnametbl where dept !=''";
$res = mysqli_query($conn,$sql);
$rowcount = mysqli_num_rows( $res );


$sql2 = "select  count(id) as total_count from appnametbl where dept !=''";
$res2 = mysqli_query($conn,$sql2);

while ($row=mysqli_fetch_array($res2)) {
	$count_item = $row['total_count'];
}
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
       <h2> ເບິ່ງລາຍຊື່ ແອປປະກວດ</h2>
      

    </div>    
    <div style="text-align:center; color:darkblue;">
       
       <?php echo "Today is " . date("d/m/y") . "<br>"; ?>

    </div>




    <div style="color:darkblue;"> <h4> ພະແນກ:</h4></div>
    <select id="customers" onchange="selectbrand()" >
    <?php
    while ($row = mysqli_fetch_array($res)){
    ?>
    <option value="" selected disabled hidden>ເລືອກພະແນກ...</option>
    <option value="<?php echo $row['dept'] ?>"><?php echo $row['dept'] ?></option>
    <?php    
    }
    ?>
    </select>
</div>
   
<div class="container">  
<div style="font-weight:bold;color:green; text-align:right; font-size: 20px;">
    <?php
    printf("ຈຳນວນຊື່ປະກວດທັງໝົດ :  %d\n", "$count_item");
    ?>
</div>      

<table class="table table-bordered">
<thead class="thead-dark"  >        
                <tr class="table-info mysize">
                   <!-- <th style="width:11%;text-align:center;">Order ID</th>
                    <th style="width: 19%">Date</th>
                   <th style="width: 25%">Sales person</th>
                    <center>
                    <th style="width: 32%">Customer</th>
                    </center> -->
					<th style="width: 15%;text-align:center;color:darkblue;">Entry Date</th>
                    <th style="width: 45%;text-align:center;color:darkblue;">Staff Name</th>
                    <th style="width: 15%;text-align:center; color:darkblue; ">Department</th>
                    <th style="width: 25%;text-align:center; color:darkblue;">App Name</th>
                  
                    
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
    url:"showappname.php",
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