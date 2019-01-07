<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Online Entrance Admin Panel</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <script src="vendor/jquery/ui.js"></script>
</head>

<body class="bg-dark">
  <div class="container">
    <br><br><br><br>
    <div class="card card-login mx-auto mt-5">

      <div class="card-header"><b> <i class="fa fa-lock fa-2x" aria-hidden="true"></i> &nbsp;&nbsp; Online Examination:Admin Login Panel &nbsp;&nbsp; </b></div> 
      <div class="card-body">
        <form id="myForm" action="loginprocess.php" method="post">
		<div class="msg"></div>
          <div class="form-group">
            <label for="user">Email address</label>
            <input class="form-control" id="user" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
          </div>
          <div class="form-group">
            <label for="pass">Password</label>
            <input class="form-control" id="pass" type="password" placeholder="Password" name="password" required>
          </div>
         
          <button type="Submit" class="btn btn-primary btn-block"> <i class="fa fa-sign-in" aria-hidden="true"></i> &nbsp;&nbsp; Login</button>
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
