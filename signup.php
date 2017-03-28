<?php
session_start();
include "swapmybookproject.php";
	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$password1=$_POST['password1'];
		$password2=$_POST['password2'];
		if ($password1!==$password2){
echo<<<_end
							<script language="JavaScript" type="text/javascript">
						var answer=confirm("Passwords do not match. Please try again");
						if(!answer)
						{
							window.location="signin_signup.html";
						}
						else
						{
							window.location="signin_signup.html";
						}
					</script>
_end;
		}
	}	

?>