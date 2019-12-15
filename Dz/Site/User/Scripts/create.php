<?php
if (empty($_COOKIE['login'])) {
	header("location: \Dz\Site\User\Uni\Auth.html");
	exit();}
$place=$_POST['place'];
$size=$_POST['size'];
$sizeu=$_POST['sizeu'];
$secu=$_POST['secure'];
$comm=$_POST['comm'];
$cookie=$_COOKIE['login'];

if (empty($place)) {header('location: \Dz\Site\User\Create.html'); exit();};
if (empty($size)) {
	if (isset($sizeu)) {$size=$sizeu;}
	elseif (empty($sizeu)) {header('location: \Dz\Site\User\Create.html');};};
if (empty($secu)) {	$secu="off";};
$code=random_bytes(8);
$code=bin2hex($code);

$mysql = new mysqli('localhost', 'root','', 'auth');

	$result=$mysql->query("SELECT `code` FROM `list`");  //проверка на совпадение
		while ($dbcode = $result->fetch_assoc()) {
			if ($dbcode['code']==$code) {
		
				$code=random_bytes(8);
				$code=bin2hex($code);};};

$mysql->query("INSERT INTO `list` (`login`, `code`, `place`, `size`, `secure`, `comment`) VALUES ('$cookie', '$code', '$place', '$size', '$secu', '$comm');");

$mysql->close();

$mysql = new mysqli('localhost', 'root','','auth');

$mysql->query("CREATE TABLE `$code` ( `id` INT(5) NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , `size` VARCHAR(20) NOT NULL , `mass` VARCHAR(10) NOT NULL , `num` VARCHAR(10) NULL DEFAULT NULL , UNIQUE `id` (`id`)) ENGINE = MyISAM CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;");
$mysql->close();

header('location: \Dz\Site\User\Mywarehouses.php')
 ?>
