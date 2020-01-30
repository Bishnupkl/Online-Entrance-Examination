<?php 
	session_start();
	if (isset($_SESSION['admin'])) {
		
	

 ?>
<?php 
include 'header.php';
 ?>

 <div class="content-wrapper">
 	
 	<h3 style="color: lightseagreen;">Questions from datbase</h3>	
 	

 	<table class="table table-responsive"  cellpadding="1" cellspacing="0">
<tr bgcolor="lightseagreen" style="color: white;">
	<td>S.N</td>
		<td>Question</td>
		<td>Choice1</td>
		<td>Choice2</td>
		<td>Choice3</td>
		<td>Choice4</td>
		<td>Correct</td>
		<td>Mark</td>
		<td>Edit</td>
		<td>Delete</td>
</tr>


<?php
include 'connection_establish.php';
$sql ="SELECT * FROM question_table";
$result = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($result)) {
	?>

	<tr>
		<td><?php echo $row['q_id']; ?></td>
		<td><?php echo $row['question']; ?></td>
		<td><?php echo $row['choice1']; ?></td>
		<td><?php echo $row['choice2']; ?></td>
		<td><?php echo $row['choice3']; ?></td>
		<td><?php echo $row['choice4']; ?></td>
		<td><?php echo $row['correct_ans']; ?></td>
		<td><?php echo $row['mark']; ?></td>


<td><a href="question_updateform.php?id=<?php echo $row['q_id'];?>"> <button type="buttton" class="btn btn-primary">Edit</button></a></td>

<td><a href="question_delete.php?id=<?php echo $row['q_id']; ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
		
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