<?php
	require("header.php");
	
	$usrid = $_POST['id'];
	
	$query = mysql_query("DELETE FROM users WHERE (id='$usrid')");
	
	exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=users.php'></head></html>");
?>