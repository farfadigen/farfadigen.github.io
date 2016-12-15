<?php
	require("header.php");
	
	$result = mysql_query("SELECT * FROM users WHERE login='$login'"); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysql_fetch_array($result);
	$img = $myrow['img'];
	if(is_null($img)){
		$img="src/default.jpg";
	}
?>

<div id="left">
	<h1><font color="orange">T</font>enno profile: <font color="#A52A2A"><?php echo $login?></font></h1>
	<div class="avatar"><img src="<?php echo $img?>"></div>
	<form class="avachng" enctype="multipart/form-data" name="avatarchng" method="POST" action="avachng.php">
		<p>
			<label>Choose .jpg, .gif or .png:<br></label>
			<input type="FILE" name="fupload">
		</p>
		<input class="regButton" type="submit" value="Apply" name="suubmit">
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

<?php
	require("footer.php");
?>