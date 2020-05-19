<?php 
include 'connection_establish.php';

$sql = "SELECT * FROM question_table ORDER BY RAND()";
$query = mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($query))
 {
 	echo $row['q_id']."<br>";
 }
mysqli_close($con);

echo date("Y/m/d");



 ?>
 <input type="date" name="">