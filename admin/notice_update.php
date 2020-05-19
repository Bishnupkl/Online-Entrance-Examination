<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="dist/sweetalert.min.js"></script>
	<title></title>
</head>
<body>
	<?php 
$update_id = $_GET['id'];
$title = $_POST['title'];
$text= $_POST['text'];
$description = $_POST['description'];


include 'connection_establish.php';

$sql_query = "UPDATE notice SET n_date = NOW(),n_heading = '$title',n_text= '$text',
 n_description = '$description'  WHERE n_id = $update_id ";
$result = mysqli_query($con,$sql_query);

if (!$result) {
	echo "Error occured";
}
else{
	echo "<script>swal('Notice is updated !!','', 'success')
	.then((value) => {
  window.location='viewnotice.php';
});

</script>";
	
}

mysqli_close($con);
 ?>

</body>
</html>

