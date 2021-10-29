<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"student_result");
	$query = "insert into students values('','$_POST[roll_no]','$_POST[name]','$_POST[class]','$_POST[email]','$_POST[password]','$_POST[result]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Student added successfully.");
	window.location.href = "admin_dashboard.php";
</script>


