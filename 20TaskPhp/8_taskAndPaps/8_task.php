<?php 
	$pdo = new PDO ('mysql:host=localhost;dbname=sus;','root','');
	$statement = $pdo->prepare('SELECT * FROM users');
	$statement->execute();
	$users = $statement->fetchALL(PDO::FETCH_ASSOC);
?>

<h1>SUS</h1>
	<a class="create__btn" href="create.php">Create</a>
		<div>
			<div>
				<table>
					<thead>
						<th>id</th>
						<th>Имя</th>
						<th>Фамилия</th>
						<th>user name</th>
						<th>action</th>
					</thead>
					<?php
						foreach ($users as $user => $value) {
					?>
					
					<thbody class="thbody">
						<tr>
							<td><?php echo $value['id']; ?></td>
							<td><?php echo $value['name']; ?></td>
							<td><?php echo $value['surname']; ?></td>
							<td><?php echo $value['mail']; ?></td>
							<td><a class="btn__show" href="show.php?id=<?php echo $value['id'] ?>">Show</a></td>
							<td><a class="btn__edit" href="edit.php?id=<?php echo $value['id'] ?>">Edit</a></td>
							<td><a class="btn__delete" href="delete.php?id=<?php echo $value['id'] ?>">Delete</a></td>
						</tr>
					</thbody>

					<?php
						}
					?>
				</table>
			</div>
		</div>