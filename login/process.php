<?php  

 include('connect.php');
if(isset($_POST['submit']))
{    
		   if (empty($_POST['username']) || empty($_POST['pass']))
		   {
			echo "<script type='text/javascript'>alert('Fill Your Mail Or Password !')</script>";
		   }
		   else{

				$username = $_POST['username'];
                $pass = $_POST['pass'];
				// CHECK FOR THE RECORD FROM TABLE
				$sql = "SELECT * FROM `users` WHERE username='$username' and pass='$pass' ";
		 
				$query = mysqli_query($conn, $sql);
				$row = mysqli_num_rows($query);
             
				if ($row == 1)
					{  
						
						  echo "<script>location.href='../index.php'</script>";
					}
				else{

						echo "<script type='text/javascript'>alert('Yor Mail Or Type Or Password Incorrect If You A New User You Can Sign Up!')</script>";
						echo "<script>location.href='login.php'</script>";
					
						//echo "Invalid Login Credentials";
					}
					
		        }
          
           
}
?>