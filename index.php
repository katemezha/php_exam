<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exam</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
	if(isset($_POST['login']) && isset($_POST['password'])&& $_POST['login']=='user' && $_POST['password']=='123'){
	 
		header('Location: admin.php');

	}
	?>
	<header>Межникова Екатерина 191-322 <br>Экзаменационная работа
		<img src="logo.png" class="logo">
	</header>
	<h3>Вход для админа</h3>
	<form method="POST">
	    Логин: <input type="text" name="login" /><br><br>
	    Пароль: <input type="text" name="password" /><br><br>
	    <input type="submit" value="Войти">
	</form>
	<a href="opros.php">Опрос</a>
	<footer>
		<span>25.06.2020<br></span>
		<span>Login:user<br> Password:123</span>
	</footer>

</body>
</html>