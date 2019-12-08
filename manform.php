<?php
$n=1;
$i=$_COOKIE['i'];
while ($n<=$i) {
	
$mysql=new mysqli('localhost', 'root', '', 'auth');
$post=$_POST["manage$n"];


		if ($post=='user'or'sudo') {
			$result=$mysql->query("UPDATE `users` SET `sudo`='$post' WHERE `id`='$n'");
		}
		elseif ($post=='delete') {
			$result=$mysql->query("DELETE FROM `users` WHERE `id`='$n' ");};
			$n++;};

$mysql->close();
header("location:man.php")
?>