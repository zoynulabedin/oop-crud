<?php
require_once "classes/Users.php";
$user = new User();

$id = $_GET['id'];

$user->deleteuser($id);