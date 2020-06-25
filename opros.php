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
	</form>
	<form action="protokol.php" method="POST">
	    Возраст: <input type="text" name="pole2" pattern="^[ 0-9]+$"/><br><br> 
	</form>
		<form action="protokol.php" method="POST">
	    ФИО: <input type="text" name="pole3" cols="30" size='30'/><br><br> 
	</form>
	<form action="protokol.php" method="POST">
		Комментарий: <textarea name="pole4" rows="5" cols="255"><?php echo $comment;?></textarea>
	</form>
	<form action="protokol.php" method="POST">
		<input type="radio" name="pole5"
			<?php if (isset($group) && $group=="191-322") echo "checked";?>
			value="second">191-322
		<input type="radio" name="pole5"
			<?php if (isset($group) && $group=="191-321") echo "checked";?>
			value="first">191-321
	</form>	
	<form action="protokol.php" method="POST">
		<input type="radio" name="pole6"
			<?php if (isset($gender) && $gender=="female") echo "checked";?>
			value="female">Female
		<input type="radio" name="pole6"
			<?php if (isset($gender) && $gender=="male") echo "checked";?>
			value="male">Male
		<input type="radio" name="pole6"
			<?php if (isset($gender) && $gender=="other") echo "checked";?>
			value="other">Other
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