<?php
include_once 'database.php';

$k=$_POST['id'];
$k=trim($k);
$con = mysqli_connect("localhost","root","","pjp_record");
$sql = "select * from otorderdetails where salesperson='{$k}' order by id desc";
$res = mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($res)) {
    ?>
<tr>
<td style="text-align:center;"><?php echo $row['id'];?></td>
<td ><?php echo $row['entry_date'];?></td>
<!--<td ><?php echo $row['salesperson'];?></td>-->
<td class="myfont"><?php echo $row['customername'];?></td>
<td> <?php echo $row['itemname'];?></td>
<td ><?php echo $row['itempacking'];?></td>
<td style="text-align:right;" ><?php echo $row['itemquantity'];?></td>
</tr>

<?php
}
echo $sql;
?>