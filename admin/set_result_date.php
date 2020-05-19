<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="dist/sweetalert.min.js"></script>
</head>
<body>

	<?php 
$rdate = $_POST['rdate'];

include 'connection_establish.php';

$sql = "UPDATE  rdate SET rdate='$rdate'";
$result = mysqli_query($con,$sql);
if(!$result){
	echo mysqli_error($con);
}
else{
	echo "<script>
		swal('Result date is set','','success').then((value)=>

		window.location='index.php');


	</script>";
	

}
mysqli_close($con);

 ?>

</body>
</html>
