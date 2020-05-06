
<?php
include('connect.php');
if(isset($_POST['submit']))
{
	if(empty($_POST['username']) || empty($_POST['mail']) || empty($_POST['Gender']) || empty($_POST['pass']))
	{
		echo "<script type='text/javascript'>alert('You must fill fields ')</script>";

		echo "<script type='text/javascript'>location.href='register.php'</script>";

	
	}
	else{
         	$username=$_POST['username'];
			$mail=$_POST['mail'];
			$Gender=$_POST['Gender'];
			$pass=$_POST['pass'];
			$sql="INSERT INTO `users` VALUES (NULL,'$username','$mail','$Gender','$pass')";


			if(mysqli_query($conne,$sql))
			{
				echo "<script type='text/javascript'>location.href='../login/login.php'</script>";

			}
			
	}
}
?>


