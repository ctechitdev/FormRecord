<?php
 
require 'database.php';
					
					
					
if(isset($_POST["search"]))  
	{
		$valueToSearch =  ($_POST['valueToSearch']);
		$query = mysqli_query($conn,"  SELECT * FROM customers where customername like '%$valueToSearch%' or  salescode like '%$valueToSearch%'");
	}else{
		$query = mysqli_query($conn, "SELECT * FROM customers ") or die(mysqli_error());
	}


?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  <script src="libfile/js/jquery-3.2.1.min.js"></script>	
<script src="libfile/js/bootstrap.js"></script>	
 
 
<title>PJP RECORD</title>
<script src="js/invoice.js"></script>
<link href="css/newstyle.css" rel="stylesheet">

<head>
		<meta charset="UTF-8" name="viewport" content="width-device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
	
<body>	
 </head>
<body class="">
 
	
	<div class="container " style="min-height:500px;">
	<div class='' align = 'center'>
	<a href="nav.php"><img src="kplogo.png" alt="Hot Air Balloons" width="70" height="70"></a> 
	
	<h2 style="color: darkblue;" >Tyre product: Customer list</h2> <br>	 
				
					<form action="" method="post">
					<input type="text" name="valueToSearch" id ="valueToSearch" placeholder="Search customer">
					<input type="submit" name="search" value="Search"><br><br><br>
					<a href="nav.php" class="button">Home</a>
					</form>
	</div>
	<div class="container">		 
	  

  
	<div class="col-md-12">
 
 
		<table class="table table-bordered">
			<thead class="alert-success">
				<tr>
					<th>Customer</th>
					<th>sales Person Code</th>
					<th>PJP Day</th> 
					<th>Edit</th> 
				</tr>
			</thead>
			<tbody style="background-color:#fff;">
				<?php
					
					while($fetch = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $fetch['customername']?></td>
					<td><?php echo $fetch['salescode']?></td>
					<td><?php echo $fetch['Cday']?></td> 
					<td><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?php echo $fetch['id']?>">
					<span class="glyphicon glyphicon-edit"></span> Edit </button></td>
				</tr>
				<?php
					
					include 'modal_view_cus.php';
					
					}
				?>
			</tbody>
		</table>
	</div>
	 
	</div>	
	</div>	

</body>	
		

	  
 <div class="insert-post-ads1" style="margin-top:20px;">

</div>
</div>
</body></html>


 



