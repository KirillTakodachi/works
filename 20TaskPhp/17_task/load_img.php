<?php

$result = pathinfo($_FILES['file']['name']);

var_dump($result['extension']);

?>