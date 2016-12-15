<?php
	require("header.php");
	
    if (isset($_POST['password'])) { 
		$password=$_POST['password']; 
		if ($password =='') { unset($password);} 
		else{
			$password = stripslashes($password);
			$password = htmlspecialchars($password);
			$password = trim($password);
			$query = mysql_query("UPDATE users SET password='$password' WHERE (id='$id')");
		}
	}
    
	if (isset($_POST['surname'])) { 
		$surname=$_POST['surname']; 
		if ($surname =='') { unset($surname);} 
		else{
			$surname = stripslashes($surname);
			$surname = htmlspecialchars($surname);
			$surname = trim($surname);
			$query = mysql_query("UPDATE users SET surname='$surname' WHERE (id='$id')");
		}
	}
	
	if (isset($_POST['firstname'])) { 
		$name=$_POST['firstname']; 
		if ($name =='') { unset($name);} 
		else{
			$name = stripslashes($name);
			$name = htmlspecialchars($name);
			$name = trim($name);
			$query = mysql_query("UPDATE users SET name='$name' WHERE (id='$id')");
		}
	}
	
	if (isset($_POST['callname'])) { 
		$callname=$_POST['callname']; 
		if ($callname =='') { unset($callname);} 
		else{
			$callname = stripslashes($callname);
			$callname = htmlspecialchars($callname);
			$callname = trim($callname);
			$query = mysql_query("UPDATE users SET callname='$callname' WHERE (id='$id')");
		}
	}
	
	if (isset($_POST['ship'])) { 
		$ship=$_POST['ship']; 
		if ($ship =='') { unset($ship);} 
		else{
			$ship = stripslashes($ship);
			$ship = htmlspecialchars($ship);
			$ship = trim($ship);
			$query = mysql_query("UPDATE users SET ship='$ship' WHERE (id='$id')");
		}
	}
	
	exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=edit.php'></head></html>");
?>