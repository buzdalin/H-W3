<?php
$login=$_POST['login'];
$email=$_POST['email'];
$pass=$_POST['password'];
$passn=$_POST['password2'];
$log=$_COOKIE['login'];
$mysql = new mysqli('localhost', 'root','', 'auth');
if (strlen($login)>=6) {
		if (preg_match('/^([a-zA-Z])+[a-zA-Z0-9_]{1,20}$/', $login)) {}
		else {header('Location: \Dz\Site\User\Acount.php'); exit();}}
else {header('Location: \Dz\Site\User\Acount.php'); exit();};

if (preg_match('/^([a-zA-Z0-9._-])+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/', $email)) {}
else {echo "Invalid email <br>";
		echo "<a href='Location: \Dz\Site\User\Acount.php'>Back</a>";
		exit();};
if (strlen($pass)>=8) {
		if (preg_match('/[a-z]{1,}/', $pass)&&preg_match('/[A-Z]{1,}/', $pass)
			&&preg_match('/[0-9]{1,}/', $pass)&&preg_match('/[\. , % $ # @ & * ^ | \\\ \/ ~ \[ \] { }]{1,}/', $pass)) 
			{}
		else {echo "Invalid password <br>";exit();};}

if ($pass==!$passn) {
		$passn=password_hash($pass, PASSWORD_DEFAULT);
		$pass=$passn;}
	else{header('Location: \Dz\Site\User\Acount.php');}


elseif ((empty($pass)|empty($passn))) {
	$result=$mysql->query("SELECT `pass` FROM `users` WHERE `login`='$log'");
	$db=$result->fetch_assoc();
	$pass=$db['pass'];}
	

$result=$mysql->query("UPDATE `users` SET `login`='$login', `email`='$email', `pass`='$pass' WHERE `login`='$log'");
$result=$mysql->query("UPDATE `list` SET `login`='$login' WHERE `login`='$log'");
$mysql->close();

header('Location: \Dz\Site\UniScripts\logout.php');

?>
