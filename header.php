<?php
	session_start();
	require_once("bd.php");
	if    (!empty($_SESSION['login']) and !empty($_SESSION['password'])){
		//если существует логин и пароль в сессиях, то проверяем их
		$id=$_SESSION['id'];
		$login=$_SESSION['login'];
		$password=$_SESSION['password'];
	}
?>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="stylesheet2.css"/>
		<script type="text/javascript" src="jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="scripts.js"></script>
		<title>Home</title>
	</head>
	<body>	
		<!-- <h2 id="header">Das ist Header</h2> -->
		<div id="header">
			<img src="src\header.png" alt="Warframe" >
			<div class="link_group">
			<?php
				if(!isset($id)){
					echo 
					'<a class="show_popup" rel="log_form" href="#">Log In</a>
					<a class="show_popup" rel="reg_form" href="#">Sign Up</a>';
				}
				else{
					echo
					'<a class="header_button" href="profile.php">Profile</a>
					<a class="header_button" href="exit.php">Log Out</a>';
				}
			?>
			</div>
			<!-- <ul class="headmenu">
				<li><a href="#">Teach me</a>
					<ul class="submenu">
						<li><a href="#">noob</a></li>
						<li><a href="#">lucker</a></li>
						<li><a href="#">pro</a></li>
					</ul>
				</li>
			</ul> -->
		</div>
		<!-- <div id="navbar">
			<a href="index.php" class="navButton">Home</a>
			<a href="alerts.php" class="navButton">Alerts</a>
			<a href="#" class="navButton">InfoCenter</a>
		</div> -->
		
		<ul class="headmenu">
			<li><a href="index.php">Home</a></li>
			<li><a href="alerts.php">Alerts</a>
				<ul class="submenu">
					<li><a href="easy.php">Arthurius</a></li>
					<li><a href="mid.php">Thales</a></li>
					<li><a href="hard.php">Avalon</a></li>
				</ul>
			</li>
			<li><a href="infocenter.php">InfoCenter</a></li>
			<?php
				if(isset($id)&&$id==0){
					echo '
						<li><a href="users.php">Users</a></li>
						<li><a href="admalerts.php">AdminAlerts</a></li>
					';
				}
			?>
		</ul>
		
		<div class="popup log_form">
			<a class="close" href="#">Close</a>
			<h2>Login</h2>
			<form method="post" action="testreg.php">
				<label for="login">Enter login:</label>
				<input type="text" name="login" />
				<label for="password">Enter password:</label>
				<input type="password" name="password" />
				<input type="submit" value="Login" />
			</form>
		</div>
		<div class="popup reg_form">
			<a class="close" href="#">Close</a>
			<h2>Registration</h2>
			<form method="post" action="save_user.php">
				<label for="login">Enter login:</label>
				<input type="text" name="login" />
				<label for="password">Enter password:</label>
				<input type="password" name="password" />
				<!-- <label for="surname">Enter your surname:</label>
				<input type="text" name="surname" />
				<label for="firstname">Enter your name:</label>
				<input type="text" name="firstname" />
				<label for="callname">Enter your callname:</label>
				<input type="text" name="callname" />
				<label>Enter your mothership</label>
				<select name="country">
					<optgroup label="Scientific">
						<option value="Zariman">OSS "Zariman"</option>
						<option value="Whisper">OSS "Whisper"</option>
						<option value="Erforscher">OSS "Erforscher"</option>
						<option value="Trakk">"Trakk" planetary miner</option>
					</optgroup>
					<optgroup label="Military">
						<option value="Madurai">OIN "Madurai"</option>
						<option value="Zenurick">OEF "Zenurick"</option>
					</optgroup>
					<optgroup label="Civil">
						<option value="Aorinju">Aorinju</option>
						<option value="Tekko">Tekko</option>
						<option value="Korutshushi">Korutshushi</option>
						<option value="Atorei">OMS "Atorei"</option>
					</optgroup>
				</select> -->
				<input type="submit" value="Signup" />
			</form>
		</div>