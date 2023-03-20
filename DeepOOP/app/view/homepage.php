<?php
$this->layout('layout', ['title' => 'User Profile','name'=>'Kirill']);echo 123;

?>

<h1>User Profile</h1>
<p>Hello, <?=$this->e($name)?></p>