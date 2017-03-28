<?php
session_start();
include "swapmybookproject.php";
	if(isset($_POST['submit']))
	{
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$username=$_POST['username'];
		$password1=$_POST['password1'];
		$password2=$_POST['password2'];
		$status="user";
		$result = mysql_query("INSERT INTO users (email, phone, username, password, status) VALUES('{$email}', '{$phone}', '{$username}', '{$password1}', '{$status}')")or die(mysql_error());
			if(!$result)
			{
				echo<<<_end
								<script language="JavaScript" type="text/javascript">
									var answer=confirm("Information could not be submitted. Please try again");
									if(!answer)
									{
										window.location="signin_signup.php";
									}
									else
									{
										window.location="signin_signup.php";
									}
								</script>
								
_end;
			}
			else
			{
				echo<<<_end
								<script language="JavaScript" type="text/javascript">
								var answer=confirm("User Account Successfully created. Please Login to continue");
								if(!answer)
								{
									window.location="signin_signup.php";
								}
								else
								{										
									window.location="signin_signup.php";
								}
									</script>
_end;
			}
	}
	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		if ($username == "" || $password == "")
		{
			echo<<<_end
				<script language="JavaScript" type="text/javascript">
					alert("Username/Password cannot be empty. Please try again.");	
				</script>
_end;
		}
		else
		{
		
		$result2 = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'")or die(mysql_error());
							$row=mysql_fetch_array($result2);
							
							if (mysql_num_rows($result2) < 1){
								echo<<<_end
								<script language="JavaScript" type="text/javascript">
									alert("Could not Login. Username and/or Password do not match");
								</script>
_end;
							}
							else
							{
								$userId=$row['status'];
								if($userId=="admin")
								{
									$adminUsername=$row['username'];
									$adminPassword=$row['password'];
									$_SESSION['adminUsername']=$adminUsername;
									$_SESSION['adminPassword']=$adminPassword;
									header("location: adminDashboard.php");
								}
								else
								{
									$userId=$row['userId'];
									$userUsername=$row['username'];
									$userPassword=$row['password'];
									$_SESSION['userId']=$userId;
									$_SESSION['userUsername']=$userUsername;
									$_SESSION['userPassword']=$userPassword;
									
									header("location: userDashboard.php");
								}
							}
		}					
	}
?>
<!doctype html>
<html>
<head>
<title>SignIn || SignUp</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<!-- Bootstrap Core CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<!-- css files -->
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link href="css/form.css" rel='stylesheet' type='text/css' media="all" />
<!-- shortcut icon -->
<link rel="shortcut icon" href="images/shortcut.png" />
<!-- font-awesome -->
<link rel="stylesheet" type="text/css" href="font-awesome-4.5.0/css/font-awesome.min.css" />
<!-- css files -->
<link href="css/form.css" rel='stylesheet' type='text/css' media="all" />
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

<script type="application/x-javascript"> 
	addEventListener("load", function() { 
		setTimeout(hideURLbar, 0); 
	}, false); 
	function hideURLbar(){ 
		window.scrollTo(0,1); 
	} 
</script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navBar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html">SwapMyBook</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="navBar">
			<ul class="nav navbar-nav">
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="signin_signup.php">Signin/Signup</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
	</div>
</nav>


<h1 style="color:#000;">SignIn/SignUp</h1>
<div class="form-w3ls">
    <ul class="tab-group cl-effect-4">
        <li class="tab active"><a href="#signin-agile">Sign In</a></li>
		<li class="tab"><a href="#signup-agile">Sign Up</a></li>        
    </ul>
    <div class="tab-content">
        <div id="signin-agile">   
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				
				<p class="header">User Name:</p>
				<input type="text" name="username" placeholder="User Name" class="text_input"  >
				
				<p class="header">Password:</p>
				<input type="password" placeholder="password" name="password" class="text_input" >
				
				<input type="checkbox" id="brand" value="">
				<label for="brand"><span></span> Remember me?</label>
				
				<input type="submit" class="sign-in" value="Sign In" name="login">
				
				<ul class="links">
					<li class="pass-w3ls"><a href="#">Forgot Password</a></li>
				</ul>
			</form>
		</div>
		<div id="signup-agile">   
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				
				<p class="header">Email Address: </p>
				<input type="email" name="email" placeholder="Email@address.com" id="form-email" required>

				<p class="header">Phone:</p>
				<input type="tel" name="phone" placeholder="Your Phone Number" id="form-phone">
				
				<p class="header">User Name: </p>
				<input type="text" name="username" id="form-username" placeholder="Enter Full Name" required>

				<p><span class="error_form" id="password_error_message"></span></p>
				<p class="header">Password:</p>
				<input type="password" name="password1" placeholder="Password" id="form_password" required>
				
				<p><span class="error_form" id="retype_password_error_message"></span></p>
				<p class="header">Confirm Password: </p>
				<input type="password" name="password2" placeholder="Confirm Password" id="form_retype_password" required>
				
				<input type="submit" class="register" name="submit" value="Register">
			</form>
		</div> 
    </div><!-- tab-content -->
</div> <!-- /form -->	  

<!-- js files -->
<script src='js/jquery-2.1.4.min.js'></script>
<script src="js/index.js"></script>
<script src="js/form-validate.js"></script>

<!-- /js files -->
</body>
</html>