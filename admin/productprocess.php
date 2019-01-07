<?php
$Date= $_POST['date'];
$pname=$_POST['name'];
$description=$_POST['editor1'];
$image=$_FILES['fileToUpload'] ['name'];
$tmp_name=$_FILES['fileToUpload'] ['tmp_name'];
$target_dir = "productuploads/".$image;

//privant from mysql_injection

$Date = stripcslashes($Date);
$pname = stripcslashes($pname);
$description = stripcslashes($description);
$image = stripcslashes($image);
// $Date = mysqli_real_escape_string($conn,$Date);

// end of privant from mysql_injection
include 'connect.php';
$sql = "INSERT INTO product (Date,productname, productimage, description) VALUES ('$Date','$pname', '$image','$description')";
if ($conn->query($sql) === TRUE) {
	move_uploaded_file($tmp_name, $target_dir);
	echo"<script>window.alert('Inserted succesfully');</script>";
 echo "<script>window.location='productadd.php';</script>";
   } else {
    echo "Error: " . $conn->error;
}

$conn->close();



 ?>