<?php
require_once "Session.php";
session_start();

echo Session::flash('success');
header('Location: index.php');