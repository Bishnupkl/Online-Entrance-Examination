<?php 

include 'connection_establish.php';


$sql = "SELECT * FROM sample ORDER BY mark";
$res = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($res)) 
{
	echo $row["name"]."<br>";
}	

 ?>
