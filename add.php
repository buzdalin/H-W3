<?php
if (empty($_COOKIE['login'])) {
	header("location: Auth.html");
	exit();};
$login=$_COOKIE['login'];
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
		<p style="background-color:#FF9640; color: #A64B00" >Navigation</p>
		<a href="Home.php">Home</a><br>
		<a href="Mywarehouses.php">My warehouses</a><br>
		<a href="Create.html">New</a><br>
		<a href="Acount.php">Acount</a><br>
		<a href="logout.php">Exit</a><br>
	</div>
		<h1 style="text-align: center;">Контент</h1>
	<form method="post" action="">
		<input type="text" name="name" placeholder="Item name"><br><br>
		<input type="text" name="size" placeholder="Item size MxMxM"><br><br>
		<input type="text" name="mass" placeholder="Item mass in kg"><br><br>
		<input type="text" name="num" placeholder="Item code(digits)"><br><br>
		<input type="submit" value="Add">
	</form>
	<?php
$name=$_POST['name'];
$size=$_POST['size'];
$mass=$_POST['mass'];
$num=$_POST['num'];
echo "$name, $size, $mass, $num";
if (empty($name)) {
exit();
}
if (empty($size)) {
exit();
}
if (empty($mass)) {
exit();
}
echo "OK";
$mysql = new mysqli('localhost', 'root','', 'auth');
$result=$mysql->query("INSERT INTO `$code`(`name`, `size`, `mass`, `num`) VALUES ('$name','$size','$mass','$num');");
?>
	</div></div>
<div class="footer">
		<h1>Футер</h1>
</div>
</body>
</html>
