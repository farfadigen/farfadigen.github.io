<?php
	require("header.php");
?>
<div id="left">
	<h1><font color="orange">A</font>ler<font color="orange">t</font>s.</h1>
	<p>Alerts is the threat signals coming from the entire system. It might be anything: grineer assaulting civil colony, corpus seeking anscient artifacts, infested ship came out of the Void, - and almost every needs tenno attention.</p>
	<h3>All alerts divided into three groups according to the level of threat:</h3>
	<ul type="disc">
		<li>Arthurius - any tenno allowed, the common threats.</li>
		<li>Thales - not recommended for beginners</li>
		<li>Avalon - only for experienced tenno, hardened in battles with deadliest Void creatures.</li>
	</ul>
</div>
<div id="right">
	<h3>Choose type</h3>
	<ol>
		<li><a href="easy.php">Arthurius</a></li>
		<li><a href="mid.php">Thales</a></li>
		<li><a href="hard.php">Avalon</a></li>
	</ol>
</div>
<?php
	require("footer.php");
?>