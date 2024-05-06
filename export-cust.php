<?php


 
$username = 'kplaocom';
$password = '0n8fRMmIFV1F';
$connect = new PDO( 'mysql:host=localhost;dbname=kplaocom_pjprecord', $username, $password );



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
  $file_name = 'pjp Data.csv';
  
  header('Content-Encoding: UTF-8');
  header("Content-Description: File Transfer");
  header("Content-Disposition: attachment; filename=$file_name"); 
 
  
  $file = fopen('php://output', 'w');

  $header = array("Entry_date","action_date", "sales_person", "check_entry", "customer_name");

 fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF)); 



  fputcsv($file, $header);

  $query = "select * from customers";
  $statement = $connect->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();
  foreach($result as $row)
  {
   $data = array();
   $data[] = $row["id"];
  $data[] = $row["customername"];
   $data[] = $row["salescode"];
   $data[] = $row["Cday"]; 
   
   fputcsv($file, $data);
  }
  fclose($file);
  exit;
 }
}

$query = "
SELECT * FROM pjpdata
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
   <h1 align="center">Bridgestone Tyres</h1>
   <h3 align="center">Export pjp data</h3>
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
      </div>
     </form>
    </div>
    <br />
    <table class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Entry time</th>
       <th>Sales person</th>
       <th>check_entry</th>
       <th>Customer name</th>
       <th>Entry date</th>
      </tr>
     </thead>
     <tbody>
      <?php
      foreach($result as $row)
      {
       echo '
       <tr>
        <td>'.$row["action_date"].'</td>
        <td>'.$row["sales_person"].'</td>
        <td>'.$row["check_entry"].'</td>
        <td>'.$row["customer_name"].'</td>
        <td>'.$row["Entry_date"].'</td>
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