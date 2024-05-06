<?php
$k=$_POST['id'];
$k=trim($k);

include_once 'database.php';
$data = mysqli_query($conn,"  select * from appnametbl where dept='{$k}' order by id desc "); 
				 
				 
				 while($row = mysqli_fetch_array($data)){
					 
					 ?>
					 
						<tr> 
						<td ><?php echo $row['edate'];?></td>
						<td ><?php echo $row['name'];?></td>
						<td ><?php echo $row['dept'];?></td>-->
						<td class="myfont"><?php echo $row['appname'];?></td>
						</tr>
					 
					 <?php
					 
				 }


 
?>