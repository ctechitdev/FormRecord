<?php
include_once 'database.php';

$valueToSearch ="No data";
	  if(isset($_POST['search']))
{  
 
	$valueToSearch = $_POST['valueToSearch'];
}else{
	
}

?>
 
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PJP RECORD</title>
    <link rel="stylesheet" href="style3.css">
   <style>
       .th {
  height: 35px;
  vertical-align: center;
  font-size: 15px;
   </style>    
</head>
    <body>
    <center>
<a href="nav.php"><img src="KPLOGO.png" alt="Hot Air Balloons" width="70" height="70"></a>
    </center>
 
			<div>
				<center> <br>

				<?php
				echo "Today's Date: " . date("Y/m/d") . "<br>";
				?>
				<br>            

				<h2 style="color: darkblue;" >Tyre product: Customer list</h2> <br>
					<form action="" method="post">
					<input type="text" name="valueToSearch" placeholder="Search customer">
					<input type="submit" name="search" value="Search"><br><br>

					<table>
					<tr>
					<th class="th">Customer</th>
					<th class="th">sales Person Code</th>

					</tr>

					<!-- populate table from mysql database -->
					<?php 
					$data = mysqli_query($conn,"  SELECT * FROM salesperson "); 
					while($row = mysqli_fetch_array($data)){ 
					
					
					?>
					<tr>
					<td class="name"><?php echo $row['salesname'];?></td>
					<td class="name"><?php echo $row['s_scode'];?></td>
                    
					</tr>
					<?php  
 
					}
					
					?>
					 					
					
					</table>
					</form>
				</center>
			</div>   
               

              

 



    </body>
</html>