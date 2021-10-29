<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="styles.css">
  	
</head>
<body>
	
		<h1>Student Result Management System</h1>
        <div class="container">
		<form action="" method="post">
			Email ID: <input type="text" name="email" required>
			Passcode: <input type="password" name="password" required>
			<input type="submit" name="submit" value="Login">
		</form>
        </div>
		
		<?php
			session_start();
				if(isset($_POST['submit']))
				{
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"student_result");
				$query = "select * from login where email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) {
					if($row['email'] == $_POST['email']){
						if($row['password'] == $_POST['password']){
							$_SESSION['name'] =  $row['name'];
							$_SESSION['email'] =  $row['email'];
							header("Location: admin_dashboard.php");
						}
						else{
							?>
							<span>Input Didn't Match</span>
							<?php
						}
					}
				}
				
			}
		?>
		
</body>
</html>