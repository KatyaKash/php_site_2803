<?php
	session_start();
	if (!isset($_SESSION['user_login'])){
		header('Location: login.php');	
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>Главная</title>
</head>
<body>
	<h1>Hello, <?php echo $_SESSION['user_login'];?></h1>
	<a href="login.php?act=logout">Выйти</a><br>
	<a href="reg.php">Регистрация</a><br>
	<a href="profile.php">Профиль</a>
</body>
</html>