<?php
setcookie('users', $user['sudo'], time()-180, "/");
setcookie('login', $user['login'], time()-60*60*2, "/");
header('Location: \Dz\Site\Uni\Auth.html');
?>
