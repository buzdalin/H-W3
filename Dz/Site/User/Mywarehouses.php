<?php
if (empty($_COOKIE['login'])) {
	header("location: \Dz\Site\User\Auth.html");
	exit();};
$login=$_COOKIE['login'];
	$id=0;

?>
<!DOCTYPE html>
<html>
<head>
	<title>My warehouse</title>
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
	</div>		<h1 style="text-align: center;">My warehouses</h1>
	
	<table border="5">
		<tr>
			<th>Place</th>
			<th>Size</th>
			<th>Secure</th>
			<th>Comment</th>
			<th colspan="2">Manage</th>
		</tr>
<?php
$mysql = new mysqli('localhost', 'root','', 'auth');
$result=$mysql->query("SELECT `place`, `size`, `secure`, `comment`, `code` FROM `list` WHERE `login`='$login'");
$all = mysqli_num_rows($result); // количество полученных строк
while ($db=$result->fetch_assoc()) {
	echo "<tr>
	<td>".$db['place']."</td>
	<td>".$db['size']."</td>
	<td>".$db['secure']."</td>
	<td>".$db['comment']."</td>
	<td><a href=\"\Dz\Site\User\WareH.php?code=",$db['code'],"\">SHOW</a></td>
	<td><a href=\"\Dz\Site\User\Scripts\deleteWH.php?code=",$db['code'],"\">DELETE</a></td>
	</tr>";

}

echo "</table>";
echo "<p>Total: ".$all."</p>";
?>
	</div></div>
<div class="footer">
		<p>Выполнено студентом МГТУ им. Н.Э. Баумана</p>
			<p>ИУ4-11Б</p>
</div>
</body>
</html>