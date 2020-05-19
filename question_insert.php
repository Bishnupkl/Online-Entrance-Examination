<?php 
session_start();
$temail = $_SESSION["temail"];
if (!isset($temail)) {
	echo "<script>window.location='index.php';</script>";
} 
else{
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="dist/sweetalert.min.js"></script>
	<title></title>
</head>
<body>

</body>
</html>
<?php 
$question= $_POST['question'];
$c1 = $_POST['c1'];
$c2 = $_POST['c2'];
$c3 = $_POST['c3'];
$c4 = $_POST['c4'];
$correct = $_POST['correct'];
$q_mark = $_POST['qmark'];

include 'connection_establish.php';

$sql_query="INSERT INTO question_table (
question,choice1,choice2,choice3,choice4,correct_ans,mark,uploaded_by) VALUES('$question','$c1','$c2','$c3','$c4','$correct','$q_mark','$temail')";

$result = mysqli_query($con,$sql_query);

if ($result) {
 	echo "<script>swal('Question uploaded', ' ', 'success')
	.then((value) => {
  window.location='question_form.php';
});

</script>";
 } 


mysqli_close($con);

}

?>