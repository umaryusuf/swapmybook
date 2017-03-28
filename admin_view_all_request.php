<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="" />
	<meta name="author" content="" />

	<title>Dashboard | SwapMyBook</title>

  <link rel="stylesheet" type="text/css" href="css/sidebar.css" />
	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<!--  Social Buttons CSS -->
  <link href="css/bootstrap-social.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="shortcut icon" href="images/shortcut.png" />
	<link rel="stylesheet" type="text/css" href="font-awesome-4.5.0/css/font-awesome.min.css" />

</head>
<body>
  <?php
    include_once('log_nav.php');
  ?>
  <div id="wrapper">
    <!--sidebar-->
    <div id="sidebar-wrapper">
      <div class="sidebar-header">
        <div class="profile-photo" style="width:90px; height:78px;">
          <img src="images/user.jpg" class="img img-circle" alt="" width="80" height="78" />
        </div>
        <div class="profile-info" style="width: 160px; padding-left: 5px;">
          <h4>Admin </h4>
          <span><a class="h-icons fa fa-user-md fa-fw"></a></span>
          <span><a class="h-icons fa fa-envelope-o fa-fw"></a></span>
          <span><a class="h-icons fa fa-gears fa-fw"></a></span>
        </div>
      </div>
      <ul id="sidebar-nav" >
        <li><a href="admin_change_username.php"><i class="icons fa fa-gears fa-fw"></i> Change username/password</a></li>
        <li><a href="admin_view_all_request.php"><i class="icons fa fa-tripadvisor fa-fw"></i> View all requests</a></li>
        <li><a href="#"><i class="icons fa fa-book fa-fw"></i> Aunthenticate Book Swap</a></li>
        <li class="active"><a href="admin_all_book_transaction.php"><i class="icons fa fa-book fa-fw"></i> All book transactions </a></li>
        <li><a href="#"><i class="icons fa fa-sign-out fa-fw"></i> Logout</a></li>
      </ul>
    </div>

    <!--content-->
    <div id="page-content-wrapper">
      <div class="container-fliud">
        <div class="row">
          <div class="col-md-12 ">
						<div class="well">
							<h3>Welcome Admin view all result</h3>
	            <p>
	              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	            </p>
						</div>
					</div>
        </div>
      </div>
    </div>
  </div>


	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- Bootstrap Core JavaScript-->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
