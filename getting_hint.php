<?php 
$name = $_GET["id"];
include 'connection_establish.php';

$sql = "SELECT email FROM stu_reg WHERE email='$name'";

$result = mysqli_query($con,$sql);


if (mysqli_affected_rows($con)>0) {
	echo "This email is already registered";
}
// else{
// echo $name." is available";
// }
mysqli_close($con);

?>