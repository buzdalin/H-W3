<?php
$id=$_GET['id'];
$code=$_GET['code'];
	$mysql = new mysqli('localhost', 'root','', 'auth');

	$result=$mysql->query("DELETE FROM `$code` WHERE `id`='$id'");
	header('location: Mywarehouses.php')

?>