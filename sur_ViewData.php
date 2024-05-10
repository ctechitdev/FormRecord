<?php
//include_once 'database.php'; 
include_once 'database_local.php'; 

$valueToSearch ="No data";
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
 
}
 
 

?>

<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Menu</title>
    <link rel="stylesheet" href="style3.css"">
   <style>
       .th {
  height: 35px;
  vertical-align: center;
  font-size: 13px;
  color:white;
  background:darkblue;
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

   </style>   
</head>
    <body style="font-family:Phetsarath OT;">
    <center>
<a href="nav.php"><img src="kplogo.png" alt="Hot Air Balloons" width="70" height="70"></a>
    </center>
 
        <div>
            <center> <br>
            
            <?php
             echo "Today's Date: " . date("Y/m/d") . "<br>";
            ?>
<br>            

                <h2 style="color: darkblue;" >Result of satisfaction survey</h2> <br>
        <form action="sur_ViewData.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Search customer">
            <input type="submit" name="search" value="Search"><br><br>

            <div align="center">
            <a href="sur_ExportData.php" class="btn btn-info">Export</a> <br>
            </div> 
            <br>

            <table>
                <tr>
                    <th class="th">ວັນທີ</th>
                    <th class="th">ສິນຄ້າ</th>
                    <th class="th">ຊື່ຮ້ານ</th>
                    <center>
                    <th class="th">ຜູ້ຕອບຄົນທີ1</th>
                    </center>
                    <th class="th">ຜູ້ຕອບຄົນທີ2</th>
                    <center>
                    </center>
                    <th class="th">ພະນັກງານຂາຍ</th>
                    <center>                                       
                    <th class="th">ສິນຄ້າ</th>
                    <th class="th">ການບໍລິການ</th>
                    <th class="th">ຄວາມເພີງພໍໃຈ</th>
                    <th class="th">ຄວາມຄິດເຫັນໂດຽລວມ</th>
                    <center>
                </tr>

      <!-- populate table from mysql database -->
				
                <?php 
				$data = mysqli_query($conn,"  SELECT * FROM survey
                where Entry_date like '%$valueToSearch%' or  shopname like '%$valueToSearch%' or  scquality like '%$valueToSearch%' 
				or  scmarket like '%$valueToSearch%' or  comment like '%$valueToSearch%'"); 
				while($row = mysqli_fetch_array($data)){?>
                <tr>
                    <td class="name"><?php echo $row['entry_date'];?></td>
                    <td class="name"><?php echo $row['product'];?></td>
                    <td class="name"><?php echo $row['shopname'];?></td>
                    <td class="name"><?php echo $row['person1'];?></td>
                    <td class="name"><?php echo $row['person2'];?></td>
                    <td class="name"><?php echo $row['salesperson'];?></td>
                    <td class="name2"><?php echo $row['scquality'];?></td>
                    <td class="name2"><?php echo $row['scmarket'];?></td>
                    <td class="name2"><?php echo $row['scprice'];?></td>
                    <td class="name"><?php echo $row['comment'];?></td>
                </tr>
                <?php  
				
					}
					
				?>
            </table>
        </form>
                </div>   
                </center>
    </body>
</html>