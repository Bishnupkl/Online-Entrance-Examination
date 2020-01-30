<?php session_start();
$email = $_SESSION['email'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="dist/sweetalert.min.js"></script>
</head>
<body>
<?php 
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if ($password!=$cpassword) {
	
	echo "<script>window.location='password_updateform.php';</script>";
	exit();
	
}

include 'connection_establish.php';

$sql = "UPDATE stu_reg SET password='$password' WHERE email='$email'";
$result = mysqli_query($con,$sql);
if (!$result) {
	echo mysqli_error();
}

else{

	echo "<script>swal('Your password is changed ', '', 'success')
	.then((value) => {
  window.location='login.php';
});

</script>";
}


mysqli_close($con);


?>
</body>
</html>
