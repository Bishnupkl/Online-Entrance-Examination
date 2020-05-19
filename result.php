<?php 
include 'connection_establish.php';
$rsql = "SELECT * FROM rdate";
$rresult = mysqli_query($con,$rsql);
$rrow = mysqli_fetch_array($rresult);
$rdate = date("Y-m-d");

if ($rdate!=$rrow['rdate']) {
		echo "<html><head><script src='dist/sweetalert.min.js'></script></head></html>";
		
    echo "<script>swal('Result will be published soon', 'Stay updated', 'info')
  .then((value) => {
  window.location='index.php';
});

</script>";
exit();
		
}
else{

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<?php include 'head-file.php'; ?>
	<style type="text/css">

	</style>
</head>
<body>
	<?php include 'header.php';?>
	
<div class="container-fluid" style="background-color: #20B2AA;margin-top: -36px;color: white;" ><br>
	<h1 style="margin-left: 20px;background-color: #20B2AA">Online Entrance Examination <?php echo date("Y");?>: Result</h1><br>
	

	

 	<table class="table table-responsive"  cellpadding="1" cellspacing="0">
<tr>
	<td>S.N</td>
		<td>Student Name</td>
		<td>Email</td>
		<td>Question Attempted</td>
		<td>Mark Secured</td>
		<td>Right Answer</td>
		<td>Wrong Answer</td>
		<td>Status</td>
		<td>Address</td>
		<td>Contact</td>
		<td>Father Name</td>
		
</tr>


<?php
include 'connection_establish.php';
$sql ="SELECT * FROM result,stu_reg WHERE result.email=stu_reg.email ORDER BY mark_obtained DESC ";
$result = mysqli_query($con,$sql);
$sn=0;
while ($row = mysqli_fetch_array($result)) {
	$sn=$sn+1;
	?>

	<tr>
		<td><?php echo $sn; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td align="center"><?php echo $row['ques_attempted']; ?></td>
		<td align="center"><?php echo $row['mark_obtained']; ?></td>
		<td align="center"><?php echo $row['right_answer']; ?></td>
		<td align="center"><?php echo $row['wrong_answer']; ?></td>
		<td align="center"><?php echo $row['status']; ?></td>
		<td align="center"><?php echo $row['address']; ?></td>
		<td align="center"><?php echo $row['phone']; ?></td>
		<td align="center"><?php echo $row['fatname']; ?></td>
		


		 </tr>
<?php
}

mysqli_close($con);


?>
</table>
<div class="row" style="background-color:#20B2AA "><br><br>&nbsp;<br>&nbsp;<br>&nbsp;<br><br>&nbsp;<br>&nbsp;<br>&nbsp;<br><br>&nbsp;<br>&nbsp;<br>&nbsp;<br><br>&nbsp;<br>&nbsp;<br>&nbsp;<br><br>&nbsp;<br>&nbsp;<br>&nbsp;<br><br>&nbsp;<br>&nbsp;<br>&nbsp;<br><br>&nbsp;<br>&nbsp;<br>&nbsp;<br><br>&nbsp;<br>&nbsp;<br>&nbsp;</div>

</div>
</body>
</html>
<?php 

}
 ?>