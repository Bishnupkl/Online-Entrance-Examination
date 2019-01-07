<?php 

session_start();
if (isset($_SESSION['admin'])) {
	


 ?>

<?php 
include 'header.php';
 ?>

 <div class="content-wrapper">
 	
 	<h3 style="color: lightseagreen;">Online Examination Result</h3>	

 	<table class="table table-responsive"  cellpadding="1" cellspacing="0">
<tr bgcolor="lightseagreen" style="color: white;">
	<td>S.N</td>
		<td>Student Name</td>
		<td>Email</td>
		<td>Mark Secured</td>
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
		<td><?php echo $row['mark_obtained']; ?></td>
		<td><?php echo $row['address']; ?></td>
		<td><?php echo $row['phone']; ?></td>
		<td><?php echo $row['fatname'] ?></td>
		


		 </tr>
<?php
}

mysqli_close($con);


?>
</table>

 </div>
 <?php include 'footer.php'; ?>
 <?php 
}
else{
	echo "<script>window.location='login.php';</script>";
}


  ?>