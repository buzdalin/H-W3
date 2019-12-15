<?php
if (empty($_COOKIE['login'])) {
	header("location: \Dz\Site\User\Auth.html");
	exit();};
$login=$_COOKIE['login'];
$code=$_GET['code'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
		<h1 style="text-align: center;">Item adding</h1>
	<form method="post" action="">
		<input type="text" name="name" placeholder="Item name"><br><br>
		<input type="text" name="size" placeholder="Item size MxMxM"><br><br>
		<input type="text" name="mass" placeholder="Item mass in kg"><br><br>
		<input type="text" name="num" placeholder="Item code(digits)"><br><br>
		<input type="submit" value="Add">
	</form>
<?php echo "<a href=\"\Dz\Site\User\WareH.php?code=".$code."\">Back</a>"; ?>
	</div></div>
<div class="footer">
<p>Выполнено студентом МГТУ им. Н.Э. Баумана</p>
			<p>ИУ4-11Б</p></div>
</body>
</html>
<?php
$name=$_POST['name'];
$size=$_POST['size'];
$mass=$_POST['mass'];
$num=$_POST['num'];
if (empty($name)) {
exit();
}
if (empty($size)) {
exit();
}
if (empty($mass)) {
exit();
}
$mysql = new mysqli('localhost', 'root','', 'auth');
$result=$mysql->query("INSERT INTO `$code`(`name`, `size`, `mass`, `num`) VALUES ('$name','$size','$mass','$num');");
?>