<?php 
$pdo = new PDO("mysql:host=localhost;dbname=my_table;","root","");
?>
<form action="update.php" method="post">
	<input placeholder="name" type="text" name="name" class="input">
	<input placeholder="lastname" type="text" name="surname" class="input">
	<input placeholder="username" type="text" name="username" class="input">
	<button type="submit">Submit</button>
</form>