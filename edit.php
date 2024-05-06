<?php
	include('database.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `customers` where id='$id'");
	$row=mysqli_fetch_array($query);
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
        width: 27%;
        height:50%;
        margin-left:35%;

    }

    .txt1 {
    width: 25%;
    height:1%;
    border:1px solid brown;
    border-radius:05px;
    padding: 5px 7px 5px 7px;
    margin:10px 0px 15px 0px;
}

.txt2 {
    width: 5%;
    height:1%;
    border:1px solid brown;
    border-radius:05px;
    padding: 5px 7px 5px 7px;
    margin:10px 0px 15px 0px;
}

.txt3 {
    width: 4%;
    height:1%;
    border:1px solid brown;
    border-radius:05px;
    padding: 5px 7px 5px 7px;
    margin:10px 0px 15px 0px;
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

</style>



</head>
<body>
	<h1>Edit Customer data</h1>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>customername:</label><input type="text" CLASS="txt1" value="<?php echo $row['customername'];?>" name="customername">
		<label>salescode:</label><input type="text" CLASS="txt2" value="<?php echo $row['salescode']; ?>" name="salescode">
		<label>Day:</label><input type="text" CLASS="txt3" value="<?php echo $row['Cday']; ?>" name="Cday">
		<input type="submit" CLASS="button" name="submit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>