<!DOCTYPE html>
<html>
<head>
	<title>Notice</title>
	<?php include 'head-file.php'; ?>
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="container-fluid" style="background-color: lightseagreen;margin-top: -25px;">

	<div style="color: white;background-color: lightseagreen; font-weight: bolder; text-align:center;  font-size: 30px"><span style="line-height:1;color: white;">Notice from the examination center</span></div><br>
	

	<?php

	include 'connection_establish.php';
	$query = "SELECT * FROM notice ORDER BY n_id DESC";
	$result = mysqli_query($con,$query);
	if(!$result){
		echo("Error selecting news:".mysqli_error());
		exit();
	}
	while($myrow = mysqli_fetch_array($result))
	{

	?>
	

    <div class="panel panel-info">
      <div class="panel-heading">
      <span style="font-weight: bold;"><?php echo $myrow['n_heading']; ?></span>	
      </div>


      <div class="panel-body" style="color:white; background-color:lightblue; font-size: 17px" >

      	<p id="nt<?php echo $myrow['n_id']; ?>"> <?php echo $myrow['n_text']; ?>....&nbsp;<br><button type="button" class="btn btn-primary btn-sm"  id="nb<?php echo $myrow['n_id']; ?>">Read More
      	</button></p>

      	<small style="color:red;font-size: 12px"><?php echo $myrow['n_date']; ?></small>


	 <p id="n<?php echo $myrow['n_id']; ?>" style="display: none"><?php echo $myrow['n_description']; ?>
	 	<br><button type="button" class="btn btn-primary btn-sm"  id="ns<?php echo $myrow['n_id']; ?>">Read Less</button></p>

	</div>
   </div>
  

 <script>

$(document).ready(function(){

    $("#nb<?php echo $myrow['n_id']; ?>").click(function(){
       
       	 var t = document.getElementById("nt<?php echo $myrow['n_id']; ?>");
      	 t.style.display="none";
      	  $("#n<?php echo $myrow['n_id']; ?>").show();

    });

    $("#ns<?php echo $myrow['n_id']; ?>").click(function(){
       
         $("#n<?php echo $myrow['n_id']; ?>").hide();
        var v =document.getElementById("nt<?php echo $myrow['n_id']; ?>");
        v.style.display="inline";

         });
});
</script>

<?php

	}
	
	mysqli_close($con);
	?>
 </div>
</body>
</html>