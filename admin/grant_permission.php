<?php
echo "<html><head><script src ='dist/sweetalert.min.js'></script></head></html>"; 

$id = $_GET['id'];

include 'connection_establish.php';

$csql = "SELECT permission from teacher_reg WHERE t_email = '$id' ";
$cquery = mysqli_query($con,$csql);
$row = mysqli_fetch_array($cquery);
if ($row['permission']=='granted') {
	echo "<script>
		swal('Permission already granted','','info').then((value)=>{
			window.location ='index.php';
		});

	</script>";
	
}
else{

$sql = "UPDATE teacher_reg SET permission ='granted' WHERE t_email='$id' ";
$query = mysqli_query($con,$sql);

if($query)
{
	echo "<script>
		swal('Permission granted','','success').then((value)=>{
			window.location ='index.php';
		});

	</script>";

}
else{
	echo "error occured".mysqli_error($con);
}

}






 ?>