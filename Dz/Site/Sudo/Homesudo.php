<?php
$login=$_COOKIE['login'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Homesudo</title>
	<link rel="stylesheet" type="text/css" href="/Dz/site/Css.css">
	<meta charset="utf-8">
</head>
<body>
	
<div class="header">
		<h1>Warehouses</h1>
</div>
<div class="main">
	<div class="content"><div class="menu">
		<p style="background-color:#FF9640; color: #A64B00; border-width: 0px 0px 0px 1px;" >Navigation</p>
		<a href="/Dz/site/Sudo/Homesudo.php">Home</a><br>
		<a href="/Dz/site/Sudo/Sudowarehouses.php">Warehouses</a><br>
		<a href="/Dz/site/Sudo/man.php">Sudo users</a><br>
		<a href="/Dz/site/UniScripts/logout.php">Exit</a><br>
	</div>
		<h1 style="text-align: center;">Welcome, admin!</h1><br>
		<p>Current login: <?php echo "$login";?></p>
	</div></div>
<div class="footer">
		<p>Выполнено студентом МГТУ им. Н.Э. Баумана</p>
			<p>ИУ4-11Б</p></div>
</body>
</html>
