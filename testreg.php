<?php	
	session_start();
	require("header.php");
	
	if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
	if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
		exit ("<h3>You entered not enough information.</h3>");
    }
    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
	$password = stripslashes($password);
    $password = htmlspecialchars($password);
	//удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);

	// подключаемся к базе
    //include ("bd.php");
 
	$result = mysql_query("SELECT * FROM users WHERE login='$login'"); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysql_fetch_array($result);
    if (empty($myrow['password']))
    {
		//если пользователя с введенным логином не существует
		exit ("<h3>Sorry, your login or password is incorrect.</h3>");
    }
    else {
		//если существует, то сверяем пароли
		if ($myrow['password']==$password) {
			//если пароли совпадают, то запускаем пользователю сессию
			$_SESSION['password']=$myrow['password'];
			$_SESSION['login']=$myrow['login']; 
			$_SESSION['id']=$myrow['id'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
			exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>");
			//echo "<h3>You entered successfully.</h3>";
		}
		else {
			//если пароли не сошлись
			exit ("<h3>Sorry, your login or password is incorrect.</h3>");
		}
    }
	
	require("footer.php");
?>