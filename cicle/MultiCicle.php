<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	for ($i=0; $i < 3; $i++) { 
		echo "<br> i ".$i." новый цикл";
		$n = 0;
		while ($n <= 2) {
			echo "<br>n ".$n;
			$n++;
			$a = 0;
			do{
				echo "<br>a ".$a;
				$a++;
			} while($a <= 1);
		};
	};
	?>
</body>
</html>