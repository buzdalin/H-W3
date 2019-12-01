<?php
$login=$_POST['login'];
$email=$_POST['email'];
$pass=$_POST['password'];
$pass2=$_POST['password2'];
if (strlen($login)>=6) {
		if (preg_match('/^([a-zA-Z])+[a-zA-Z0-9_]{1,20}$/', $login)) {echo "Valid login <br>";}
		else {header('Location: Reg.html'); exit();}}
else {header('Location: Reg.html'); exit();};

if (preg_match('/^([a-zA-Z0-9._-])+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/', $email)) {echo "Valid email <br>";}
else {echo "Invalid email <br>";exit();};
if (strlen($pass)>=8) {
		if (preg_match('/[a-z]{1,}/', $pass)&&preg_match('/[A-Z]{1,}/', $pass)
			&&preg_match('/[0-9]{1,}/', $pass)&&preg_match('/[\. , % $ # @ & * ^ | \\\ \/ ~ \[ \] { }]{1,}/', $pass)) 
			{echo "Valid password <br>";}
		else {echo "Invalid password <br>";exit();}}
else {echo "Invalid password <br>";exit();};
if ($pass!==$pass2) {echo "Incorect second password <br>";exit();}
else	{
$pass=password_hash($pass, PASSWORD_DEFAULT);
$mysql = new mysqli('localhost', 'root','', 'auth');
$mysql->query("INSERT INTO `users` (`login`, `email`, `pass`)VALUES ('$login', '$email', '$pass');");
$mysql->close();};
?>
<a href="Auth.html">Authorize</a>
