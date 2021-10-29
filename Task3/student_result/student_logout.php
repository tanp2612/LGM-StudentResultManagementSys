<?php
	session_unset();
	session_destroy();
	header("Location: student_login.php");
?>