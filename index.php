<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exam</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
	if(isset($_POST['login']) && isset($_POST['password'])){
	 
	    $login=$_POST['login'];
	    $password = $_POST['password'];
	    echo "Ваш логин: $login <br> Ваш пароль: $password";
	}
	?>
	<div>
		<?php
		    if( isset( $_POST['ssylka'] ) )
		    {
		        echo 'http://php-exam.std-925.ist.mospolytech.ru';
		    }
		?>
	</div>

	<header>Межникова Екатерина 191-322 <br>Экзаменационная работа
		<img src="logo.png" class="logo">
	</header>
	<form action="protokol.php" method="POST">
	    Число: <input type="text" name="pole1"  /><br><br> 
	    Возраст: <input type="text" name="pole2" pattern="^[ 0-9]+$"/><br><br> 
	    ФИО: <input type="text" name="pole3" cols="30" size='30'/><br><br> 
		Комментарий: <textarea name="pole4" rows="5" cols="255"><?php echo $pole4;?></textarea>
		<input type="radio" name="pole5"
			<?php if (isset($pole5) && $pole5=="191-322") echo "checked";?>
			value="second">191-322
		<input type="radio" name="pole5"
			<?php if (isset($pole5) && $pole5=="191-321") echo "checked";?>
			value="first">191-321
		<input type="radio" name="pole6"
			<?php if (isset($pole6) && $pole6=="female") echo "checked";?>
			value="female">Female
		<input type="radio" name="pole6"
			<?php if (isset($pole6) && $pole6=="male") echo "checked";?>
			value="male">Male
		<input type="radio" name="pole6"
			<?php if (isset($pole6) && $pole6=="other") echo "checked";?>
			value="other">Other
		<input type="submit" value="Отправить" name='otpravka'>
	</form>	
	<form method="POST">
		    <input type="submit" name="ssylka" value="Добавить Форму" />
	</form>
	<form method="POST">
		    <input type="submit" name="ssylka" value="Добавить вариант в 5 вопрос" />
	</form>
	<form method="POST">
		    <input type="submit" name="ssylka" value="Добавить вариант в 6 вопрос" />
	</form>
	<h3>Вход для админа</h3>
	<form method="POST">
	    Логин: <input type="text" name="login" /><br><br>
	    Пароль: <input type="text" name="password" /><br><br>
	    <input type="submit" value="Войти">
	</form>
	<a href="opros.php">Опрос</a>
	<footer>
		<span>25.06.2020</span>
		<a href="protokol.php">Открыть протокол</a>
		<form method="POST">
		    <input type="submit" name="ssylka" value="Сгенерировать ссылку" />
		</form>
	</footer>

</body>
</html>