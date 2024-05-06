<?php
include_once 'database.php';
//include_once 'database_local.php';
if(isset($_POST["Submit"])){
    
    $customername=$_POST["customername"];
    $salesperson=$_POST["salesperson"];
    $starttime=$_POST["starttime"];
    $endtime=$_POST["endtime"];
    $subject=$_POST["subject"];
    //$sql="INSERT INTO visitcalltbl (customer,salesperson) values('$customername','$salesperson')";
    $sql="INSERT INTO visitcall (customername,salesperson,starttime,endtime,subject) values('$customername','$salesperson','$starttime','$endtime','$subject')";
     mysqli_query($conn,$sql);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
  body {
    font-family:"Phetsarath OT";
  }
</style>  



</head>
<body>

<div class="container">


<form method="post" action="visitcall.php">

  
  <h3 class="text-center mt-4">ບັນທືກການຢ້ຽມລູກຄ້າຜ່ານການໂທ</h3>
  


  <div class="row mt-5">

    <div class="col-sm-4">
      <h5 class="text-info mb-4">ເລືອກ ພະນັກງານຂາຍ</h5>
      <select name="salesperson" id="state" class="form-control">
        <option><h1>ເລືອກ ພະນັກງານຂາຍ</h1></option>
        <?php $sql = "SELECT * from states"; 
              $query = mysqli_query($conn,$sql);
              while($row=mysqli_fetch_assoc($query))
               { ?>
                 <option value="<?php echo $row['id'] ?>"><?php echo $row['state_name'] ?></option>
            <?php } ?>
      </select>
    </div>
 
    <div class="col-sm-6">
        <h5 class="text-info  mb-4"> ເລືອກ ລູກຄ້າ</h5>
        <select  id="city" class="form-control" name="customername" disabled >
          <option>ລາຍຊື່ລູກຄ້າ</option>
       </select>
    </div>
   
  

  </div>
 
    <br>
    <div class="form-group" style="color:darkgreen; font-weight:bold">
      <label for="startcall">ເລື້ມໂທເວລາ:</label>
      <input type="time" name="starttime" class="form-control" id="startcall" placeholder="Enter time" name="timestart">
    </div>
    <div class="form-group" style="color:darkred; font-weight:bold">
      <label for="endcall">ຈົບໂທເວລາ:</label>
      <input type="time" name="endtime" class="form-control" id="pwd" placeholder="Enter password" name="timeend">
    </div>
    <!--<div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>-->
    <div class="form-group" style="color:darkred; font-weight:bold">
      <label for="subject">ເລື້ອງ:</label>
      <input type="text" name="subject" class="form-control input-lg" id="subject" placeholder="Enter subject" name="subject">
    </div>
    
    
    <!--<button type="submit" class="btn btn-primary">Submit</button>
    <tr><td><input type="submit"  name="submit" value="Submit" id="popUp"/</td></tr>-->
    <button type="submit"  name="Submit" class="btn btn-info button1">Submit</button>

  </form>
</div>












</div>


<script>
$(document).ready(function(){
    $('#state').change(function(){
       var state = $('#state').val();
       $('#city').html('');
        $.ajax({
          url:'fetch_records.php',
          type:'POST',
          data:{stateName:state},
          dataType: "json",
          success:function(data)
          {
            $.each(data, function(key, city)
             {     
              $('#city').prop('disabled', false).css('background','aliceblue').append('<option value="'+city.id+'">'+city.city_name+'</option>');
            });
          }
      });
    });
  });
</script>  
  
</body>
</html>