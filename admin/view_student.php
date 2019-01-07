<?php include 'header.php'; ?>
<div class="content-wrapper">
	<h3 style="color:lightseagreen;">Currently Registered Students</h3>
	<table class="table table-responsive"  cellpadding="1" cellspacing="0" >
<tr bgcolor="lightseagreen">
		<td class="tdc">SN</td>
		<td class="tdc">Name</td>
		<td class="tdc">Address</td>
		<td class="tdc">Father Name</td>
		<td class="tdc">DOB</td>
		<td class="tdc">Phone No</td>
		<td class="tdc">Email</td>
		<td class="tdc">Gender</td>
		<td class="tdc">Reg. date
<style type="text/css">
	

</style>

<style type="text/css">
	.tdc{
		color: white;
	}
</style>
<?php
include 'connection_establish.php';
$sql ="SELECT * FROM stu_reg";
$result = mysqli_query($con,$sql);
$count = 0;
while ($row = mysqli_fetch_array($result)) {
	$count++;
	?>

	<tr bgcolor="whitesmoke">
		<td><?php echo $count; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['address']; ?></td>
		<td><?php echo $row['fatname']; ?></td>
		<td><?php echo $row['dob']; ?></td>
		<td><?php echo $row['phone']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['gender']; ?></td>
		<td><?php echo $row['reg_date']; ?></td>
		 </tr>
<?php
}


mysqli_close($con);


?>
</table>



</div>
<?php include 'footer.php'; ?>