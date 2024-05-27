<?php
//include_once 'database.php'; 
include_once 'database.php';


$valueToSearch = "No data";
if (isset($_POST['search'])) {
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
    <body>
    <center>
<a href=" nav.php"><img src="kplogo.png" alt="Hot Air Balloons" width="70" height="70"></a>
    </center>

    <div>
        <center> <br>

            <?php
            echo "Today's Date: " . date("Y/m/d") . "<br>";
            ?>
            <br>

            <h2 style="color: darkblue;">Result of satisfaction survey</h2> <br>
            <form action="sur_ViewData_int.php" method="post">
                <input type="text" name="valueToSearch" placeholder="Search customer">
                <input type="submit" name="search" value="Search"><br><br>

                <div align="center">
                    <a href="sur_ExportData.php" class="btn btn-info">Export</a> <br>
                </div>
                <br>

                <table>
                    <tr>
                        <th class="th">ວັນທີ</th>
                        <th class="th">ຊື່ຜຸ້ຕອບ</th>
                        <center>
                            <th class="th">ພະແນກຜູ້ຕອບ</th>
                        </center>
                        <th class="th">ພະແນກຜູ້ຖືກຕອບ</th>
                        <center>
                        </center>
                        <th class="th">1.ດ້ານຂະບວນການ</th>
                        <center>
                        </center>
                        <th class="th">2.ດ້ານຄວາມສາມາດ</th>
                        <center>
                            <th class="th">3.ຂໍ້ສະດວກ</th>
                            <th class="th">4.ຄວາມຊັດເຈນ</th>
                            <th class="th">5.ມີຄວາມເອົາໃຈໃສ່</th>
                            <th class="th">6.ມີຄວາມຮູ້, ຄວາມເຂົ້າໃຈ</th>
                            <th class="th">7.ມະນຸດສໍາ,ສຸພາບ ແລະ ເປັນມິດ</th>
                            <th class="th">8.ຄວາມຮູ້ສຶກຕໍ່ພາບລວມ</th>
                            <th class="th">9.ຄໍາແນະນໍາ</th>





                            <center>
                    </tr>

                    <!-- populate table from mysql database -->

                    <?php
                    $data = mysqli_query($conn, "  SELECT * FROM survey_int
                where Entry_date like '%$valueToSearch%' or  dept like '%$valueToSearch%' or  dept2 like '%$valueToSearch%' 
				or  convinient like '%$valueToSearch%' ");
                    while ($row = mysqli_fetch_array($data)) { ?>




                        <tr>
                            <td class="name"><?php echo $row['entry_date']; ?></td>
                            <td class="name"><?php echo $row['responder']; ?></td>
                            <td class="name"><?php echo $row['dept']; ?></td>
                            <td class="name"><?php echo $row['Dept2']; ?></td>
                            <td class="name"><?php echo $row['proceedanstep']; ?></td>
                            <td class="name"><?php echo $row['skilltoserve']; ?></td>
                            <td class="name"><?php echo $row['convinient']; ?></td>

                            <td class="name"><?php echo $row['clearexplain']; ?></td>
                            <td class="name"><?php echo $row['intendtoserve']; ?></td>
                            <td class="name"><?php echo $row['haveknowledge']; ?></td>

                            <td class="name"><?php echo $row['humanrelate']; ?></td>
                            <td class="name"><?php echo $row['generalview']; ?></td>
                            <td class="name"><?php echo $row['comment']; ?></td>





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