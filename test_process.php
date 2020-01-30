<?php 
$fque = $_POST["fque"];
$sque = $_POST["sque"];

include 'connection_establish.php';
$sql = " SELECT * from question_table where q_id = '6' ";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$correct = $row["correct_ans"];
if($fque==$correct)
{
	$mark =1;
	$sql = "INSERT into result(mark_obtained)VALUES('$mark') ";
mysqli_query($con,$sql);


}

$sql2 = " SELECT * from question_table where q_id = '7' ";
$result2 = mysqli_query($con,$sql2);
$row2 = mysqli_fetch_array($result2);
$correct2 = $row2["correct_ans"];

if($sque==$correct2)
{
	$mark = $mark+1;
	$sql = "UPDATE result SET mark_obtained = '$mark' WHERE id = '1' ";
mysqli_query($con,$sql);
}

 






 ?>