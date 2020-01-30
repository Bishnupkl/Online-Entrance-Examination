<?php include 'header.php'; ?>

<div class="content-wrapper">
	<h3 style="color: lightseagreen;">Teachers</h3>
	<table class="table table-responsive"  cellpadding="1" cellspacing="0" >
<tr bgcolor="lightseagreen">
		<td class="tdc">SN</td>
		<td class="tdc">Name</td>
		<td class="tdc">Subject</td>
		<td class="tdc">Gender</td>
		<td class="tdc">Address</td>
		<td class="tdc">Phone No</td>
		<td class="tdc">Email</td>
		<td class="tdc">Permission</td>
		
<style type="text/css">
	

</style>

<style type="text/css">
	.tdc{
		color: white;
	}
</style>
<?php
include 'connection_establish.php';
$sql ="SELECT * FROM teacher_reg";
$result = mysqli_query($con,$sql);
$count = 0;
while ($row = mysqli_fetch_array($result)) {
	$count++;
	?>

	<tr bgcolor="whitesmoke">
		<td><?php echo $count; ?></td>
		<td><?php echo $row['t_name']; ?></td>
		<td><?php echo $row['subject']; ?></td>
		<td><?php echo $row['t_gender']; ?></td>
		<td><?php echo $row['t_address']; ?></td>
		<td><?php echo $row['t_phone']; ?></td>
		<td><?php echo $row['t_email']; ?></td>
		<td><?php echo $row['permission']; ?></td>
		
		 </tr>
<?php
}


mysqli_close($con);


?>
</table>
	

</div>
<?php include 'footer.php'; ?>