<?php
	require("header.php");
	
	$result = mysql_query("SELECT * FROM users WHERE id='$id'"); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysql_fetch_array($result);
	$img = $myrow['img'];
	if(is_null($img)){
		$img="src/default.jpg";
	}
	
	echo<<<HTML
<div id="left">
	<h1><font color="orange">T</font>enno profile: <font color="#A52A2A">{$login}</font></h1>
	<div class="avatar"><img src="{$img}"></div>
	<div class="info">Surname: {$myrow['surname']}</div>
	<div class="info">Name: {$myrow['name']}</div>
	<div class="info">Callname: {$myrow['callname']}</div>
	<div class="info">Mothership: {$myrow['ship']}</div>
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