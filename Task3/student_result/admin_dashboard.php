<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	
  	
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
      <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	
  	
	<style type="text/css">
		
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

    <button class="btn btn-warning"><a href="logout.php">Logout</a></button>
	<div id="boo">
		
		<form action="" method="post">
		
            <div class="btn-group" role="group" aria-label="Basic example">

                <button type="submit" name="search_student" value="Search Student" class="btn btn-info">Search Student</button>
                <button type="submit" name="edit_student" value="Edit Student"class="btn btn-warning">Edit Student</button>
                <button type="submit" name="add_new_student" value="Add New Student" class="btn btn-info">Add Student</button>
                <button class="btn btn-warning" type="submit" name="delete_student" value="Delete Student">Delete Student</button>

            </div>
			
		</form>
	</div>
	<div id="baz">
		<div id="bar">
		<!-- #Code for search student---Start-->
			<?php
				if(isset($_POST['search_student']))
				{
					?>
					<form action="" method="post">
					&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
					<input class="btn btn-warning" type="submit" name="search" value="Search">
					</form>
					<?php
				}
				if(isset($_POST['search']))
			{
				$query = "select * from students where roll_no = '$_POST[roll_no]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
		</div>
  
    </div>

<table class="table">
  <thead class="thead-dark">
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
			
	<!-- #Code for edit student details---Start-->
		
		<?php
			if(isset($_POST['edit_student']))
			{
				?>
			
				<form action="" method="post">
				&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
				<input class="btn btn-info" type="submit" name="search" value="Search">
				</form>
			<?php
			}
			if(isset($_POST['search']))
			{
				$query = "select * from students where roll_no = $_POST[roll_no]";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
				   <form action="admin_edit_student.php" method="post">
				    </div>

					</div>
					<table class="table">
                        <thead class="thead-dark">
                        <tr>
                          <th scope="row">Roll No:</th>
	                      <th scope="row">Class:</th>
                          <th scope="row">Result:</th>
					      <th scope="row"> </th>
                        </tr>
                       </thead>
                       <tbody>
                        <tr>
                          <td scope="col"><input type="text" name="roll_no" value="<?php echo $row['roll_no']?>">
	                      <td><input type="text" name="class" value="<?php echo $row['class']?>">
                          <td><input type="text" name="result" value="<?php echo $row['result']?>">
	                      <td><input class="btn btn-info" type="submit" name="edit" value="Save">
	                    </tr>
                        </tbody>
                    </table>
					</form>
					<?php
				}
			}
		?>
		<!-- #Code for Delete student details---Start-->
		<?php
			if(isset($_POST['delete_student']))
			{
				?>
			
				<form action="delete_student.php" method="post">
				&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
				<input class="btn btn-warning" type="submit" name="search" value="Delete">
				</form>
			
				<?php
			}
			?>

			<?php 
				if(isset($_POST['add_new_student'])){
					?>
				   
					<form action="add_student.php" method="post">
				</div>
			</div>
					<table class="table">
                        <thead class="thead-dark">
                          <tr>
                             <th scope="col">Roll No:</th>
	                         <th scope="col">Class:</th>
                             <th scope="col">Email:</th>
							 <th scope="col">Password:</th>
							 <th scope="col">Name:</th>
					         <th scope="col">Result:</th>
							 <th scope="col"> </th>
                           </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row"><input type="text" name="roll_no" required></th>
	                        <td><input type="text" name="class" required></td>
							<td><input type="text" name="email" required></td>
							<td><input type="text" name="password" required></td>
							<td><input type="text" name="name" required></td>
                            <td><input type="text" name="result" required></td>
	                        <td><input class="btn btn-info" type="submit" name="add" value="Add Student"></td>
	                      </tr>
                        </tbody>
                    </table>
					</form>
					<?php
				}
			?>
			
		</div>
	</div>
</body>
</html>