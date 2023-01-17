<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<p>
		<?php echo "Привет мир."; ?>
	</p>
	
	
	<p>
		<?php $name = "Коля"; ?>
		<?php echo "Привет ".$name; ?>
	</p>
	<h1>
		<?php 
		$name = "Николай";
		$old = "18"; 
		$namber = "8-905-433-43-21"; 
		$addres = "Колыменский.р, г.Термсер";
		$world = "Change the world";
		$my = "My finel message";
		$by = "Good bay";
		echo "Меня звовут ".$name; ?>
	</h1>
	<h2>
		<?php echo "Мне ".$old ?>
	</h2>
	<h3>
		<?php echo "Мой номер ".$namber ; ?>
	</h3>
	<h4>
		<?php echo "Я живу по адресу ".$addres ; ?>
	</h4>
	<h5>
		<?php echo $world." ".$my ; ?>
	</h5>
	<h6>
		<?php echo $by; ?>
	</h6>
</body>
</html>


