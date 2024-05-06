<?php
include_once 'database.php';
//include_once 'database_local.php';
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
   <!-- <link rel="stylesheet" href="style3.css">-->
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
    font-family:Phetsarath OT;
}
.mysize {
    font-size: 11px;
}

.table {
    margin: 0 auto;
    width: 80%;
}



   </style>   
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>



</head>
    <body>
    <center>
<a href="nav.php"><img src="kplogo.png" alt="Hot Air Balloons" width="70" height="70"></a>
    </center>
 
        <div>
            <center>
            
            <?php
             echo "Today's Date: " . date("Y/m/d") . "<br>";
            ?>
          

                <p style="color: darkblue;" >Shell product: Order Records</p> 
        <form action="OT_ViewData.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Order Records">
            <input type="submit" name="search" value="Search"><br><br>
            <div class="container">
            <table class="table table-light">
            <thead class="thead-dark"  >        
                <tr class="table-info mysize" >
                    <th style="width: 7%" text-align:center>Order ID</th>
                    <th style="width: 8%">Date</th>
                    <th style="width: 22%">Sales person</th>
                    <center>
                    <th style="width: 27%"">Customer</th>
                    </center>
                    <th style="width: 33%">item</th>
                    <th style="width: 5%">Unit</th>
                    <th style="width: 5%">Quantity</th>
                  
                    
                </tr>
</thead>
      <!-- populate table from mysql database -->
				
                <?php 
                $date=date_create("entry_date");
				$data = mysqli_query($conn,"  SELECT * FROM otdata where  entry_date like '%$valueToSearch%' or  salesname like '%$valueToSearch%' or  customer like '%$valueToSearch%' 
				or  orderid like '%$valueToSearch%'  order by orderid desc "); 
				while($row = mysqli_fetch_array($data)){?>
                <tr class="mysize h-25" >
                    <td><?php echo $row['orderid'];?></td>
                    <td ><?php echo $row['entry_date'];?></td>

                  
                    
                    <td ><?php echo $row['salesname'];?></td>
                   
                    <td class="myfont"><?php echo $row['customer'];?></td>
                    
                    <td ><?php echo $row['item'];?></td>
                    <td ><?php echo $row['unit'];?></td>
                    <td ><?php echo $row['qty'];?></td>
            
                   

                  
                </tr>
                <?php  
				
					}
					
				?>
            </table>
                </div>
        </form>
                </div>   
                </center>
    </body>
</html>