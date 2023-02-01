<?php
	$pdo = new PDO("mysql:host=localhost;dbname=my_table;","root","");
	$statement = $pdo->prepare("SELECT * FROM data_base WHERE id=:id");
	$statement->execute($_GET);
	$user = $statement->fetch(PDO::FETCH_ASSOC);

	var_dump($user);

?>
<h2>Изменить пользователя</h2>
<form action="store.php" method="post">
	<input type="hidden" name="id" value="<?php echo $user['id'] ?>" >
	<input placeholder="name" type="text" name="name" class="input" value="<?php echo $user['name'] ?>">
	<input placeholder="lastname" type="text" name="lastname" class="input" value="<?php echo $user['lastname'] ?>">
	<input placeholder="username" type="text" name="username" class="input" value="<?php echo $user['username'] ?>">
	<button type="submit">Submit</button>
</form>