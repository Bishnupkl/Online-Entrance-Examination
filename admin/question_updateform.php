<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Question Edit </title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <script src="vendor/jquery/ui.js"></script>
</head>
<?php include 'header.php'; ?>
<?php $update_id = $_GET['id']; 
	include 'connection_establish.php';

	$sql ="SELECT * FROM question_table WHERE q_id = $update_id ";
$result = mysqli_query($con,$sql);
if (!$result) {
	echo mysqli_error();
}

$row = mysqli_fetch_array($result);

?>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"><b> &nbsp;&nbsp; Edit question &nbsp;&nbsp; </b></div>
      <div class="card-body">

        <form  action="question_update.php?id=<?php echo $row['q_id'];?>" method="post">
		<div class="msg"></div>
          <div class="form-group">
            <label for="que">Question</label>
            <input class="form-control"  type="text" aria-describedby="emailHelp" placeholder="Enter email" name="question" value="<?php echo $row['question']; ?>" required>
          </div>

          <div class="form-group">
            <label for="c1">Choice 1</label>
            <input class="form-control"  type="text" placeholder="Password" name="c1" value="<?php echo $row['choice1']; ?>" required>
          </div>

          <div class="form-group">
            <label for="c1">Choice 2</label>
            <input class="form-control" type="text" placeholder="Password" name="c2"  value="<?php echo $row['choice2']; ?>" required>
          </div>

          <div class="form-group">
            <label for="c1">Choice 3</label>
            <input class="form-control"  type="text" placeholder="Password" name="c3" value="<?php echo $row['choice3']; ?>" required>
          </div>

          <div class="form-group">
            <label for="c1">Choice 4</label>
            <input class="form-control"  type="text" placeholder="Password" name="c4" value="<?php echo $row['choice4']; ?>" required>
          </div>

          <div class="form-group">
            <label for="c1">Correct</label>
            <input class="form-control"  type="text" placeholder="Password" name="correct" value="<?php echo $row['correct_ans']; ?>" required>
          </div>

          <div class="form-group">
            <label for="c1">Mark</label>
            <input class="form-control" type="text" placeholder="Password" name="mark" value="<?php echo $row['mark']; ?>" required>
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
