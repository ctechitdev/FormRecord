<?php
include_once 'database.php';
//include_once 'database_local.php';
if(isset($_POST['save']))
{	 
	$staff=$_POST['staffname']; 
  $dept=$_POST['dept']; 
  $appname=$_POST['appname']; 
	 
	 $sql = "INSERT INTO appnametbl (name,dept,appname)
	 VALUES ('$staff','$dept','$appname')";
	 if (mysqli_query($conn, $sql)) {
    echo "<div align='right'>";
		echo "ຂໍ້ມູນຂອງທ່ານໄດ້ຖືກບັນທຶກແລ້ວ ຂອບໃຈ !";
    echo "</div>";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);	 
}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  font-family:phetsarath OT;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<div style ="text-align:center; color:red;">
<h2>ຟອມຕັ້ງຊື່ ແອບ ບໍລິສັດເຄພີ ຈຳກັດ</h2>
</div>
<p></p>

<div class="container">
  <form method="POST" >
    <div class="row">
      <div class="col-25">
        <label for="name">ຊື່ ແລະ ນາມສະກຸນ ຂອງທ່ານ</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="staffname" placeholder="Your name..">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="dept">ພະແນກ</label>
      </div>
      <div class="col-75">
        <select name="dept">
        <option value="" disabled selected></option>
        <option value="Sales Unilever">Sales Unilever</option>
        <option value="Sales Fitne">Sales Fitne</option>
        <option value="Sales Phubia">Sales Phubia</option>
        <option value="Sales Unicharm">Sales Unicharm</option>
        <option value="Sales Bridgestone & MT">Sales Bridgestone & MT</option>
        <option value="Sales Tyres Center">Sales Tyres Center</option>
        <option value="Sales Yamaha">Sales Yamaha</option>
        <option  value="Sales Kubota & Fetilizer">Sales Kubota & Fetilizer</option>
        <option  value="Sales Kubota Tractor">Sales Kubota Tractor</option>
        <option  value="Sales Shell">Sales Shell</option>
        <option  value="Sales TOTO">Sales TOTO</option>
        <option  value="Account & Finance">Account & Finance</option>
        <option  value="HR">HR</option>
        <option  value="ICT">ICT</option>
        <option  value="Business Support & Development">Business Support & Development</option>
        <option  value="Management SVP-President">Management SVP-President</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="appname">ຊື່ແອປ</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="appname" placeholder="App Name">
      </div>
    </div>

    <div class="row">
      <!--<input type="submit" name="submit" value="Submit">-->
      <input class=button type="submit" name="save" value="submit">


    </div>
  </form>
</div>

</body>
</html>
