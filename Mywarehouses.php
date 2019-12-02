<?php
if (empty($_COOKIE['login'])) {
	header("location: Auth.html");
	exit();};
$login=$_COOKIE['login'];
	$array1 = array();
$mysql = new mysqli('localhost', 'root','', 'auth');
$result=$mysql->query("SELECT `code` FROM `list` WHERE `login`='$login'");
		while ($dbcode = $result->fetch_assoc()) {
			$code=$dbcode['code'];
				$dbmysql = new mysqli('localhost', 'root','', 'warehouses');
				$dbresult=$dbmysql->query("SELECT `text` FROM `$code`");
				$text=$dbresult->fetch_assoc();
				$array1[]=$text['text'];};
echo '<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="Css.css">
	<meta charset="utf-8">
</head>
<body>
	
<div class="header">
		<h1>Warehouses</h1>
</div>
<div class="main">
	<div class="content"><div class="menu">
		<p style="background-color:#FF9640; color: #A64B00" >Navigation</p>
		<a href="Home.php">Home</a><br>
		<a href="Mywarehouses.php">My warehouses</a><br>
		<a href="Create.html">New</a><br>
		<a href="Acount.php">Acount</a><br>
		<a href="logout.php">Exit</a><br>
	</div>
		<h1 style="text-align: center;">Контент</h1>';
		echo '<table>';
		foreach ($array1 as $key => $value) {
			echo "<tr><td>".$value."</td></tr>";}
		echo "</table>";
echo '</div></div>
<div class="footer">
		<h1>Футер</h1>
</div>
</body>
</html>';	



?>