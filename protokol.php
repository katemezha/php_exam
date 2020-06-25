
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Protocol</title>
</head>
<body>
	 <table border="1" width="80%">
   <caption>Протокол</caption>
   <tr>
	    <th>ФИО</th>
	    <th>Число</th>
	    <th>Возраст</th>
	    <th>Комментарий</th>
	    <th>Группа</th>
	    <th>Пол</th>
	    <th>Дата</th>
	    <th>Время</th>
	    <th>IP</th>
	    <th>Баллы</th>
	    <th>Средний Балл</th>
   </tr>
   <?php
   echo'<tr><td>'.$_POST['pole3'].'</td><td>'.$_POST['pole2'].'</td><td>'.$_POST['pole1'].'</td><td>'.$_POST['pole4'].'</td><td>'.$_POST['pole5'].'</td><td>'.$_POST['pole6'].'</td><td>'.date( "d.m.y" ).'</td><td>'.date( "H:i" ).'</td><td>'.$_SERVER['REMOTE_ADDR'].'</td><td>'.($_POST['pole1']+$_POST['pole2']+strlen($_POST['pole3'])+strlen($_POST['pole4'])).'</td><td>'.(($_POST['pole1']+$_POST['pole2']+strlen($_POST['pole3'])+strlen($_POST['pole4']))/9).'</td></tr>';
   ?>
  </table>
	<div>
		<?php
		// Подключаем файл с классами для работы со столбиками
	require_once('jpgraph_bar.php');

	// Создаём один столбик
	$bplot = new BarPlot($xdata);

	$bplot->SetLegend('Инвестиции');

	// Создаём второй столбик
	$bplot2 = new BarPlot($ydata);
	$bplot2->SetLegend('Прибыль');

	// Объединяем столбики
	$accbplot = new AccBarPlot(array($bplot, $bplot2));
	$accbplot->SetColor('darkgray');
	$accbplot->SetWeight(1);

	// Присоединяем столбики к графику:
	$graph->Add($accbplot);

		?>
	</div>
</body>
</html>