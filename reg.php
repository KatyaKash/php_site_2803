<?php
	session_start();
	if (!empty($_POST['name']) && !empty($_POST['pas'])) {
		$_SESSION['user_login_1'] = $_POST['name'];
		$_SESSION['user_pas'] = $_POST['pas'];
		header('Location: login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Регистрация</title>
</head>
<body>
	<div id="content">
		<h3>Регистрация</h3>
	<form action="" method="post">
		<input type="text" name="name" placeholder="Login"><br>
		<input type="text" name="pas" placeholder="Password"><br>
		<input type="submit">
	</form>
	</div>
</body>
</html>