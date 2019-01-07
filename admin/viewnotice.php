<?php 
include 'header.php';

 ?>

 <div class="content-wrapper">
 	
 	<h3 style="color: lightseagreen; font-style: italic;">Notice to Students</h3>	

 	<table class="table table-responsive"  cellpadding="1" cellspacing="0">
<tr style=" font-size: 20px;color: white;background-color: lightseagreen;" >
		<td>Notice_Id</td>
		<td>Date</td>
		<td>Heading</td>
		<td>Text</td>
		<td>Description</td>
		<td>Edit</td>
		<td>Delete</td>		
</tr>


<?php
include 'connection_establish.php';
$sql ="SELECT * FROM notice";
$result = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($result)) {
	?>

	<tr>
		<td><?php echo $row['n_id']; ?></td>
		<td><?php echo $row['n_date']; ?></td>
		<td><?php echo $row['n_heading']; ?></td>
		<td><?php echo $row['n_text']; ?></td>
		<td><?php echo $row['n_description']; ?></td>
		

<td><a href="notice_updateform.php?id=<?php echo $row['n_id'];?>"> <button type="buttton" class="btn btn-primary">Edit</button></a></td>

<td><a href="notice_delete.php?id=<?php echo $row['n_id']; ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
		
		 </tr>
<?php
}

mysqli_close($con);


?>
</table>

 </div>

 <?php include 'footer.php'; ?>