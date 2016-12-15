<?php
	require("header.php");
?>		
<div id="left">
	<h1><font color="red">U</font>se<font color="red">r</font>s.</h1>
	<?php
		// выбираем все значения из таблицы "student"
		$qr_result = mysql_query("SELECT * FROM users WHERE id>0")
		or die(mysql_error());
		
		// выводим в HTML-таблицу все данные клиентов из таблицы MySQL 
		while($data = mysql_fetch_array($qr_result)){ 
			echo <<<HTML
			<div class="alert">
				<div class="alert-img">
					<img src="{$data['img']}">
				</div>
				<div class="alert-content">
					ID: {$data['id']}<br>
					Login: {$data['login']}<br>
					Surname: {$data['surname']}<br>
					Name: {$data['name']}<br>
					Callname: {$data['callname']}<br>
					Mothership: {$data['ship']}
				</div>
			</div>
HTML;
  }
?>
</div>
<div id="right">
	<h3>ADMIN</h3>
	<ol class="admin">
		<li><form method="post" action="usrdelete.php">
			<label for="id">ID:</label>
			<input type="text" name="id" />
			<input type="submit" value="DELETE" />
		</form></li>
		<li><form method="post" action="usredit.php">
			<label for="id">ID:</label>
			<input type="text" name="id" />
			<label for="surname">Surname:</label>
			<input type="text" name="surname" />
			<label for="firstname">Name:</label>
			<input type="text" name="firstname" />
			<label for="callname">Callname:</label>
			<input type="text" name="callname" />
			<label>Mothership</label>
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
			<br>
			<label for="password">New password:</label>
			<input type="password" name="password" />
			<br>
			<input type="submit" value="EDIT" />
		</form></li>
		<li><form method="post" action="save_user.php">
				<label for="login">Enter login:</label>
				<input type="text" name="login" />
				<label for="password">Enter password:</label>
				<input type="password" name="password" />
			<input type="submit" value="ADD" />
		</form></li>
	</ol>
</div>
<?php
	require("footer.php");
?>	