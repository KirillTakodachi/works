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

	<?php
	$isp9201 = [
		[
			"name" => "Nikolai",
			"namber" => "8-654-432-44-54",
			"addres" => "sity Timoshevsk, strit Lenina",
			"old" => "32",
		],
		[
			"name" => "Vasilie",
			"namber" => "8-654-432-44-54",
			"addres" => "sity Timoshevsk, strit Lenina",
			"old" => "27",
		],
		[
			"name" => "Nikolai",
			"namber" => "8-654-432-44-54",
			"addres" => "sity Timoshevsk, strit Lenina",
			"old" => "25",
		],
		[
			"name" => "Anatolie",
			"namber" => "8-654-432-44-54",
			"addres" => "sity Timoshevsk, strit Lenina",
			"old" => "24",
		],
		[
			"name" => "Nikolai",
			"namber" => "8-654-432-44-54",
			"addres" => "sity Timoshevsk, strit Leninaс",
			"old" => "19",
		],		
		[
			"name" => "Nikolai",
			"namber" => "8-654-432-44-54",
			"addres" => "sity Timoshevsk, strit Leninaс",
			"old" => "19",
		],		
		[
			"name" => "Nikolai",
			"namber" => "8-654-432-44-54",
			"addres" => "sity Timoshevsk, strit Leninaс",
			"old" => "19",
		],		
		[
			"name" => "Nikolai",
			"namber" => "8-654-432-44-54",
			"addres" => "sity Timoshevsk, strit Leninaс",
			"old" => "19",
		],		
		[
			"name" => "Nikolai",
			"namber" => "8-654-432-44-54",
			"addres" => "sity Timoshevsk, strit Leninaс",
			"old" => "19",
		],		
		[
			"name" => "Nikolai",
			"namber" => "8-654-432-44-54",
			"addres" => "sity Timoshevsk, strit Leninaс",
			"old" => "19",
		],		
		[
			"name" => "Nikolai",
			"namber" => "8-654-432-44-54",
			"addres" => "sity Timoshevsk, strit Leninaс",
			"old" => "19",
		],		
		[
			"name" => "Nikolai",
			"namber" => "8-654-432-44-54",
			"addres" => "sity Timoshevsk, strit Leninaс",
			"old" => "19",
			"link" => "https://luxe-host.ru/wp-content/uploads/f/c/c/fcc0abcf468333fcbf583eaa519a7a77.jpeg",
		],
	];
	//var_dump($isp9201["Anatolevich"]);

	// foreach ($isp9201 as $data => $val) {
	// 	echo "<br>".$data."<br>";
	// 	foreach ($isp9201[$data] as $key => $value) {
	// 		echo $key.$value."<br>";
	// 	}
	// };
	?>
	<table>	
	<tr>
		<th>№</th>
		<th>Name</th>
		<th>Namber</th>
		<th>Addres</th>
		<th>Old</th>
				
	</tr>

<?php
		foreach ($isp9201 as $number => $student) {?>
			
			<tr>
				<td><i><?php echo $number; ?></i></td>
				<td><b><a href="<?php echo $student["link"]; ?>"><?php echo $student["name"]; ?></a></b></td>
				<td><?php echo $student["namber"]; ?></td>
				<td style="color: green;"><?php echo $student["addres"]; ?></td>
				<td><?php echo $student["old"]; ?></td>
			</tr>
<?
		};
		?>
		</table>
<style type="text/css">
	table{
		border:1px solid black;
	}
	td,th{
		border-right: 1px solid black;
		border-bottom: 1px solid black;
	}
</style>
