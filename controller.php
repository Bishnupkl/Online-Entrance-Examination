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

$app_id = $_POST["auth"]["app_id"];
$app_key = $_POST["auth"]["app_key"];
$phpMethod = $_POST["phpMethod"];
$args = $_POST["args"];



if ($args == null) {
	$args = [];
}

 include('Kairos.php');


$Kairos  = new Kairos($app_id, $app_key);

$response = $Kairos->$phpMethod($args);
 echo "<script>

var obj = $response;
	var check =obj.images[0].transaction.status;
	if (check=='success') {

			display();
		}

		function display(){

			swal('Photo Uploaded', '', 'success')
	.then((value) => {
  window.location='index.php'});
		}



 </script>";

 


 ?>
 