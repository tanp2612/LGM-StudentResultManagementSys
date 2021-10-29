<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"student_result");
	$query = "update students set class='$_POST[class]',result='$_POST[result]' where roll_no = $_POST[roll_no]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "admin_dashboard.php";
</script>
