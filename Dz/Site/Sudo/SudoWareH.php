<?php
if (empty($_COOKIE['login'])) {
	header("location: Auth.html");
	exit();};
$login=$_COOKIE['login'];
	$id=0;
$code=$_GET['code'];
?>
<!DOCTYPE html>
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
		<p style="background-color:#FF9640; color: #A64B00; border-width: 0px 0px 0px 1px;" >Navigation</p>
		<a href="Home.php">Home</a><br>
		<a href="Sudowarehouses.php">Warehouses</a><br>
		<a href="man.php">Sudo users</a><br>
		<a href="logout.php">Exit</a><br>
	</div>
		<h1 style="text-align: center;">Items</h1>
	<form method="POST" action="<?php 
	print_r($_POST["manage$id"]);
	?>">
	<table border="5">
		<tr>
			<th>Name</th>
			<th>Size</th>
			<th>Mass</th>
			<th>CodNumber</th>
		</tr>
<?php
$mysql = new mysqli('localhost', 'root','', 'auth');
$result=$mysql->query("SELECT * FROM `$code` ");
$all = mysqli_num_rows($result); // количество полученных строк
while ($db=$result->fetch_assoc()) {
	echo "<tr>
	<td>".$db['name']."</td>
	<td>".$db['size']."</td>
	<td>".$db['mass']."</td>
	<td>".$db['num']."</td>
	</tr>";

}

echo "</table>";
echo "<p>Total: ".$all."</p>";




?>
<a href="Sudowarehouses.php">Back</a>
	</div></div>
<div class="footer">
		<p>Выполнено студентом МГТУ им. Н.Э. Баумана</p>
			<p>ИУ4-11Б</p></div>
</body>
</html>
