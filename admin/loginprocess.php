<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="dist/sweetalert.min.js"></script>
</head>
<body>

</body>
</html>
<?php
$uname = $_POST['email'];
$pass = $_POST['password'];

//privant from mysql_injection

// $uname = stripcslashes($uname);
// //$uname = mysql_real_escape_string($uname);
// $pass = stripcslashes($pass);
// $pass = mysql_real_escape_string($pass);
include 'connection_establish.php';
// selecting database
$sql = "SELECT * FROM admin_account where email='$uname' AND password ='$pass'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

if($row['email']==$uname && $row['password']==$pass)
{
	session_start();
	$_SESSION["admin"] = $uname;
	 echo'<script>window.location="index.php"</script>';
	
}
else
{
	echo "<script>swal('Incorrect email or password!!!', '', 'error')
	.then((value) => {
  window.location='login.php';
});

</script>";
}
?>

