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

$fatname = $_POST["fatname"];

$dob = $_POST["dob"];

$phone = $_POST["phone"];
// print_r($phone);

$email = $_POST["email"];

$password = $_POST["password"];



//salting technique
$salt = "djf*iwir£jg".rand(10000,99999)."kjg@g!jkg&gj";
$salted_password = sha1($salt.$password);
$gender = $_POST["gender"];
$datesasa=date("Y-m-d");
$con = mysqli_connect("localhost","20nu","20nu","oee");

if (!$con) {
	die("connection could not be established".mysqli_error());

}



// inserting data into database oee

// $sql_query = "INSERT INTO stu_reg(name,address,fatname,dob,phone,email,password,reg_date,gender,exam_status,salting_value) values($name,$address,$fatname,$dob,$phone,$email,$password,$datesasa,$gender,'not taken',$salt)";
$sql_query = "INSERT INTO stu_reg(name,address,fatname,dob,phone,email,password,reg_date,gender,exam_status,salting_value) values('$name','$address','$fatname','$dob','$phone','$email','$password','$datesasa','$gender','not taken','$salt')";	

$result = mysqli_query($con,$sql_query);




if (!$result) {
	echo "<script>swal('This email is already registered !!!', '', 'warning')
	.then((value) => {
  window.location='index.php';
});

</script>";

}
else{
	// $result_student="INSERT INTO result(email,ques_attempted,mark_obtained,right_answer,wrong_answer) values('$email','0','0','0','0')";
	// $result = mysqli_query($con,$result_student);	
	// print_r($result);
	session_start();
	$_SESSION["ema"]=$email;
	
	echo "<script>swal('You are registered !!!', '', 'success')
	.then((value) => {
  window.location='index.php';
});

</script>";


	
}


?>