
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	 <table border="1">
   <caption>Протокол</caption>
   <tr>
    <th>ФИО</th>
    <th>Число</th>
    <th>Возраст</th>
    <th>Комментарий</th>
    <th>Группа</th>
    <th>Пол</th>
   </tr>
   <tr><td>34,5</td><td>3,5</td><td>36</td><td>23</td><td>36</td><td>23</td></tr>
  </table>
	<div>
	<?php
	$login = "Не известно";
	$password = "Не известно";
	if(isset($_POST['pole1'])) {
		$login=strip_tags($_POST['lPole 1'])
		echo "Поле 1: $pole1  <br> Поле 2: $password";
	}
	?>
	<?php
	    if(isset($_POST['subject']) && !empty($_POST['subject']))
	    {
	        $subject = $_POST['pole3'];
	        $pattern = '/^[0-9]*\.?[0-9]*$/';
	        if (!preg_match($pattern, $subject)) exit('Недопустимые символы!');
	        echo 'Зашибись';
	    }
	?>
</div>
</body>
</html>