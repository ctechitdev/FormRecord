<?php

 
include_once 'db/connect2.php';



if (isset($_POST["search"])) {

  $start_date = $_POST['start_date'];
  $end_date = $_POST['end_date'];

  $query = " SELECT sales_person,check_entry,customer_name,
			date(action_date) as action_date, 
			DATE_FORMAT(action_date, '%H:%i') as action_time
			FROM pjpdata 
			where entry_date between '$start_date' and '$end_date' ";
} else {
  $query = " SELECT sales_person,check_entry,customer_name,
			date(action_date) as action_date, 
			DATE_FORMAT(action_date, '%H:%i') as action_time
			FROM pjpdata ";

  $start_date = date("Y-m-d");
  $end_date = date("Y-m-d");
}

$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();


?>


<html>

<head>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif, Phetsarath OT;
    }

    h1 {
      font-size: 25px;
      color: Black;

    }

    h3 {
      font-size: 15px;
      color: red;


    }

    .font {
      font-family: phetsarath OT;
    }
  </style>

  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.table2excel.js"></script>
  <script>
    $(document).ready(function() {
      // $("#export_to_excel").click(function(){
      $("#my_table").table2excel({
        exclude: ".noExl",
        name: "Developer data",
        filename: "coderszine_table_data",
        fileext: ".xls",
        exclude_img: true,
        exclude_links: true,
        exclude_inputs: true

      }).window.close();


    });
    // });
  </script>

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
              <input type="text" name="start_date" value='<?php echo "$start_date" ?>' class="form-control" readonly required />

            </div>
            <div class="col-md-4">
              <input type="text" name="end_date" value='<?php echo "$end_date" ?>' class="form-control" readonly required />

            </div>
          </div>
          <div class="col-md-2">
            <input type="submit" name="search" value="search" class="btn btn-info" />

            <button type="submit" formaction="excel_exportpjp.php" class="btn btn-primary mb-2 btn-pill" formtarget="_blank">export</button>
          </div>
        </form>
      </div>
      <br />
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>NO</th>
            <th>Entry time</th>
            <th>Sales person</th>
            <th>check_entry</th>
            <th>Customer name</th>
            <th>Entry date</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          foreach ($result as $row) {

          ?>
            <tr>
              <td><?php echo "$i"; ?> </td>
              <td><?php echo $row["action_time"]; ?> </td>
              <td><?php echo $row["sales_person"]; ?> </td>
              <td><?php echo $row["check_entry"]; ?> </td>
              <td><?php echo $row["customer_name"]; ?> </td>
              <td><?php echo $row["action_date"]; ?> </td>
            </tr>
          <?php


            $i++;
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
  $(document).ready(function() {
    $('.input-daterange').datepicker({
      todayBtn: 'linked',
      format: "yyyy-mm-dd",
      autoclose: true
    });
  });
</script>