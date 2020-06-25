<?php
$login = "Не известно";
$password = "Не известно";
if(isset($_POST['pole1'])) {
	$login=strip_tags($_POST['lPole 1'])
	echo "Поле 1: $pole1  <br> Поле 2: $password";
}
?>