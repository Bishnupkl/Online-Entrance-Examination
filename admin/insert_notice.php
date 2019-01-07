

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="dist/sweetalert.min.js"></script>
</head>
<body>

	<?php  

// $Date= $_POST['date'];
$nhead=$_POST['name'];
//$ndescription=$_POST['editor1'];
$ntext=$_POST['text'];
$ndescription=$_POST['description'];
// $image=$_FILES['fileToUpload'] ['name'];
// $tmp_name=$_FILES['fileToUpload'] ['tmp_name'];
// $target_dir = "notice_images/".$image;

//privant from mysql_injection

// $Date= $_POST['date'];
// $nhead=$_POST['name'];
// $ndescription=$_POST['editor1'];
// $image = stripcslashes($image);
// $Date = mysqli_real_escape_string($conn,$Date);

// end of privant from mysql_injection

include 'connection_establish.php';
$sql = "INSERT INTO notice (n_date,n_heading,n_text,n_description) VALUES(NOW(),'$nhead','$ntext','$ndescription')";
$result=mysqli_query($con,$sql);
if ($result) {
	//move_uploaded_file($tmp_name, $target_dir);
	echo"<script>swal('Inserted successfully','', 'success')
	.then((value) => {
  window.location='addnotice.php';
});
</script>";
   } else {
    echo "Error".mysqli_error();
	}

mysqli_close($con);



 ?>

</body>
</html>

