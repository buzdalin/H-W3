<?php
if (empty($_COOKIE['login'])) {
	header("location: \Dz\Site\Uni\Auth.html");
	exit();};
$login=$_COOKIE['login'];
$code=$_GET['code'];
$mysql = new mysqli('localhost', 'root','', 'auth');
$result=$mysql->query("DELETE FROM `list` WHERE `code`='$code'");
$result=$mysql->query("DROP TABLE `auth`.`$code`");
$mysql->close();
header('location: \Dz\Site\User\Mywarehouses.php')
?>
