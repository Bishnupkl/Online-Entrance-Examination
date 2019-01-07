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

include('Kairos1.php');

$Kairos  = new Kairos($app_id, $app_key);

$response = $Kairos->$phpMethod($args);

 echo "<script>

    var obj = $response;
	var check =obj.images[0].transaction.status;
	if (check=='failure') {

			failure();
		}

	function failure(){

			swal('Not Recognized', '', 'error')
	.then((value) => {
  window.location='verify_face.php'});
		}

		if(check =='success')
		{
			success();

		}

		function success(){

			swal('Recognized', '', 'success')
	.then((value) => {
  window.location='exam2.php'});
		}


 </script>";

?>