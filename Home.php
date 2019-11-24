<?php if ($_COOKIE['users']==''): header('location:Auth.html'); exit; ?>
<?php else:?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="Css.css">
	<meta charset="utf-8">
</head>
<body>
	
<div class="exit"><p>Exit</p></div>
	<div class="main">
		<div class="menu">
			<p style="margin: 0px; background-color:#8F4700; color: #BC7026; text-align: center; border: solid #013440 1.5px">
			Navigation</p>
			<p><a href="Home.php">Home</a></p>
			<a href="Mywarehouses.php">My warehouses</a>
			<p>Account</p>
		</div>
		<div>
			<p>Text</p>
		</div>
	</div>

</body>
</html>

<?php endif ?>
