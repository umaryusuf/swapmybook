<?php 
$name=$_REQUEST['status'];
if($name=="1")
{
	echo<<<_end
		<script language="JavaScript" type="text/javascript">
			var answer=confirm("Are you sure you want to logout?");
			if(!answer)
			{
				window.location="all_book_transaction.php";
			}
			else
			{
				window.location="index.html";
			}

		</script>
_end;
}
elseif ($name=="2")
{	
	echo<<<_end
		<script language="JavaScript" type="text/javascript">
			var answer=confirm("Are you sure you want to logout?");
			if(!answer)
			{
				window.location="view_books_to_be_swapped.php";
			}
			else
			{
				window.location="index.html";
			}
		</script>
_end;
}
elseif ($name=="3")
{	
	echo<<<_end
		<script language="JavaScript" type="text/javascript">
			var answer=confirm("Are you sure you want to logout?");
			if(!answer)
			{
				window.location="view_book_request.php";
			}
			else
			{
				window.location="index.html";
			}
		</script>
_end;
}
elseif ($name=="4")
{
	echo<<<_end
		<script language="JavaScript" type="text/javascript">
			var answer=confirm("Are you sure you want to logout?");
			if(!answer)
			{
				window.location="give_a_book.php";
			}
			else
			{
				window.location="index.html";
			}
		</script>
_end;
}
elseif ($name=="5")
{
	echo<<<_end
		<script language="JavaScript" type="text/javascript">
			var answer=confirm("Are you sure you want to logout?");
			if(!answer)
			{
				window.location="request_for_book.php";
			}
			else
			{
				window.location="index.html";
			}
		</script>
_end;
}
elseif ($name=="6")
{
	echo<<<_end
		<script language="JavaScript" type="text/javascript">
			var answer=confirm("Are you sure you want to logout?");
			if(!answer)
			{
				window.location="userDashboard.php";
			}
			else
			{
				window.location="index.html";
			}
		</script>
_end;
}
?>