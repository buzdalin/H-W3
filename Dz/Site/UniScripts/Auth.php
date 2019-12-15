<?php 
$login=$_POST['login'];
$pass=$_POST['password'];

$mysql = new mysqli('localhost', 'root','', 'auth');

$result=$mysql->query("SELECT `login`, `pass`, `sudo` FROM `users` WHERE `login`='$login'");
$user = $result->fetch_assoc();
if (empty($user)) {
	echo "Invalid login";
	exit();
}
if (!(password_verify($pass, $user['pass']))) {
	echo "Invalid password";
	exit();
}

setcookie('users', $user['sudo'], time()+60*60*2, "/");
setcookie('login', $user['login'], time()+60*60*2, "/");
$mysql->close();
header('Location: \Dz\Site\UniScripts\Home.php')
?>
