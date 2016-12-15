<?php
	require("header.php");
	
	$result = mysql_query("SELECT * FROM users WHERE login='$login'"); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysql_fetch_array($result);
	
	echo<<<HTML
<div id="left">
	<h1><font color="orange">T</font>enno profile editing: <font color="#A52A2A">{$login}</font></h1>
	<form class="usredit" method="post" action="update_user.php">
				<p>
				<label for="surname">Enter your surname:</label>
				<input type="text" name="surname" />
				</p>
				<p>
				<label for="firstname">Enter your name:</label>
				<input type="text" name="firstname" />
				</p>
				<p>
				<label for="callname">Enter your callname:</label>
				<input type="text" name="callname" />
				</p>
				<p>
				<label>Enter your mothership</label>
				<select name="ship">
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
				</select>
				</p>
				<br>
				<p>
				<label for="password">Enter new password to change it:</label>
				<input type="password" name="password" />
				</p>
				<br>
				<input class="regButton" type="submit" value="Apply" />
			</form>
</div>
<div id="right">
	<h3>Profile</h3>
	<ol>
		<li><a href="profile.php">Overview</a></li>
		<li><a href="ava.php">Avatar</a></li>
		<li><a href="edit.php">Edit</a></li>
	</ol>
</div>
HTML;
	
	require("footer.php");
?>