<?php
	require("header.php");
	
	$alertid = $_POST['id'];
	
	$query = mysql_query("DELETE FROM users WHERE (id='$alertid')");
	
	exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=admalerts.php'></head></html>");
?>