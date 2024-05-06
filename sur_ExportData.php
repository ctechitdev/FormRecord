<?php

$connect = new PDO("mysql:host=localhost;dbname=kplaocom_pjprecord", 'kplaocom', 'ksaO6YVmTy1H');
 
//$connect = new PDO("mysql:host=localhost;dbname=pjp_record", "root", "");
$connect -> exec("set names utf8");

$start_date_error = '';
$end_date_error = '';

if(isset($_POST["export"]))
{
 if(empty($_POST["start_date"]))
 {
  $start_date_error = '<label class="text-danger">Start Date is required</label>';
 }
 else if(empty($_POST["end_date"]))
 {
  $end_date_error = '<label class="text-danger">End Date is required</label>';
 }
 else
 {
  $file_name = 'Survey Data.csv';
  
  header('Content-Encoding: UTF-8');
  header("Content-Description: File Transfer");
  header("Content-Disposition: attachment; filename=$file_name"); 
 
  
  $file = fopen('php://output', 'w');

  $header = array("product","Entry_date","Shopname","Responder1","Responder2","Product","Service","Satisfaction","Comment");

  //$header = array("Entry_date");
 fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF)); 



  fputcsv($file, $header);

  $query = "
  SELECT * FROM survey 
  WHERE entry_date >= '".$_POST["start_date"]."' 
  AND entry_date <= '".$_POST["end_date"]."' 
  ";
  $statement = $connect->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();
  foreach($result as $row)
  {
   $data = array();
   $data[] = $row["product"];
   $data[] = $row["entry_date"];
   $data[] = $row["shopname"];
   $data[] = $row["person1"];
   $data[] = $row["person2"];
   $data[] = $row["scquality"];
   $data[] = $row["scmarket"];
   $data[] = $row["scprice"];
   $data[] = $row["comment"];

 // $data[] = date('d/m/y H:i:s', strtotime($row["action_date"]));
  // $data[] = $row["sales_person"];
  // $data[] = $row["check_entry"];
  // $data[] = str_replace('"', "", $row["customer_name"]);
   
   fputcsv($file, $data);
  }
  fclose($file);
  exit;
 }
}

$query = "
SELECT product,entry_date,shopname,person1,person2,scquality,scmarket,scprice,comment FROM survey
";

$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

?>


<html>

 <head>
 <style>
body {font-family: Arial, Helvetica, sans-serif,Phetsarath OT;}

h1 {
  font-size: 25px;
  color:Black;

}
h3 {
  font-size: 15px;
  color:red;
  

}
.font{
	font-family:phetsarath OT;
}


 </style>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daterange Mysql Data Export to CSV in PHP</title>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
  
 </head>
 <body>
     <div>
     <center>     
     <a href="nav.php"><img src="kplogo.png" alt="Hot Air Balloons" width="70" height="70"></a>
     </center>    
    </div> 
  <div class="container box font">
   <h1 align="center">Customer Survey Result</h1>
   <h3 align="center">Export Customer survey data</h3>
   <br />
   <div class="table-responsive">
    <br />
    <div class="row">
     <form method="post">
      <div class="input-daterange">
       <div class="col-md-4">
        <input type="text" name="start_date" class="form-control" readonly />
        <?php echo $start_date_error; ?>
       </div>
       <div class="col-md-4">
        <input type="text" name="end_date" class="form-control" readonly />
        <?php echo $end_date_error; ?>
       </div>
      </div>
      <div class="col-md-2">
       <input type="submit" name="export" value="Export" class="btn btn-info" />
       <br>
      </div>
     </form>
    </div>
    <br />
    <table class="table table-bordered table-striped">
     <thead>
      <tr>
       <th align="center">Product</th>
       <th align="center">Entry Date</th>
       <th align="center">Shopname</th>
       <th>Respondant1</th>
       <th>Respondant2</th>
       <th>Product</th>
       <th>Service</th>
       <th>Satisfaction</th>
       <th>General Comment</th>
      </tr>
     </thead>
     <tbody>
      <?php
      foreach($result as $row)
      {
       echo '
       <tr>
       <td>'.$row["product"].'</td>
        <td>'.$row["entry_date"].'</td>
        <td>'.$row["shopname"].'</td>
        <td>'.$row["person1"].'</td>
        <td>'.$row["person2"].'</td>
        <td align="center">'.$row["scquality"].'</td>
        <td align="center">'.$row["scmarket"].'</td>
        <td align="center">'.$row["scprice"].'</td>
        <td>'.$row["comment"].'</td>

        
       </tr>
       ';
      }
      ?>
     </tbody>
    </table>
    <br />
    <br />
   </div>
  </div>
 </body>
</html>

<script>

$(document).ready(function(){
 $('.input-daterange').datepicker({
  todayBtn:'linked',
  format: "yyyy-mm-dd",
  autoclose: true
 });
});

</script>