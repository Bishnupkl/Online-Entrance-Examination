<?php 
$id = $_GET['id'];
include 'connection_establish.php';

$sql = "DELETE FROM question_table WHERE q_id= '$id' ";
$result = mysqli_query($con,$sql);
if($result){
	echo "<script>window.location= 'view_question.php';</script> ";
}
else{
	echo "Error occured";
}
mysqli_close($con);


 ?>