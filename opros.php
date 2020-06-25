<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Opros</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
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
			<?php if (isset($pole6) && $pole6=="Женский") echo "checked";?>
			value="female">Женский
		<input type="radio" name="pole6"
			<?php if (isset($pole6) && $pole6=="Мужскогй") echo "checked";?>
			value="male">Мужской
		<input type="radio" name="pole6"
			<?php if (isset($pole6) && $pole6=="Другое") echo "checked";?>
			value="other">Другое
		<input type="submit" value="Отправить" name='otpravka'>
	</form>	
	<footer>
		<span>25.06.2020</span>
		<a href="protokol.php">Открыть протокол</a>
		<form method="POST">
		    <input type="submit" name="ssylka" value="Сгенерировать ссылку" />
		</form>
		<div>
			<?php
		    if( isset( $_POST['ssylka'] ) )
		    {
		        echo 'http://php-exam.std-925.ist.mospolytech.ru';
		    }
		?>
		</div>
	</footer>

</body>
</html>