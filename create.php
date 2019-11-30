<?php
$name=$_POST['name'];

$mysql = new mysqli('localhost', 'root','');
$mysql->query("CREATE DATABASE IF NOT EXISTS `$name`");
$mysql->query("CREATE TABLE IF NOT EXISTS `$name`. `$name` ( `id` INT(4) NOT NULL AUTO_INCREMENT , `text` VARCHAR(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL , UNIQUE `id` (`id`)) ENGINE = MyISAM CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;");







$mysql->close();

$mysql = new mysqli('localhost', 'root','');
$mysql->query("INSERT INTO `$name` (`text`) VALUES ('$name');");

$mysql->close();




 ?>


