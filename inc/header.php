<?php 
$ownersName = "Beneze Tech Store"; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $pageTitle; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/dist/css/skins/_all-skins.min.css">

<!-- Parsley, Toastr, SweetAlert, Validator CSS-->
<link href="<?php echo BASE_URL; ?>assets/bower_components/parsleyjs/src/parsley.css" rel="stylesheet">
<link href="<?php echo BASE_URL; ?>assets/bower_components/toastr/build/toastr.css" rel="stylesheet">
<link href="<?php echo BASE_URL; ?>assets/bower_components/toastr/build/toastr.min.css" rel="stylesheet">
<link href="<?php echo BASE_URL; ?>assets/bower_components/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->


<!-- jQuery 3 -->
<script src="<?php echo BASE_URL;?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo BASE_URL;?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo BASE_URL;?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo BASE_URL;?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo BASE_URL;?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo BASE_URL;?>assets/dist/js/demo.js"></script>
<!-- Parsley, Toastr, SweetAlert, Validator JS-->
<script src="<?php echo BASE_URL; ?>assets/bower_components/parsleyjs/dist/parsley.js"></script>
<script src="<?php echo BASE_URL; ?>assets/bower_components/parsleyjs/dist/parsley.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/bower_components/sweetalert/dist/sweetalert.js"></script>
<script src="<?php echo BASE_URL; ?>assets/bower_components/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/bower_components/toastr/toastr.js"></script>
<script src="<?php echo BASE_URL; ?>assets/bower_components/toastr/build/toastr.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/bower_components/validator/validator.js"></script> 



</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top" style="box-shadow: 0px 6px 3px 0px rgba(0,0,0,0.1)">
      <div class="container">
        <div class="navbar-header">
          <a href="../../index2.html" class="navbar-brand"><b><?php echo $ownersName; ?></b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          
          
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            
            <ul class="nav navbar-nav">
              <li class="<?php if($tagName == "index"){ echo "active"; } ?>">
                <a href="<?php echo BASE_URL;?>index.php">Dashboard</a>
              </li>
              <li class="<?php if($tagName == "products"){ echo "active"; } ?>">
                <a href="<?php echo BASE_URL;?>products.php">Products</a>
              </li>
              <li class="<?php if($tagName == "brand"){ echo "active"; } ?>">
                <a href="<?php echo BASE_URL;?>brand.php" class="">Brand </a>
              </li>
              <li class="<?php if($tagName == "sales"){ echo "active"; } ?>">
                <a href="<?php echo BASE_URL;?>sales.php" class="">Sales </a>
              </li>
            </ul>
            
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="<?php echo BASE_URL;?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">Alexander Pierce</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?php echo BASE_URL;?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>