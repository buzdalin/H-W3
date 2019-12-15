<?php
$id=$_GET['id'];
$code=$_GET['code'];
	$mysql = new mysqli('localhost', 'root','', 'auth');


	$result=$mysql->query("SELECT * FROM `$code` WHERE `id`='$id'");
	$db=$result->fetch_assoc();
//$a="WareH.php?code=".$code;
//header("location:$a")
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
		<h1 style="text-align: center;">Item update</h1>
	<form method="post" action="">
		<p>Item name: <input type="text" name="name" placeholder="Item name"
		value="<?php echo($db['name']) ?>"><br><br></p>
		<p>Item size: <input type="text" name="size" placeholder="Item size MxMxM" value="<?php echo($db['size']) ?>"><br><br>
		<p>Item mass: <input type="text" name="mass" placeholder="Item mass in kg" value="<?php echo($db['mass']) ?>"><br><br>
		<p>Item CODnumber: <input type="text" name="num" placeholder="Item code(digits)" value="<?php echo($db['num']) ?>"><br><br>
		<input type="submit" value="Update">
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

$mysql = new mysqli('localhost', 'root','', 'auth');
$result=$mysql->query("UPDATE `$code` SET `name`='$name', `size`='$size', `mass`='$mass', `num`='$num' WHERE `id`='$id'");

?>