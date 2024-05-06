<?php
$servername='localhost';
$username='kplaocom';
$password='0n8fRMmIFV1F';
$dbname = "kplaocom_pjprecord";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>