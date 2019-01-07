<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Notice Edit </title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <script src="vendor/jquery/ui.js"></script>
</head>

<?php 
include 'header.php'; 
 $update_id = $_GET['id']; 
	include 'connection_establish.php';

	$sql ="SELECT * FROM notice WHERE n_id = $update_id ";
$result = mysqli_query($con,$sql);
if (!$result) {
	echo mysqli_error();
}

$row = mysqli_fetch_array($result);

?>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"><b> &nbsp;&nbsp; Update Notice &nbsp;&nbsp; </b></div>
      <div class="card-body">

        <form  action="notice_update.php?id=<?php echo $row['n_id'];?>" method="post">
		<div class="msg"></div>
          <div class="form-group">
            <label>Notice title</label>
            <input class="form-control"  type="text"   name="title" value="<?php echo $row['n_heading']; ?>" required>
          </div>

          <div class="form-group">
                  <label>Notice Text :</label>
                  <br>
                  <textarea name="text" class="form-control" rows="4" value="<?php echo $row['n_text']; ?>"   required><?php echo $row['n_text']; ?></textarea>
                 
                </div>

          <div class="form-group">
                  <label>Notice Description :</label>
                  <br>
                  <textarea  class="form-control" name="description" rows="6" value="<?php echo $row['n_description']; ?>" required><?php echo $row['n_description']; ?></textarea>
                  <!-- <script>
                  CKEDITOR.replace('editor1');
                  </script> -->
                </div>
          
          <input type="Submit" class="btn btn-primary btn-block" value="Update">
        </form>
		<br>
       
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper/popper.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
