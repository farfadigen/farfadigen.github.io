<?php
	require("header.php");
	
    if (isset($_POST['sector'])) { $sector = $_POST['sector']; if ($sector == '') { unset($sector);} }
    if (isset($_POST['info'])) { $info=$_POST['info']; if ($info =='') { unset($info);} }
	if (isset($_POST['lvl'])) { $lvl=$_POST['lvl']; if ($lvl =='') { unset($lvl);} }
	if (isset($_POST['tenno'])) { $tenno=$_POST['tenno']; if ($tenno =='') { $tenno=NULL;} }
	
	if (empty($sector) or empty($info) or empty($lvl)) 
    {
		exit ("<h3>You entered not enough information.</h3>");
    }
    
    $sector = stripslashes($sector);
    $sector = htmlspecialchars($sector);
	$info = stripslashes($info);
    $info = htmlspecialchars($info);
	$lvl = stripslashes($lvl);
    $lvl = htmlspecialchars($lvl);
	$tenno = stripslashes($tenno);
    $tenno = htmlspecialchars($tenno);
	
    $sector = trim($sector);
    $info = trim($info);
	$lvl = trim($lvl);
	$tenno = trim($tenno);
	
    $result2 = mysql_query ("INSERT INTO alerts (sector,threat,tenno,lvl) VALUES('$sector','$info','$tenno','$lvl')");
    
    if ($result2=='TRUE')
    {
		exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=admalerts.php'></head></html>");
    }
	else {
		echo "<h3>Error, you aren't registered.</h3>";
    }
	
	require("footer.php");
?>