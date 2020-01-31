<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="dist/sweetalert.min.js"></script>
	<title></title>
</head>
<body>

</body>
</html>

<?php 

$name = $_POST["name"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$password = $_POST["password"];

// print_r(htmlspecialchars($name));
// die();

//salting technique
$salt = "djf*iwir£jg".rand(10000,99999)."kjg@g!jkg&gj";
$salted_password = sha1($salt.$password);

$gender = $_POST["gender"];
$subject = $_POST["subject"];

include 'connection_establish.php';

$sql_query = "INSERT INTO teacher_reg(t_name,t_gender,t_address,t_phone,t_email,t_password,subject,rdate,permission,salting_value) values('$name','$gender','$address','$phone','$email','$password','$subject',NOW(),'not granted','$salted_password')";



$result = mysqli_query($con,$sql_query);
if (!$result) {
	echo "<script>swal('This email is already registered', ' ', 'info')
	.then((value) => {
  window.location='index.php';
});

</script>";

}
else{

echo "<script>swal('You are registered as teacher!!!', ' ', 'success')
	.then((value) => {
  window.location='index.php';
});

</script>";

}

mysqli_close($con);
 ?>