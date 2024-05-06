<?php

include('database.php');
	if(isset($_POST["Search"]))  
	{
 
	
	$cus_name =  ($_POST['customername']);
	
	$query=mysqli_query($conn,"select * from `customers` where customername like '%$cus_name%' order by id desc");
	}else{
	$query=mysqli_query($conn,"select * from `customers` order by id desc");	
	}
	
	if(isset($_POST["add"]))  
	{
	$customername=$_POST['customername'];
	$salescode=$_POST['salescode'];
	$day=$_POST['day'];
		
	mysqli_query($conn,"insert into `customers` (customername,salescode,Cday) values ('$customername','$salescode','$day')");
	header('location:pjp_maintain.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>

    <link rel="stylesheet" href="style.css">

	<style>
body {
         background-color: whiteblue;
         font-family: Arial, Helvetica, sans-serif,Saysettha OT;
    }

    .container{
        background-color: lightblue;
        box-shadow: 1px 1px 2px 1px grey;
        padding: 50px 8px 20px 38px;
        width: 35%;
        height:50%;
        margin-left:35%;

    }

    .txt1 {
    width: 28%;
    height:1%;
    border:1px solid brown;
    border-radius:05px;
    padding: 5px 7px 5px 7px;
    margin:10px 0px 15px 0px;
}

.txt2 {
    width: 10%;
    height:1%;
    border:1px solid brown;
    border-radius:05px;
    padding: 5px 7px 5px 7px;
    margin:10px 0px 15px 0px;
}

.txt3 {
    width: 8%;
    height:1%;
    border:1px solid brown;
    border-radius:05px;
    padding: 5px 7px 5px 7px;
    margin:10px 0px 15px 0px;
}

.center1 {
	text-align: center;
}


.button {
  padding: 5px 25px;
  font-size: 12px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: yellow;
  background-color: darkblue;
  border: none;
  border-radius: 5px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

h3 {text-align: center;color:blue;}

thead {
  margin: 20px auto;
  padding: 0;
  width: 990px;
}

.name {
  text-align: left;
  padding-left: 16px;
}

thead
	{
		height:40px;
		font-size: 16px;
		color:black
	}




</style>




</head>
<body>

	<div>
	<center>
			<h1>Maintain customer data</h1>
    </div>
	<h2>Input/Edit/Delete customer data  </h2>	
	 <br><br>
	<div>
	
		<form method="POST"  >
		<button type="submit" name="Search"   class="button">Search</button>
		    <label>Customer:</label><input type="text" CLASS="txt1" name="customername" id="customername" >
			<label>salescode:</label><input type="text" CLASS="txt2" name="salescode"> 
			<label>Day:</label><input type="text" CLASS="txt3" name="Cday">
			<input type="submit" CLASS="button" name="add">
			

		</form>
	</div>
	<br>
	<div>
		<table border="1">
			<thead>
				<th class="name">Customer name</th>
				<th class="name">Sales person code</th>
				<th class="name" >Day</th>
				<th class="name" >Task</th>
				<th></th>
			</thead>
			<tbody>
				<?php
							
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td class="name"><?php echo $row['customername']; ?></td>
							<td class="center1"><?php echo $row['salescode'];
							
							?></td>
							<?php 
							
							?>
							<td><?php echo $row['Cday']; ?></td>
							

							<td>
								<a class="name" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
								<a class="name2" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
				
	</div>
	</center>
</body>
</html>