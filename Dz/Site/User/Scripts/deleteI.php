<?php 
$login=$_COOKIE['login'];


if (empty($login)) {header('location: \Dz\Site\Uni\Auth.html');};
$mysql = new mysqli('localhost', 'root','', 'auth');
$result=$mysql->query("SELECT `code` FROM `list` WHERE `login`='$login'");
if($result)
{
	$all = mysqli_num_rows($result); // количество полученных строк
	for ($i = 1 ; $i <= $all ; $i++)
	{$zn = mysqli_fetch_row($result);
	
			$delete=$mysql->query("DROP TABLE `auth`.`$zn[0]`");
		;};};
$delete=$mysql->query("DELETE FROM `list` WHERE `login`='$login'");

$delete=$mysql->query("DELETE FROM `users` WHERE `login`='$login'");
header('location: \Dz\Site\UniScripts\logout.php');
 ?>
