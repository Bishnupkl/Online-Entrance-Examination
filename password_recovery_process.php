<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="dist/sweetalert.min.js"></script>
</head>
<body>

<?php 
include 'connection_establish.php';

$email = $_POST['email'];

$sql = "SELECT email FROM stu_reg WHERE email= '$email' ";

$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

if (!$result) {
	echo mysqli_error();
}
if($row[0]==$email){
	session_start();
	$_SESSION["email"]=$email;
	echo "<script>window.location='sending_pin.php';</script>";

}
else{
	// echo "<script>window.alert('enter your valid email that you use before');</script>";
	// echo "<script>window.location='password_recovery.php';</script>";

	echo "<script>swal('Enter your email that you used before', '', 'info')
	.then((value) => {
  window.location='password_recovery.php';
});

</script>";
}


mysqli_close($con);


?>
</body>
</html>
