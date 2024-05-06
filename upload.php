<?php
 
$dbHost     = "localhost";
$dbUsername = "kplaocom";
$dbPassword = "0n8fRMmIFV1F";
$dbName     = "kplaocom_pjprecord";

 


// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
 
$db -> set_charset("utf8");

$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $staffname=$_POST['username'];
    $department=$_POST['dept'];
    $checkresult=$_POST['checkresult'];
    $comment=$_POST['comment'];
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
	
	 $data = mysqli_query($db," select max(id+1) as pic_id from images "); 
				while($row = mysqli_fetch_array($data)){
					$pic_id =  $row['pic_id'];
				}
	$name_pic = "$pic_id.$fileType";
	
	
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
		
		
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetDir.$name_pic)){
			 
            // Insert image file name into database
            //$insert = $db->query("INSERT into images (staffname,file_name, uploaded_on) VALUES ('$staffname','".$fileName."', NOW())");
           $insert = $db->query("INSERT into images (staffname,department,checkresult,comment,file_name, uploaded_on) VALUES ('$staffname','$department','$checkresult','$comment','".$name_pic."', NOW())");
            if($insert){
                $statusMsg = "The file ".$name_pic. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>