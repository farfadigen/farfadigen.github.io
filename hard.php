<?php
	require("header.php");
?>		
<div id="left">
	<h1><font color="orange">A</font>va<font color="orange">l</font>on type alerts.</h1>
	<?php
		// выбираем все значения из таблицы "student"
		$qr_result = mysql_query("SELECT sectors.img, sectors.name, alerts.threat, alerts.tenno FROM alerts INNER JOIN sectors ON alerts.sector=sectors.id WHERE alerts.lvl=3")
		or die(mysql_error());
		
		// выводим в HTML-таблицу все данные клиентов из таблицы MySQL 
		while($data = mysql_fetch_array($qr_result)){ 
			echo <<<HTML
			<div class="alert">
				<div class="alert-img">
					<img src="{$data['img']}">
				</div>
				<div class="alert-content">
					Sector: {$data['name']}<br>
					Info: {$data['threat']}<br>
					Tenno sent: {$data['tenno']}
				</div>
			</div>
HTML;
  }
?>
</div>
<div id="right">
	<h3>Chose type</h3>
	<ol>
		<li><a href="easy.php">Arthurius</a></li>
		<li><a href="mid.php">Thales</a></li>
		<li><a href="hard.php">Avalon</a></li>
	</ol>
</div>
<?php
	require("footer.php");
?>	