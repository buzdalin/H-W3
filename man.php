<!DOCTYPE html>
<html>
<head>
	<title>Homesudo</title>
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
		<a href="Acount.php">Acount</a><br>
		<a href="man.php">Sudo users</a><br>
		<a href="logout.php">Exit</a><br>
	</div>
		<h1 style="text-align: center;">Контент</h1>
	<form method="post" action=""><table>
	<th>Login</th>
	<th>Email</th>
	<th>Sudo</th>
	<th>Manage</th>
	<?php 
	$i=0;
	$mysql=new mysqli('localhost', 'root', '', 'auth');
	$result=$mysql->query("SELECT `id`, `login`, `email`, `sudo` FROM `users` WHERE `login`!='sudo' ");
	
	while ($dbresult = $result->fetch_assoc()){
			$i++;
			$login=$dbresult['login'];
			$email=$dbresult['email'];
			$sudo=$dbresult['sudo'];
			echo ("<tr>".
					"<td>".$login."</td>".
					"<td>".$email."</td>".
					"<td>".$sudo."</td>".
					"<td><select name='manage".$i."'>
							<option value='user'>user</option>
							<option value='sudo'>sudo</option>
							<option value='delete'>delete</option>
							</select></td>".
				   "</tr>");};

	$mysql->close();
		?>

</table>
<input type="submit">
	</div></div>
<div class="footer">
		<h1>Футер</h1>
</div>
</body>
</html>

<?php
$n=1;
while ($n<=$i) {
	
$mysql=new mysqli('localhost', 'root', '', 'auth');
$post=$_POST["manage$n"];


		if ($post=='user') {
			$result=$mysql->query("UPDATE `users` SET `sudo`='$post' WHERE `id`='$n'");
		}
		if ($post=='sudo') {
			$result=$mysql->query("UPDATE `users` SET `sudo`='$post' WHERE `id`='$n'");
		}
		elseif ($post=='delete') {
			$result=$mysql->query("DELETE FROM `users` WHERE `id`='$n' ");
		};
			$n++;};

$mysql->close();

?>
