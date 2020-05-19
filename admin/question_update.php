<?php 
$update_id = $_GET['id'];
$question = $_POST['question'];
$c1 = $_POST['c1'];
$c2 = $_POST['c2'];
$c3 = $_POST['c3'];
$c4 = $_POST['c4'];
$correct = $_POST['correct'];
$mark = $_POST['mark'];

include 'connection_establish.php';

$sql_query = "UPDATE question_table SET question = '$question' , choice1 = '$c1',choice2= '$c2', choice3 = '$c3' ,choice4 = '$c4', correct_ans = '$correct', mark = '$mark' WHERE q_id = $update_id ";
$result = mysqli_query($con,$sql_query);

if (!$result) {
	echo "Error occured";
}
else{
	echo "<script>window.location = 'view_question.php';</script>";
}

mysqli_close($con);
 ?>