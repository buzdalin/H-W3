<?php 
$login=$_POST['login'];
$pass=$_POST['password'];

$mysql = new mysqli('localhost', 'root','', 'auth');

$result=$mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass'");
$user = $result->fetch_assoc();
if (count($user)==0) {
	echo "Invalid login or password";
	exit();}
setcookie('users', $user['login'], time()+180, "/");
$mysql->close();
header('Location: Home.php');
?>
