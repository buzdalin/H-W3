<?php if ($_COOKIE['users']==''): header('location:Auth.html'); exit; ?>
<?php elseif ($_COOKIE['users']=='user'): header('location: Home.html');exit;?>
<?php elseif ($_COOKIE['users']=='sudo'): header('location: Homesudo.html');exit;?>
<?php endif;?>
