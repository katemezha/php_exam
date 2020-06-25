<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>Межникова Екатерина 191-322 <br>Экзаменационная работа
		<img src="logo.png" class="logo">
	</header>
	<form action="protokol.php" method="POST">
	    Число: <input type="text" name="pole1" cols="15" /><br><br> 
	</form>
	<form action="protokol.php" method="POST">
	    Логин: <input type="text" name="login" /><br><br> 
	</form>
	<form action="protokol.php" method="POST">
		<input type="radio" name="gender"
			<?php if (isset($gender) && $gender=="female") echo "checked";?>
			value="female">Female
		<input type="radio" name="gender"
			<?php if (isset($gender) && $gender=="male") echo "checked";?>
			value="male">Male
		<input type="radio" name="gender"
			<?php if (isset($gender) && $gender=="other") echo "checked";?>
			value="other">Other
	</form>	
	<footer>
		<span>25.06.2020</span>
		<a href="protokol.php">Открыть протокол</a>
	</footer>
</body>
</html>