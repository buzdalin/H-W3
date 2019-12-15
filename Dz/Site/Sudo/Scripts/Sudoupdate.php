<?php
if (empty($_COOKIE['login'])) {
	header("location: \Dz\Site\Uni\Auth.html");
	exit();};
$id=$_GET['id'];
$user=$_GET['user'];
$mysql = new mysqli('localhost', 'root','', 'auth');
if ($user=='0') {
$result=$mysql->query("SELECT `login` FROM `users` WHERE `id`='$id' ");
$db=$result->fetch_assoc();
$login=$db['login'];
$result=$mysql->query("SELECT `code` FROM `list` WHERE `login`='$login'");
while ($db=$result->fetch_assoc()) {
	$code=$db['code'];
	$delete=$mysql->query("DROP TABLE `auth`.`$code`");
};
$result=$mysql->query("DELETE FROM `users` WHERE `id`='$id'");
$result=$mysql->query("DELETE FROM `list` WHERE `login`='$login'");
header('location: \Dz\Site\Sudo\man.php');
exit();
}
if ($user=='user') {
$result=$mysql->query("UPDATE `users` SET `sudo`='sudo' WHERE `id`='$id'");
header('location: \Dz\Site\Sudo\man.php');
exit();
}
elseif ($user=='sudo') {
$result=$mysql->query("UPDATE `users` SET `sudo`='user' WHERE `id`='$id'");
header('location: \Dz\Site\Sudo\man.php');
exit();
}
?>
