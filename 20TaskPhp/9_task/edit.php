<?php
	$pdo = new PDO ("mysql:host=localhost;dbname=contact","root","");
	$statement = $pdo->prepare("SELECT * FROM twiters WHERE id=:id");
	$statement->execute($_GET);
	$user = $statement->fetch(PDO::FETCH_ASSOC);
?>

<h2>Изменение данных</h2>
<form action="update.php" method="post">
	<input type="hidden" name="id" value="<?php echo $user["id"] ?>">
	<input placeholder="name" type="text" name="name" class="input" value="<?php echo $user["name"] ?>">
	<input placeholder="lastname" type="text" name="lastname" class="input" value="<?php echo $user["last name"] ?>">
	<input placeholder="username" type="text" name="username" class="input" value="<?php echo $user["username"] ?>">
	<button type="submit">Изменить</button>
</form>