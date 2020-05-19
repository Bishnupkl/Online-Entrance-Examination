<?php
$Date= $_POST['date'];
$sname=$_POST['service'];
$icon=$_POST['icon'];
$details=$_POST['editor1'];
$image=$_FILES['fileToUpload'] ['name'];
$tmp_name=$_FILES['fileToUpload'] ['tmp_name'];
$target_dir = "serviceuploads/".$image;


$Date = stripcslashes($Date);
$sname = stripcslashes($sname);
$details = stripcslashes($details);
$icon=stripcslashes($icon);
$image = stripcslashes($image);


include 'connect.php';
$sql = "INSERT INTO service (Date,service,icon, details,image ) VALUES ('$Date','$sname','$icon','$details' ,'$image')";
if ($conn->query($sql) === TRUE) {
	move_uploaded_file($tmp_name, $target_dir);
	echo"<script>window.alert('Inserted succesfully');</script>";
 echo "<script>window.location='productadd.php';</script>";
   } else {
    echo "Error: " . $conn->error;
}

$conn->close();



 ?>
