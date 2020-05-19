<!DOCTYPE html>
<html>
<head>
	<title>Password Recovery</title>
	<script type="text/javascript" src="dist/sweetalert.min.js"></script>
</head>
<body>
<?php
$pin = $_POST['pin'];

include 'connection_establish.php';

$sql = "SELECT number FROM random ORDER BY id DESC limit 0,1";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
if ($row['number']==$pin) {
	session_start();
	$_SESSION["forpin"]="safal";
	echo "<script>window.location='password_updateform.php';</script>";
}
else{
	echo "<script>swal('Pin does not matched', '', 'warning')
	.then((value) => {
  window.location='input_pin.php';
});

</script>";
}

mysqli_close($con);

?>
</body>
</html>
