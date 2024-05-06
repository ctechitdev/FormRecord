<?php
include_once 'database.php';
//include_once 'database_local.php';
$valueToSearch ="No data";
if(isset($_POST['search']))
{
 
    $valueToSearch = $_POST['valueToSearch'];
	$dp_name = $_POST['dept'];
	
	$data = mysqli_query($conn,"  SELECT * FROM images where staffname like '%$valueToSearch%' and department like '%$dp_name%' 
				 "); 
 
}
 
 

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Menu</title>
    <link rel="stylesheet" href="style3.css">
   <style>
       .th {
  height: 35px;
  vertical-align: center;
  font-size: 15px;
       }

       .button {
  font: bold 11px Arial;
  text-decoration: none;
  background-color: lightblue;
  color: darkblue;
  padding: 8px 24px 8px 24px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
  border-radius: 7px;
}
.myfont {

    font-family: Phetsarath OT;
    padding: 15px;
}
.dropfont{
 
    font-family: Phetsarath OT;
   
}

body {
    font-size: 20px;
}
 .cmpadd {
  padding-top:5px; 
  padding-bottom: 5px; 
}

   </style>   
</head>
    <body>
    <center>
<a href="nav.php"><img src="kplogo.png" alt="Hot Air Balloons" width="70" height="70"></a>
    </center>
 
        <div style="align-text:center">
            <center> <br>
            
            <?php
             echo "Today's Date: " . date("Y/m/d") . "<br>";
            ?>
<br>            

                <h2 style="color: darkblue;" >ATK Result list</h2> <br>
                
        <form action="atkresult_view.php" method="post">
		
		<div class="cmpadd">
            <input type="text" name="valueToSearch" placeholder="Search customer">
			</div>
			
			<div class="space3 dropfont cmpadd"> 
			 <span><b> ພະແນກ  </b> 
			<select name="dept" class="textbox dropfont">
			<option value=""> ເລືອກພະແນກ </option>
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
			<option  value="HR & Admin">HR & Admin</option>
			<option  value="ICT">ICT</option>
			<option  value="Business Support & Development">Business Support & Development</option>
			<option  value="Management SVP-President">Management SVP-President</option>
			<option  value="Others">Others</option>
			<!-- <option  value="KPLG/Shipping">KPLG/Shipping</option>
			<option  value="KPLG/ Logistics">KPLG/ Logistics</option>
			<option  value="KPTL">KPTL</option>
			<option  value="KSP">KSP</option>-->


			</select>
			</span>
			</div>
			
			
			
			<div class="cmpadd">
            <input type="submit" name="search" class= "button"value="Search"><br>
            <p class="myfont"> (ສາມາດຊອກຕາມຊື່, ພະແນກ ຫຼື ຜົນກວດ)</p> <br>
			</div>
			
			</form>
			
            <table>
                <tr >
                    <th class="th myfont">ຮູບຖ່າຍຜົນກວດ</th>
                    <th class="th myfont">ຊື່ພະນັກງານ</th>
                    <th class="th myfont">ພະແນກ</th>
                    <center>
                    <th class="th myfont">ຜົນກວດ</th>
                    </center>
                    <th class="th myfont">ວັນທີອັບໂລດຜົນກວດ</th>
                </tr>

      <!-- populate table from mysql database -->
				
                <?php 
				
				while($row = mysqli_fetch_array($data)){?>
                <tr>
                    
                <?php
                    //echo "<td align='center'><a href='product_detail.php?p_id=$row[p_id]'> <img src='img/" . $row["p_pic"] ." ' width='60'></a></td>";
                    echo "<td  ><img src='uploads/" . $row["file_name"] ." ' width='140' height='70' text-align: center; ></td>";
					?>
                    
                    <td class="myfont"><?php echo $row['staffname'];?></td>
                    <td class="myfont"><?php echo $row['department'];?></td>
                   
                    <td class="myfont"><?php echo $row['checkresult'];?></td>
                    
                    <td class="myfont"><?php echo $row['uploaded_on'];?></td>
                </tr>
                <?php  
				
					}
					
				?>
            </table>
        
                </div>   
                </center>
    </body>
</html>