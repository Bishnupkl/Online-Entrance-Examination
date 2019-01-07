<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Online Entrance Examination</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <!-- jquery ui-->
  <link href="css/jquery-ui.css" rel="stylesheet">
    <!-- -->
  <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
  
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php"><i><b>Online Entrance Examination</b></i></a>
	<div class="verticalLine"></div>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="background:whitesmoke;">
       <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard"><!--style="border-top:1px solid #D3D2D2;"-->
          <a class="nav-link" href="index" style="color:darkcyan;">
            <i class="fa fa-fw fa-dashboard"></i> &nbsp; &nbsp; &nbsp;
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
		
		<li class="nav-item">
          <a class="nav-link" href="view_student.php" style="color: darkcyan;">
           
            <span class="nav-link-text">Students</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="productadd"><i class="fa fa-plus-circle" aria-hidden="true"></i> &nbsp;&nbsp;Add</a>
            </li>
            <li>
			              <a href="producttable"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp;View</a>
            </li>
          </ul>
        </li>
		
		<li class="nav-item">
          <a class="nav-link" href="view_teacher.php" style="color: darkcyan;">
            <span class="nav-link-text">Teachers</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages1">
            <li>
              <a href="addservice"><i class="fa fa-plus-circle" aria-hidden="true"></i> &nbsp;&nbsp;Add</a>
            </li>
            <li>
              <a href="serviceview"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp;View</a>
            </li>
          </ul>
        </li>
		
		<li class="nav-item">
          <a class="nav-link"  href="view_question.php" style="color: darkcyan;">
            <span class="nav-link-text">Questions</span>
          </a>
         
         
        </li>
		
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link" href="result.php" style="color:darkcyan;">
            <span class="nav-link-text">Result</span>
          </a>
          
        </li>
		
		
	
		
		
		 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages6" data-parent="#exampleAccordion">
            
            <span class="nav-link-text" style="color: darkcyan;">Notice</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages6">
            <li style="background: whitesmoke;">
              <a href="addnotice.php"> &nbsp;&nbsp;Add</a>
            </li>
            <li style="background-color: whitesmoke;">
              <a href="viewnotice.php">&nbsp;&nbsp;View</a>
            </li>
          </ul>
        </li>
		
		
      </ul>
	  
      <ul class="navbar-nav sidenav-toggler" style="background-color:whitesmoke ;">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <span class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a> -->
          <!-- <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div> -->
    <!--     </li> -->
       <!--  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li> -->
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>