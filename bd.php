<?php
	/*$db = mysql_connect ("localhost","root","");
	mysql_select_db ("users",$db);*/
	
	$db_host = 'localhost';
    $db_name = 'users';
    $db_username = 'root';
    $db_password = '';

    $isLogin = NULL;
    //$db_table_to_show = 'student';

    // соедин¤емс¤ с сервером базы данных
    $connect_to_db = mysql_connect($db_host, $db_username, $db_password)
    or die("Could not connect: " . mysql_error());

    // подключаемс¤ к базе данных
    mysql_select_db($db_name, $connect_to_db)
    or die("Could not select DB: " . mysql_error());
?> 