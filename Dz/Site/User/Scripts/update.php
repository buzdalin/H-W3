<?php
$login=$_POST['login'];
$email=$_POST['email'];
$pass=$_POST['password'];
$pass2=$_POST['password2'];
$log=$_COOKIE['login'];

if (strlen($login)>=6) {
		if (preg_match('/^([a-zA-Z])+[a-zA-Z0-9_]{1,20}$/', $login)) {}
		else {header('Location: \Dz\Site\Uni\Reg.html'); exit();}}
else {header('Location: \Dz\Site\Uni\Reg.html'); exit();};

if (preg_match('/^([a-zA-Z0-9._-])+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/', $email)) {}
else {echo "Invalid email <br>";
		echo "<a href='\Dz\Site\Uni\Auth.html'>Authorize</a>";
		exit();};
if (strlen($pass)>=8) {
		if (preg_match('/[a-z]{1,}/', $pass)&&preg_match('/[A-Z]{1,}/', $pass)
			&&preg_match('/[0-9]{1,}/', $pass)&&preg_match('/[\. , % $ # @ & * ^ | \\\ \/ ~ \[ \] { }]{1,}/', $pass)) 
			{}
		else {echo "Invalid password <br>";exit();};}
if ($pass==$pass2) {if (empty($pass)&empty($pass2)) {
	$result=$mysql->query("SELECT `pass` FROM `users` WHERE `login`='$log'");
	$db=$result->fetch_assoc();
	$pass=$db['pass'];}

else{echo "Same passwords <br>";exit();};
else{
$pass=password_hash($pass, PASSWORD_DEFAULT);};

else	{
	$mysql = new mysqli('localhost', 'root','', 'auth');
	$result=$mysql->query("SELECT `login` FROM `users` WHERE `login`='$login'");
	$result = $result->fetch_assoc();
if ($result['login']==$login) {
	echo "This login has been used";
	exit();};};

$result=$mysql->query("UPDATE `users` SET `login`='$login', `email`='$email', `pass`='$pass' WHERE `login`='$log'");
$result=$mysql->query("UPDATE `list` SET `login`='$login' WHERE `login`='$log'");
$mysql->close();
header('Location: \Dz\Site\UniScripts\logout.php');

?>
