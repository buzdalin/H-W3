<?php
$login=$_COOKIE['login'];
	$mysql = new mysqli('localhost', 'root','', 'auth');


	$result=$mysql->query("SELECT * FROM `users` WHERE `login`='$login'");
	$db=$result->fetch_assoc();
?>
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
		<h1 style="text-align: center;">Account Update</h1><br>
		<form method="post" action="update.php">

<p>Insert new login: <input type="text" name="login" placeholder="Login" value="<?php echo($db['login']) ?>"><br></p>
<p>Insert new email: <input type="text" name="email" placeholder="E-mail" value="<?php echo($db['email']) ?>"><br></p>
<p>Insert old password: <input type="password" name="password" placeholder="Old Password"><br></p>
<p>Insert new password: <input type="password" name="password2" placeholder="New Password"><br></p>
<p><input type="submit" value="Registrate"><br></p>
		
	</form>
</div></div>
<div class="footer">
<p>Выполнено студентом МГТУ им. Н.Э. Баумана</p>
			<p>ИУ4-11Б</p></div>
</body>
</html>