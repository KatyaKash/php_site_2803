<?php
	require_once 'user.php';
	session_start();
	header('Content-type: text/html; charset=utf-8');
	if(!isset($_SESSION['user_login'])){
		header('Location: login.php');
	}
	
	$user = new User;

	if (isset($_POST['p_name']) && isset($_POST['surname']) && isset($_POST['age'])) {
		$user->load_from_form();
		$user->save_to_session();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles.css">
	<title>ПРОФИЛЬ</title>
</head>
<body>
	<div id="content">
		<h3>Данные</h3>
	<form action="" method="post">
		<input type="text" name="p_name" placeholder="Name" value="<?php echo $user->get_name();?>"><br>
		<input type="text" name="surname" placeholder="Surname" value="<?php echo $user->get_surname();?>"
		><br>
		<input type="text" name="age" placeholder="Age" value="<?php echo $user->get_age();?>" 
		><br>
		<input type="submit" value="Save">
	</form>
	<a href="index.php">На главную</a>
	</div>
</body>
</html>