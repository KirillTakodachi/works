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
		
	</p>
	<ol>



<?php
			$stud = [
				[
					"fio" => "Анатолий Петрович Сечь",
					"old" => "34",
					"namber" => "8-967-456-43-54",
					"active" => false,
				],
				[
					"fio" => "Виталий Витальевич Цаль",
					"old" => "33",
					"namber" => "8-210-036-74-42",
					"active" => true,
				],
				[
					"fio" => "Петров Милязеевич Сан",
					"old" => "26",
					"namber" => "8-347-233-42-64",
					"active" => false,
				],
				[
					"fio" => "Николай Мерязеевич Кенронов",
					"old" => "21",
					"namber" => "8-967-456-43-54",
					"active" => true,
				],
				[
					"fio" => "Виктор Русичев Корнеплод",
					"old" => "59",
					"namber" => "8-967-456-43-54",
					"active" => false,
				],

			];
		?>

		<?php
			foreach ($stud as $data => $value) {
		?>


				<?php if ($value["active"]) {
					$stud_pas = "noБазирован";
					$status_stud = "base";
				}else{
					
					$stud_pas = "Базирован";
					$status_stud = "nobase";
				}
				;?>


				
				<li class="<?php echo $status_stud; ?>"><?php echo $value["fio"]." ".$value["old"]." ".$value["namber"]." ".$stud_pas; ?></li>

		<?php } ; ?> 

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
			<!-- foreach ($stud as $data => $value) {
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
			 }; -->
</body>
</html>