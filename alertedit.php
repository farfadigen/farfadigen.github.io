<?php
	require("header.php");
	
	$alertid = $_POST['id'];
	
    if (isset($_POST['sector'])) { 
		$sector=$_POST['sector']; 
		if ($sector =='') { unset($sector);} 
		else{
			$sector = stripslashes($sector);
			$sector = htmlspecialchars($sector);
			$sector = trim($sector);
			$query = mysql_query("UPDATE alerts SET sector='$sector' WHERE (id='$alertid')");
		}
	}
    
	if (isset($_POST['info'])) { 
		$info=$_POST['info']; 
		if ($info =='') { unset($info);} 
		else{
			$info = stripslashes($info);
			$info = htmlspecialchars($info);
			$info = trim($info);
			$query = mysql_query("UPDATE alerts SET threat='$info' WHERE (id='$alertid')");
		}
	}
	
	if (isset($_POST['lvl'])) { 
		$lvl=$_POST['lvl']; 
		if ($lvl =='') { unset($lvl);} 
		else{
			$lvl = stripslashes($lvl);
			$lvl = htmlspecialchars($lvl);
			$lvl = trim($lvl);
			$query = mysql_query("UPDATE alerts SET lvl='$lvl' WHERE (id='$alertid')");
		}
	}
	
	if (isset($_POST['tenno'])) { 
		$tenno=$_POST['tenno']; 
		if ($tenno =='') { unset($tenno);} 
		else{
			$tenno = stripslashes($tenno);
			$tenno = htmlspecialchars($tenno);
			$tenno = trim($tenno);
			$query = mysql_query("UPDATE users SET tenno='$tenno' WHERE (id='$alertid')");
		}
	}
	
	exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=admalerts.php'></head></html>");
?>