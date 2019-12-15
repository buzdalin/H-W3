<?php
if (empty($_COOKIE['login'])) {
	header('location: Auth.html');
	exit();};
$login=$_COOKIE['login'];?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
		<h1 style="text-align: center;">All Warehouses</h1>
	
	<table border="5">
		<tr>
			<th>Login</th>
			<th>Place</th>
			<th>Size</th>
			<th>Secure</th>
			<th>Comment</th>
		</tr>
<?php
$mysql = new mysqli('localhost', 'root','', 'auth');
$result=$mysql->query("SELECT * FROM `list` ");
$all = mysqli_num_rows($result); // количество полученных строк
while ($db=$result->fetch_assoc()) {
	echo "<tr>
	<td>".$db['login']."</td>
	<td>".$db['place']."</td>
	<td>".$db['size']."</td>
	<td>".$db['secure']."</td>
	<td>".$db['comment']."</td>
	<td><a href=\"/Dz/site/Sudo/SudoWareH.php?code=",$db['code'],"\">SHOW</a></td>
	</tr>";

}

echo "</table>";
echo "<p>Total: ".$all."</p>";
?>
	</div></div>
<div class="footer">
		<p>Выполнено студентом МГТУ им. Н.Э. Баумана</p>
			<p>ИУ4-11Б</p></div>
</body>
</html>
