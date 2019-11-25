<?php
setcookie('users', $user['sudo'], time()-180, "/");
header('Location: Auth.html');
?>
