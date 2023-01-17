<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];
		$d = ($b**2 - 4 * $a * $c);
		if($d == 0){
			$x=-($b / 2 * $a);
			echo "Дискрименант равен: ".$x ;
		}elseif($d > 0){
			$x1 = (-$b + (($d))) / 2 * $a;
			$x2 = (-$b + (($d))) / 2 * $a;
			echo "Дискрименант равен: ".$x1.", ".$x2 ;
		}else{
			echo "Нет действительных корней." ;
		};
	?>
</body>
</html>