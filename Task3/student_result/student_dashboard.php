<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Student Dashboard</title>
    <style>
	#boo{
            margin: 1%;
            padding: 20px 70px 400px 520px;
			top: 10%;
			position: relative;	
        	}

        
        #baz{
			height: 75%;
			width: 80%;
			
			position: fixed;
			left: 37%;
			top: 41%;
			color: skyblue;
			
		}
		</style>
		<?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"student_result");
	?>
</head>
<body>
<button class="btn btn-warning"><a href="student_logout.php">Logout</a></button>
	<div id="boo">
		
		<form action="" method="post">
		
            <div class="btn-group" role="group" aria-label="Basic example">

                <button type="submit" name="search_student" value="Search Student" class="btn btn-info">Display My Result</button>
               
            </div>
			
		</form>
	</div>
	
		<div id="baz">
		  <div id="bar">
		
			<?php
				if(isset($_POST['search_student']))
				{
					?>
					<form action="" method="post">
					&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
					<input class="btn btn-warning" type="submit" name="display" value="Search">
					</form>
					<?php
				}
				if(isset($_POST['display']))
			{
				$query = "select * from students where roll_no = '$_POST[roll_no]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
		</div>
  
    </div>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Roll No:</th>
	  <th scope="col">Name:</th>
      <th scope="col">Email:</th>
      <th scope="col">Result</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><input type="text" value="<?php echo $row['roll_no']?>" disabled>
      <td><input type="text" value="<?php echo $row['name']?>" disabled>
      <td><input type="text" value="<?php echo $row['email']?>" disabled>
      <td><input type="text" value="<?php echo $row['result']?>" disabled>
	  
	</tr>
  </tbody>
</table>
      <?php
    }
  }
?>
			</div></div>
</body>

</html>