<?php
$login=$_POST['login'];
$email=$_POST['email'];
$pass=$_POST['password'];
$pass2=$_POST['password2'];
if (strlen($login)>=6) {
		if (preg_match('/^([a-zA-Z])+[a-zA-Z0-9_]{1,20}$/', $login)) {}
		else {header('Location: \Dz\Site\Uni\Reg.html'); exit();}}
else {header('Location: \Dz\Site\Uni\Reg.html'); exit();};

if (preg_match('/^([a-zA-Z0-9._-])+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/', $email)) {}
else {echo "Invalid email <br>";
		echo "<a href='\Dz\Site\Uni\Auth.html'>Authorize</a>";
		exit();};
if (strlen($pass)>=8) {
		if (preg_match('/[a-z]{1,}/', $pass)&&preg_match('/[A-Z]{1,}/', $pass)
			&&preg_match('/[0-9]{1,}/', $pass)&&preg_match('/[\. , % $ # @ & * ^ | \\\ \/ ~ \[ \] { }]{1,}/', $pass)) 
			{}
		else {echo "Invalid password <br>";exit();}}
else {echo "Invalid password <br>";
		echo "<a href='\Dz\Site\Uni\Auth.html'>Authorize</a>";
		exit();};
if ($pass!==$pass2) {echo "Incorect second password <br>";exit();}
else	{
	$mysql = new mysqli('localhost', 'root','', 'auth');
	$result=$mysql->query("SELECT `login` FROM `users` WHERE `login`='$login'");
	$result = $result->fetch_assoc();
if ($result['login']==$login) {
	echo "This login has been used";
	exit();};
$pass=password_hash($pass, PASSWORD_DEFAULT);
  


$mysql->query("INSERT INTO `users` (`login`, `email`, `pass`)VALUES ('$login', '$email', '$pass');");
$mysql->close();};
header('Location: \Dz\Site\Uni\Auth.html')
?>
