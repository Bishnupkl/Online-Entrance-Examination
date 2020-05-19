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

$scon = mysqli_connect("localhost","20nu","20nu","oee");

$sql = "SELECT email,password FROM stu_reg WHERE email='$email' AND password='$password'";
$check =  mysqli_query($scon,$sql);


$row = mysqli_fetch_array($check);


$tot=mysqli_affected_rows($scon);
 

if (mysqli_affected_rows($scon)>0) {

	session_start();
	$_SESSION["email"] = $email;
	
		mysqli_query($con,"INSERT INTO result(email,ques_attempted,mark_obtained,right_answer,wrong_answer,status)values
		('$email','0','0','0','0','not taken')");
		

	echo "<script>swal('Email and password matched !!!', 'Now you can give exam', 'success')
	.then((value) => {
  window.location='exam2.php';
});

</script>";
	
// var_dump($tot);die();
} else {
	echo "<script>swal('Email or password do not match', '', 'error')
	.then((value) => {
  window.location='login.php';
});

</script>";
}







}//student if loop

elseif ($category=="teacher"){

	$tcon = mysqli_connect("localhost","20nu","20nu","oee");
	$sql = "SELECT t_email,t_password FROM teacher_reg WHERE t_email='$email' && t_password ='$password'";
 	mysqli_query($tcon,$sql);


 	if (!mysqli_affected_rows($tcon)>0) {
 		
 		echo "<script>swal('Email or password do not match', '', 'error')
	.then((value) => {
  window.location='login.php';
});

</script>";

 	} else {
 		
      session_start();
	$_SESSION["temail"] = $email;
    echo "<script>window.location='question_form.php';</script>";

 	}
 	


}
else{
		echo "<script>swal('Please Select Category', '', 'error')
	.then((value) => {
  window.location='login.php';
});

</script>";
}



?>