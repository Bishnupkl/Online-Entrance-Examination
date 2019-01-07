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
$email = $_POST["email"];
$password = $_POST["password"];
$category = $_POST["category"];


include 'connection_establish.php';

$sqly = "SELECT * FROM exam_date";
$resulty = mysqli_query($con,$sqly);
$rowy = mysqli_fetch_array($resulty);
$datey = date("Y-m-d");

$status = "SELECT exam_status FROM stu_reg WHERE email='$email' ";
$st= mysqli_query($con,$status);
$sta = mysqli_fetch_array($st);

if($category=="student" ){

	if ($sta['exam_status']=="taken") {
		echo "<script>swal('Exam is already taken !!!', '', 'info')
	.then((value) => {
  window.location='index.php';
});

</script>";
		exit();
	}

$scon = mysqli_connect("localhost","root","","oee");

$salt_sql = "SELECT salting_value FROM stu_reg WHERE email='$email' ";
$salt_query= mysqli_query($scon,$salt_sql);
$salt_fetch = mysqli_fetch_array($salt_query);

$salting_value = $salt_fetch['salting_value'];
$salted_password = sha1($salting_value.$password);

$sql = "SELECT email,password FROM stu_reg WHERE email='$email' && password ='$salted_password'";
$check =  mysqli_query($scon,$sql);
$row = mysqli_fetch_array($check);

if (mysqli_affected_rows($scon)>0) {

	session_start();
	$_SESSION["email"] = $email;
	
		mysqli_query($con,"INSERT INTO result(email,ques_attempted,mark_obtained,right_answer,wrong_answer,status)values
		('$email','0','0','0','0','not taken')");
		

	echo "<script>swal('You are logged in', '', 'success')
	.then((value) => {
  window.location='exam2.php';
});

</script>";
	
} else {
	echo "<script>swal('Email or password do not match', '', 'error')
	.then((value) => {
  window.location='login.php';
});

</script>";
}







}//student if loop

if ($category=="teacher"){

	$tcon = mysqli_connect("localhost","root","","oee");

	$salt_tsql = "SELECT * FROM teacher_reg WHERE t_email='$email'";
 	$salt_tquery= mysqli_query($tcon,$salt_tsql);
	$salt_tfetch = mysqli_fetch_array($salt_tquery);


	$salting_value = $salt_tfetch['salting_value'];
	$salted_password = sha1($salting_value.$password);

	$sql= "SELECT t_email,t_password FROM teacher_reg WHERE t_email='$email' && t_password ='$salted_password'";
 	mysqli_query($tcon,$sql);


 	if (!mysqli_affected_rows($tcon)>0) {
 		
 		echo "<script>swal('Email or password do not match', '', 'error')
	.then((value) => {
  window.location='login.php';
});

</script>";
}

else {
 		
      session_start();
	$_SESSION["temail"] = $email;
    echo "<script>window.location='question_form.php';</script>";

 	}
 	


}



?>