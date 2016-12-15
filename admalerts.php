<?php
	require("header.php");
?>		
<div id="left">
	<h1><font color="red">A</font>le<font color="red">r</font>ts administration.</h1>
	<?php
		// выбираем все значения из таблицы "student"
		$qr_result = mysql_query("
			SELECT alerts.id, sectors.img, sectors.name, alerts.threat, alerts.tenno, alerts.lvl
			FROM alerts INNER JOIN sectors ON alerts.sector=sectors.id
		")
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
					Sector: {$data['name']}<br>
					Info: {$data['threat']}<br>
					Threat level: {$data['lvl']}<br>
					Tenno sent: {$data['tenno']}
				</div>
			</div>
HTML;
  }
?>
</div>
<div id="right">
	<h3>ADMIN</h3>
	<ol class="admin">
		<li><form method="post" action="alertsdelete.php">
			<label for="id">ID:</label>
			<input type="text" name="id" />
			<input type="submit" value="DELETE" />
		</form></li>
		<li><form method="post" action="alertedit.php">
			<label for="id">ID:</label>
			<input type="text" name="id" />
			<label for="sector">SectorID:</label>
			<input type="text" name="sector" />
			<label for="info">Info:</label>
			<input type="text" name="info" />
			<label for="lvl">Threat level:</label>
			<input type="text" name="lvl" />
			<label for="tenno">TennoID:</label>
			<input type="text" name="tenno" />
			<br>
			<input type="submit" value="EDIT" />
		</form></li>
		<li><form method="post" action="addalert.php">
			<label for="sector">SectorID:</label>
			<input type="text" name="sector" />
			<label for="info">Info:</label>
			<input type="text" name="info" />
			<label for="lvl">Threat level:</label>
			<input type="text" name="lvl" />
			<label for="tenno">TennoID:</label>
			<input type="text" name="tenno" />
			<br>
			<input type="submit" value="ADD" />
		</form></li>
	</ol>
</div>
<?php
	require("footer.php");
?>	