<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	$a = (int)$_POST['a'];
	$b = (int)$_POST['b'];
	$c = (int)$_POST['c'];
	$d = ($b * $b) - 4 * $a * $c;
	if ($d > 0) {
		$x1 = round(-$b + (sqrt($d)) / 2 * $a);
		$x2 = round(-$b - (sqrt($d)) / 2 * $a);
		echo "Два корня : ".$x1."<br>".$x2 ;
	}elseif ($d == 0) {
		$x = -$b / 2 * $a ;
		echo "Один корень : ".$x;
	}elseif ($d < 0){
		echo "Нет корней ".$d ;
	};
	var_dump($_POST);
	?>
</body>
</html>