<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<p>
		<?php
			$a=4;
			$b=16;
			$c=7;
			$d=($b**2 - 4 * $a * $c);
			if($d = 0){
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
		<?php
			$stud = [
				[
					"fio" => "Анатолий Петрович Сечь",
					"old" => "34",
					"namber" => "8-967-456-43-54",
					"ratebase" => "Базирован",
				],
				[
					"fio" => "Виталий Витальевич Цаль",
					"old" => "33",
					"namber" => "8-210-036-74-42",
					"ratebad" => "Прогульщик",
				],
				[
					"fio" => "Петров Милязеевич Сан",
					"old" => "26",
					"namber" => "8-347-233-42-64",
					"ratebase" => "Базирован",
				],
				[
					"fio" => "Николай Мерязеевич Кенронов",
					"old" => "21",
					"namber" => "8-967-456-43-54",
					"ratebad" => "Прогульщик",
				],
				[
					"fio" => "Виктор Русичев Корнеплод",
					"old" => "59",
					"namber" => "8-967-456-43-54",
					"ratebase" => "Базирован",
				],

			];
		?>
	</p>
	<ol>

		<?php
			foreach ($stud as $data => $value) {
				echo "<li>".$stud[$data]['fio']."</li>";
				foreach ($stud[$data] as $info => $value) {
					if ($value == $stud[$data]['fio']) {
						//null
					}elseif($value == $stud[$data]['ratebad']){
						echo "<ol class='nobase'>".$value."</ol>";
					}elseif($value == $stud[$data]['ratebase']){
						echo "<ol class='base'>".$value."</ol>";
					}else{
						echo "<ol>".$value."</ol>";
					}
				}
			};
		?>
	</ol>
			
	<style type="text/css">
		*{
			font-size: 14px;
		}
		.nosee{
			display: none;
		}
		.base{
			color: green;
		}
		.nobase{
			color: red;
		}
	</style>
</body>
</html>