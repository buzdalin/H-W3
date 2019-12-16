<?php 
if ($_COOKIE['users']==''){ header("location:/Dz/site/Uni/Unauth.php"); exit();} 
 elseif ($_COOKIE['users']=="user"){ header("location: /Dz/site/User/HomeU.php");exit();}
 	elseif ($_COOKIE['users']=="sudo"){ header("location: /Dz/site/Sudo/Homesudo.php");exit();}
?>
