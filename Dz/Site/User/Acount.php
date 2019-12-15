<!DOCTYPE html>
<html>
<head>
	<title>My account</title>
	<link rel="stylesheet" type="text/css" href="\Dz\Site\Css.css">
	<meta charset="utf-8">
</head>
<body>
	
<div class="header">
		<h1>Warehouses</h1>
</div>
<div class="main">
	<div class="content"><div class="menu">
		<p style="background-color:#FF9640; color: #A64B00" >Navigation</p>
		<a href="\Dz\Site\UniScripts\Home.php">Home</a><br>
		<a href="\Dz\Site\User\Mywarehouses.php">My warehouses</a><br>
		<a href="\Dz\Site\User\Create.html">New</a><br>
		<a href="\Dz\Site\User\Acount.php">Acount</a><br>
		<a href="/Dz/site/UniScripts/logout.php">Exit</a><br>
	</div>
		<h1 style="text-align: center;">Account</h1><br>
	<?php echo "Current login: ".$_COOKIE['login']."<br><br>"; ?>
	<a href="\Dz\Site\User\Scripts\delete.php">DELETE ACCOUNT</a><br><br>
	<a href="\Dz\Site\User\updateU.php">UPDATE ACCOUNT</a>

</div></div>
<div class="footer">
<p>Выполнено студентом МГТУ им. Н.Э. Баумана</p>
			<p>ИУ4-11Б</p></div>
</body>
</html>
