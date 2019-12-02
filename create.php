<?php
if (empty($_COOKIE['login'])) {
	header("location: Auth.html");
	exit();}
$name=$_POST['name'];
$cookie=$_COOKIE['login'];

$code=random_bytes(8);
$code=bin2hex($code);

$mysql = new mysqli('localhost', 'root','', 'auth');

	$result=$mysql->query("SELECT `code` FROM `list`");
		while ($dbcode = $result->fetch_assoc()) {
			if ($dbcode['code']==$code) {
		
				$code=random_bytes(8);
				$code=bin2hex($code);};};

$mysql->query("INSERT INTO `list` (`login`,`text`, `code`) VALUES ('$cookie','$name', '$code');");

$mysql->close();
$mysql = new mysqli('localhost', 'root','','warehouses');

$mysql->query("CREATE TABLE IF NOT EXISTS `$code` ( `id` INT(4) NOT NULL AUTO_INCREMENT , `text` VARCHAR(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL , UNIQUE `id` (`id`)) ENGINE = MyISAM CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;");

$mysql->query("INSERT INTO `$code` (`text`) VALUES ('$name');");




$mysql->close();

header("location: create.html")


 ?>


