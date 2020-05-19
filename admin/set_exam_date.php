<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="dist/sweetalert.min.js"></script>
</head>
<body>
<?php 
$edate = $_POST['edate'];

include 'connection_establish.php';

$sql = "UPDATE  exam_date SET edate='$edate'";
$result = mysqli_query($con,$sql);
if(!$result){
	echo mysqli_error($con);
}
else{
	echo "<script>
		swal('Exam date is set','','success').then((value)=>

		window.location='index.php');


	</script>";
}
mysqli_close($con);

 ?>
</body>
</html>
