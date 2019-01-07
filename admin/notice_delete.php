<html>
<head>
	<script type="text/javascript" src="dist/sweetalert.min.js"></script>
</head>
<body>

<?php 
$id = $_GET['id'];
include 'connection_establish.php';

$sql = "DELETE FROM notice WHERE n_id= '$id' ";
$result = mysqli_query($con,$sql);
if($result){
	echo "<script>swal('Notice is Deleted !!','now see in table', 'success')
	.then((value) => {
  window.location='viewnotice.php';
});

</script>";
}
else{
	echo "<script>swal('Error occured !!', 'error')";
}
mysqli_close($con);


 ?>
</body>
</html>