<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exam</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div>
		<?php
		    if( isset( $_POST['ssylka'] ) )
		    {
		        echo 'http://php-exam.std-925.ist.mospolytech.ru';
		    }
		?>
	</div>
	<div>
	<?php
	if(isset($_POST['obnull']) )	 
		header("Location: ".$_SERVER['REQUEST_URI']);
	?>
	</div>

	<header>Межникова Екатерина 191-322 <br>Экзаменационная работа
		<img src="logo.png" class="logo">
	</header>
	<form action="protokol.php" method="POST">
	    Число: <input type="text" name="pole1"  pattern="^[ 0-9]+$"//><br><br> 
	    Возраст: <input type="text" name="pole2" pattern="^[ 0-9]+$"/><br><br> 
	    ФИО: <input type="text" name="pole3" pattern="{,20}" size='30'/><br><br> 
		Комментарий: <textarea name="pole4" rows="5" cols="255"><?php echo $pole4;?></textarea>
		<input type="radio" name="pole5"
			<?php if (isset($pole5) && $pole5=="191-322") echo "checked";?>
			value="191-322">191-322
		<input type="radio" name="pole5"
			<?php if (isset($pole5) && $pole5=="191-321") echo "checked";?>
			value="191-321">191-321
		<input type="radio" name="pole6"
			<?php if (isset($pole6) && $pole6=="female") echo "checked";?>
			value="Женский">Женский
		<input type="radio" name="pole6"
			<?php if (isset($pole6) && $pole6=="male") echo "checked";?>
			value="Мужской">Мужской
		<input type="radio" name="pole6"
			<?php if (isset($pole6) && $pole6=="other") echo "checked";?>
			value="Другое">Другое
		<input type="submit" value="Отправить" name='otpravka'>
	</form>	
	<form method="POST">
		    <input type="submit" name="dop1" value="Добавить Форму" />
	</form>
	<form method="POST">
		    <input type="submit" name="dop2" value="Добавить вариант в 5 вопрос" />
	</form>
	<form method="POST">
		    <input type="submit" name="dop3" value="Добавить вариант в 6 вопрос" />
		    Вариант: <input type="text" name="newvar6" pattern="{,20}" size='30'/><br><br> 
	</form>
	<form method="POST">
		    <input type="submit" name="obnull" value="Обнулить сессию" />
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