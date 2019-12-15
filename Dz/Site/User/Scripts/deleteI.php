<?php
$id=$_GET['id'];
$code=$_GET['code'];
	$mysql = new mysqli('localhost', 'root','', 'auth');
$a="\Dz\Site\User\WareH.php?code=".$code;

	$result=$mysql->query("DELETE FROM `$code` WHERE `id`='$id'");
header("location:$a")

?>
