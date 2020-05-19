<?php 
session_start();
echo "
<html>
<head><script src='dist/sweetalert.min.js'></script></head>
</html>

";
$email = $_SESSION["email"];
include 'connection_establish.php';

$result_student="INSERT INTO result(email,ques_attempted,mark_obtained,right_answer,wrong_answer) values('$email','0','0','0','0')";
	$result_student12 = mysqli_query($con,$result_student);	
if($result_student12){
if(isset($_POST['q1']))
{

$q1 = $_POST['q1'];

$sql1 = " SELECT * from question_table where q_id = '1' ";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$correct1 = $row1["correct_ans"];
$qno= $row1["q_id"];


//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";

	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;


	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");
	

if ($q1==$correct1) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}
// que1 finished


if(isset($_POST['q2']))
{

$q2 = $_POST['q2'];

$sql2 = " SELECT * from question_table where q_id = '2' ";
$result2 = mysqli_query($con,$sql2);
$row2 = mysqli_fetch_array($result2);
$correct2 = $row2["correct_ans"];
$qno= $row2["q_id"];

//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";
	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;

	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");

if ($q2==$correct2) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}
// que2 finished


if(isset($_POST['q3']))
{

$q3 = $_POST['q3'];

$sql1 = " SELECT * from question_table where q_id = '3' ";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$correct1 = $row1["correct_ans"];
$qno= $row1["q_id"];

//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";
	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;

	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");

if ($q3==$correct1) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}
// que3 finished


if(isset($_POST['q4']))
{

$q4 = $_POST['q4'];

$sql1 = " SELECT * from question_table where q_id = '4' ";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$correct1 = $row1["correct_ans"];
$qno= $row1["q_id"];

//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";
	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;

	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");

if ($q4==$correct1) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}
// que4 finished

if(isset($_POST['q5']))
{

$q5 = $_POST['q5'];

$sql1 = " SELECT * from question_table where q_id = '5' ";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$correct1 = $row1["correct_ans"];
$qno= $row1["q_id"];

//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";
	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;

	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");

if ($q5==$correct1) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}
// que5 finished


if(isset($_POST['q6']))
{

$q6 = $_POST['q6'];

$sql1 = " SELECT * from question_table where q_id = '6' ";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$correct1 = $row1["correct_ans"];
$qno= $row1["q_id"];

//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";
	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;

	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");

if ($q6==$correct1) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}
// que6 finished

if(isset($_POST['q7']))
{

$q7 = $_POST['q7'];

$sql1 = " SELECT * from question_table where q_id = '7' ";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$correct1 = $row1["correct_ans"];
$qno= $row1["q_id"];

//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";
	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;

	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");

if ($q7==$correct1) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}
// que7 finished


if(isset($_POST['q8']))
{

$q8 = $_POST['q8'];

$sql1 = " SELECT * from question_table where q_id = '8' ";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$correct1 = $row1["correct_ans"];
$qno= $row1["q_id"];

//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";
	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;

	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");

if ($q8==$correct1) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}
// que8 finished


if(isset($_POST['q9']))
{

$q9 = $_POST['q9'];

$sql1 = " SELECT * from question_table where q_id = '9' ";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$correct1 = $row1["correct_ans"];
$qno= $row1["q_id"];

//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";
	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;

	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");

if ($q9==$correct1) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}
// que9 finished


if(isset($_POST['q10']))
{

$q10 = $_POST['q10'];

$sql1 = " SELECT * from question_table where q_id = '10' ";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$correct1 = $row1["correct_ans"];
$qno= $row1["q_id"];

//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";
	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;

	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");

if ($q10==$correct1) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}
// que10 finished


if(isset($_POST['q11']))
{

$q11 = $_POST['q11'];

$sql1 = " SELECT * from question_table where q_id = '11' ";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$correct1 = $row1["correct_ans"];
$qno= $row1["q_id"];

//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";
	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;

	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");

if ($q11==$correct1) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}
// que11 finished


if(isset($_POST['q12']))
{

$q12 = $_POST['q12'];

$sql1 = " SELECT * from question_table where q_id = '12' ";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$correct1 = $row1["correct_ans"];
$qno= $row1["q_id"];

//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";
	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;

	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");

if ($q12==$correct1) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}
// que12 finished


if(isset($_POST['q13']))
{

$q13 = $_POST['q13'];

$sql1 = " SELECT * from question_table where q_id = '13' ";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$correct1 = $row1["correct_ans"];
$qno= $row1["q_id"];

//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";
	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;

	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");

if ($q13==$correct1) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}
// que13 finished


if(isset($_POST['q14']))
{

$q14 = $_POST['q14'];

$sql1 = " SELECT * from question_table where q_id = '14' ";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$correct1 = $row1["correct_ans"];
$qno= $row1["q_id"];

//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";
	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;

	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");

if ($q14==$correct1) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}
// que14 finished


if(isset($_POST['q15']))
{

$q15 = $_POST['q15'];

$sql1 = " SELECT * from question_table where q_id = '15' ";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$correct1 = $row1["correct_ans"];
$qno= $row1["q_id"];

//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";
	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;

	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");

if ($q15==$correct1) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}
// que15 finished


if(isset($_POST['q16']))
{

$q16 = $_POST['q16'];

$sql1 = " SELECT * from question_table where q_id = '16' ";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$correct1 = $row1["correct_ans"];
$qno= $row1["q_id"];

//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";
	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;

	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");

if ($q16==$correct1) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}
// que16 finished


if(isset($_POST['q17']))
{

$q17 = $_POST['q17'];

$sql1 = " SELECT * from question_table where q_id = '17' ";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$correct1 = $row1["correct_ans"];
$qno= $row1["q_id"];

//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";
	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;

	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");

if ($q17==$correct1) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}
// que17 finished


if(isset($_POST['q18']))
{

$q18 = $_POST['q18'];

$sql1 = " SELECT * from question_table where q_id = '18' ";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$correct1 = $row1["correct_ans"];
$qno= $row1["q_id"];

//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";
	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;

	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");

if ($q18==$correct1) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}
// que18 finished


if(isset($_POST['q19']))
{

$q19 = $_POST['q19'];

$sql1 = " SELECT * from question_table where q_id = '19' ";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$correct1 = $row1["correct_ans"];
$qno= $row1["q_id"];

//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";
	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;

	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");

if ($q19==$correct1) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}
// que19 finished


if(isset($_POST['q20']))
{

$q20 = $_POST['q20'];

$sql1 = " SELECT * from question_table where q_id = '20' ";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$correct1 = $row1["correct_ans"];
$qno= $row1["q_id"];

//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";
	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;

	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");

if ($q20==$correct1) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}
// que20 finished



if(isset($_POST['q21']))
{

$q21 = $_POST['q21'];

$sql1 = " SELECT * from question_table where q_id = '21' ";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$correct1 = $row1["correct_ans"];
$qno= $row1["q_id"];

//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";
	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;

	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");

if ($q21==$correct1) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}

//quesion 21 finished


if(isset($_POST['q22']))
{

$q22 = $_POST['q22'];

$sql1 = " SELECT * from question_table where q_id = '22' ";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$correct1 = $row1["correct_ans"];
$qno= $row1["q_id"];

//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";
	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;

	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");

if ($q22==$correct1) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}

//ques 22 finished


if(isset($_POST['q23']))
{

$q23 = $_POST['q23'];

$sql1 = " SELECT * from question_table where q_id = '23' ";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$correct1 = $row1["correct_ans"];
$qno= $row1["q_id"];

//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";
	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;

	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");

if ($q23==$correct1) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}

//ques 23 finished


if(isset($_POST['q24']))
{

$q24 = $_POST['q24'];

$sql1 = " SELECT * from question_table where q_id = '24' ";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$correct1 = $row1["correct_ans"];
$qno= $row1["q_id"];

//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";
	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;

	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");

if ($q24==$correct1) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}

// ques 24 finished


if(isset($_POST['q25']))
{

$q25 = $_POST['q25'];

$sql1 = " SELECT * from question_table where q_id = '25' ";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$correct1 = $row1["correct_ans"];
$qno= $row1["q_id"];

//question attempt
	$asql = "SELECT ques_attempted FROM result WHERE email = '$email' ";
	$aresult = mysqli_query($con,$asql);
	$arow = mysqli_fetch_array($aresult);
	$attempt=$arow["ques_attempted"]+1;

	mysqli_query($con,"UPDATE result SET ques_attempted = '$attempt' WHERE email = '$email' ");

if ($q25==$correct1) {
	
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
	$mresult = mysqli_query($con,$msql);
	$mrow = mysqli_fetch_array($mresult);
	$mark=$mrow["mark_obtained"]+1;

	$rsql = "SELECT right_answer FROM result WHERE email = '$email' ";
	$rresult = mysqli_query($con,$rsql);
	$rrow = mysqli_fetch_array($rresult);
	$right=$rrow["right_answer"]+1;


	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET right_answer = '$right' WHERE email = '$email' ");

}
else{
	$msql = "SELECT mark_obtained FROM result WHERE email = '$email' ";
    $mresult = mysqli_query($con,$msql);
    $mrow = mysqli_fetch_array($mresult);
    $mark_obtained=$mrow["mark_obtained"]-0.25;

    $wsql = "SELECT wrong_answer FROM result WHERE email = '$email' ";
	$wresult = mysqli_query($con,$wsql);
	$wrow = mysqli_fetch_array($wresult);
	$wrong=$wrow["wrong_answer"]+1;
	
	mysqli_query($con,"UPDATE result SET mark_obtained = '$mark_obtained' WHERE email = '$email' ");
	mysqli_query($con,"UPDATE result SET wrong_answer = '$wrong' WHERE email = '$email' ");
}


}

$psql = "SELECT mark_obtained FROM result WHERE email='$email'";
$pquery = mysqli_query($con,$psql);
$prow = mysqli_fetch_array($pquery);
if ($prow["mark_obtained"]>=8) {
	mysqli_query($con,"UPDATE result SET status ='Passed' WHERE email='$email'");
} else {
	mysqli_query($con,"UPDATE result SET status ='Failed' WHERE email='$email'");
}
}


mysqli_query($con,"UPDATE stu_reg SET exam_status='taken' WHERE email='$email' ");
echo "<script>
swal('Result will be published soon','Stay updated','info').then((value)=>{
	window.location='index.php';
});

</script>";










 ?>