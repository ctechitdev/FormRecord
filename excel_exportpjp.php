<!DOCTYPE html>
<html lang="en">
<?php

// $host = "localhost";
// $user = "root";
// $pass = "";
// $db   = "pjprecord";
// $conn = null;


$host = "localhost";
$user = "root";
$pass = "";
$db   = "pjprecord";
$connect = null;


try {
	$conn = new PDO("mysql:host={$host};dbname={$db};", $user, $pass);
} catch (Exception $e) {
}
$conn->exec("set names utf8");

 


$get_date_from = $_POST['start_date'];
$from_date = str_replace('/', '-', $get_date_from);
$date_from = date('Y-m-d', strtotime($from_date));

$get_date_to = $_POST['end_date'];
$to_date = str_replace('/', '-', $get_date_to);
$date_to = date('Y-m-d', strtotime($to_date));


$date_report = date("d/m/Y");
error_reporting(0);

?>

<head>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.table2excel.js"></script>
	<script>
		$(document).ready(function() {
			// $("#export_to_excel").click(function(){
			$("#my_table").table2excel({
				exclude: ".noExl",
				name: "Developer data",
				filename: "export-pjp",
				fileext: ".xlsx",
				exclude_img: true,
				exclude_links: true,
				exclude_inputs: true

			}).window.close();


		});
		// });
	</script>
</head>

<body>
	<div class="page-wrapper" id="my_table">
		<?php

		$ouput .= '
		<div class="row" style="font-family: phetsarath OT;">
			<div class="col-12">
				<div class="card" style="padding-left: 10%;">
					<div class="card-block" class="noExl">
						 
 
						
						 ';

		$ouput .= '	<table  style="float: left;" border="1px" class=" table table-bordered table-sm" style="font-size: 20px" style="font-family: phetsarath OT;">
						<head>
					 	
							<tr align="center"> 
							<th class="text-center">NO</th>
							<th class="text-center">Entry time</th> 
							<th class="text-center">Sales person</th>
							<th class="text-center">check entry</th>
							<th class="text-center">Customer name</th> 
							<th class="text-center">Entry date</th> 
							</tr>
						</head>
						<tbody> ';

		$ouput .= '
								<tr>
								 
								 
									';


		$stmt3 = $conn->prepare("select sales_person,check_entry,customer_name,
			date(action_date) as action_date, 
			DATE_FORMAT(action_date, '%H:%i') as action_time 
			from pjpdata
			where entry_date between '$date_from' and '$date_to'  ");
		$stmt3->execute();
		$i = 1;
		if ($stmt3->rowCount() > 0) {
			while ($row = $stmt3->fetch(PDO::FETCH_ASSOC)) {
				
				
		 

				$action_time = $row["action_time"];
				$action_date = $row["action_date"];
				$sales_person = $row["sales_person"];
				$check_entry = $row["check_entry"];
				$customer_name = $row["customer_name"];
				




				$ouput .= '
											<tr> ';

				$ouput .= '
											
											<td>' . ($i) . '</td> 
											<td>' . ($action_time) . '</td> 
											<td>' . ($sales_person) . '</td> 
											<td>' . ($check_entry) . '</td> 
											<td>' . ($customer_name) . '</td>
											<td>' . ($action_date) . '</td> 
										 
											</tr>
										 
													
									 
											';
		?>
		<?PHP




				$i++;
			}
		}
		$ouput .= '
								</tr>
								';


		?>

		<?php
		$ouput .= '
									</tbody>
								</table>
							<div class="card-body">
							';


		$ouput .= ' 
						</div>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		';
	 
		header('Content-Type: application/xlsx');
		header('Content-Disposition: attachment; filename=pjpexport.xlsx');
		echo $ouput;
		?>
	</div>


</body>

</html>