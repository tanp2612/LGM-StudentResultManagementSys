<!DOCTYPE html>
<html>
<head>
	<title>Student's Login</title>
	<link rel="stylesheet" href="styles.css">
  	<style>
     Body {
       background-color: #B0BEC5;
        }
    .container { 
       background-color: #B9F6CA;
        }
      </style>
</head>
<body>
	<br><br>
		<h1 class="meta" >Login Here To Display Your Results!!</h1><br>
        <div class="container">
		<form action="" method="post">
			Email ID: <input type="text" name="email" required><br><br>
			Passcode: <input type="password" name="password" required><br><br>
			<input type="submit" name="submit" value="Login">
		</form><br>
        </div>
		
		<?php
		session_start();
        if(isset($_POST['submit']))
        {
            $connection = mysqli_connect("localhost","root","");
            $db = mysqli_select_db($connection,"student_result");
            $query = "select * from students where email = '$_POST[email]'";
            $query_run = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($query_run)) 
            {
                if($row['email'] == $_POST['email'])
                {
                    if($row['password'] == $_POST['password'])
                    {
                        $_SESSION['name'] =  $row['name'];
                        $_SESSION['email'] =  $row['email'];
							header("Location: student_dashboard.php");
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