<?php
session_start();
?>
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
    include_once('nav.php');
  ?>

  <div id="wrapper">
    <!--sidebar-->
    <div id="sidebar-wrapper">
      <div class="sidebar-header">
        <div class="profile-photo" style="width:90px; height:78px;">
          <img src="images/user.jpg" class="img img-circle" alt="" width="80" height="78" />
        </div>
        <div class="profile-info" style="width: 160px; padding-left: 5px;">
           <h4><?php 
                    $userUsername=$_SESSION['userUsername'];
                    echo $userUsername;
                  ?>
           </h4>
          <span><a class="h-icons fa fa-user-md fa-fw"></a></span>
          <span><a class="h-icons fa fa-envelope-o fa-fw"></a></span>
          <span><a class="h-icons fa fa-gears fa-fw"></a></span>
        </div>
      </div>
      <ul id="sidebar-nav" >
        <li>
          <a href="userDashboard.php"><i class="icons fa fa-user fa-fw"></i> View/Update</a>
        </li>
        <li><a href="request_for_book.php"><i class="icons fa fa-book fa-fw"></i> Request for a book</a></li>
        <li><a href="give_a_book.php"><i class="icons fa fa-exchange fa-fw"></i> Offer/Swap a book</a></li>
        <li><a href="view_book_request.php"><i class="icons fa fa-tripadvisor fa-fw"></i> View Requested Book(s)</a></li>
        <li><a href="view_books_to_be_swapped.php"><i class="icons fa fa-hand-o-right fa-fw"></i> View Offered book(s)</a></li>
        <li><a href="all_book_transaction.php"><i class="icons fa fa-book fa-fw"></i> All book transactions </a></li>
        <li><a href="logout.php?status=1"><i class="icons fa fa-sign-out fa-fw"></i> Logout</a></li>
      </ul>
    </div>

    <!--content-->
    <div id="page-content-wrapper">
      <div class="container-fliud">
        <div class="row">
          <div class="col-md-12 ">
						<div class="well">
							<h3>All book transactions</h3>
	            <p>
	              Below is an overview of your book transactions - both books you have swapped/donated and books you have requested for. in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
