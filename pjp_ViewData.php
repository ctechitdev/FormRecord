<!DOCTYPE html>
<html>
<head>
<title>PJP DATA</title>

<!--<link rel="stylesheet" href="style3.css">-->
<style>
table, td, th {
  border: 1px solid;
}

table {
  width: 100%;
  border-collapse: collapse;
}

td {
  width: 1.5em;
  height: 1.5em;
  padding-left: 20px;
  vertical-align: middle;
}

.30 {
	width: 30%
}

.20 {
	width: 20%	
}
    
.position {
	text-align:center;
}



</style
</head>
<body>
<div>
<h3 >KP COMPANY LIMITED</h3>
</div>
<div>
<h2 style="text-align:center">Data View PJP Data</h2> <BR>
	<form method="POST">
		<label>From: </label><input type="date" name="from">
		<label>To: </label><input type="date" name="to">
		<input type="submit" value="Get Data" name="submit">
	</form>
<br>

	<table >
	<colgroup>
       <col span="1" style="width: 20%;">
       <col span="1" style="width: 25%;">
       <col span="1" style="width: 15%;">
	   <col span="1" style="width: 40%;">
    </colgroup>


		 <thead>
			<th class="30">Action date</th>
			<th >Sales person</th>
			<th >Check entry</th>
			<th >Check Customer</th>
		</thead>
		<tbody>
		<?php
			if (isset($_POST['submit'])){
				//include('database.php');
				include('database.php');
				 
				
				$get_date_from = $_POST['from']; 
				$from_date = str_replace('/', '-', $get_date_from);
				$from = date('Y-m-d', strtotime($from_date));
				
				
				$get_date_to = $_POST['to']; 
				$to_date = str_replace('/', '-', $get_date_to);
				$to = date('Y-m-d', strtotime($to_date));	
				
				
				//MySQLi Procedural
				//$oquery=mysqli_query($conn,"select * from `login` where login_date between '$from' and '$to'");
				//while($orow=mysqli_fetch_array($oquery)){
				/*	?>
					<tr>
						<td><?php echo $orow['logid']?></td>
						<td><?php echo $orow['username']?></td>
						<td><?php echo $orow['login_date']?></td>
					</tr>
					<?php */
				//}
				
				//MySQLi Object-oriented
				$oquery=$conn->query(" select sales_person,check_entry,customer_name,
				concat(date(action_date),'-',DATE_FORMAT(action_date, '%H:%i')) as date_action
				from pjpdata   where Entry_date between '$from' and '$to'");
				while($orow = $oquery->fetch_array()){
					?>
                   
					<tr>
						<td ><?php echo $orow['date_action']?></td>
						<td><?php echo $orow['sales_person']?></td>
						<td class="position"><?php echo $orow['check_entry']?></td>
						<td><?php echo $orow['customer_name']?></td>
					</tr>
					<?php 
				}
			}
		?>
		</tbody>
	</table>

</div>
</body>

</html>