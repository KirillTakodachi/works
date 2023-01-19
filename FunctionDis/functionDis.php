<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	function dis($a,$b,$c){
		$d = ($b * $b) - 4 * $a * $c;
		if ($d > 0) {
		 	$x1 = round(-$b + (sqrt($d)) / 2 * $a);
			$x2 = round(-$b - (sqrt($d)) / 2 * $a);
			$resoult = "Два корня : ".$x1."<br>".$x2 ;
		}elseif ($d == 0) {
			$x = -$b / 2 * $a ;
			$resoult.= "Один корень : ".$x;
		}elseif ($d < 0){
			$resoult.= "Нет корней ".$d ;
		};
		return $resoult;
	}
	 echo dis (11,21,13);

	
	?>
</body>
</html>