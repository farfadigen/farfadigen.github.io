<?php
	session_start();
	require("header.php");
	if    (empty($_SESSION['login']) or empty($_SESSION['password'])){
		//если не существует сессии с логином и паролем, значит на    этот файл попал невошедший пользователь. Ему тут не место. Выдаем сообщение    об 	ошибке, останавливаем скрипт
		exit ('<h3>You are not logged in, sorry.</h3>');
	}
    
	unset($_SESSION['password']);
	unset($_SESSION['login']); 
	unset($_SESSION['id']);//    уничтожаем переменные в сессиях
	exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>");
	//exit("<h3>You logged out successfuly.</h3>");
        
	require("footer.php");
?>