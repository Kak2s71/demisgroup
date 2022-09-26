<?php

require_once '../connect/connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$adress = $_POST['adress'];
$phone = $_POST['phone'];
$email = $_POST['email'];


mysqli_query($connect, "UPDATE `value_inputs` SET `name` = '$name', `phone` = '$phone', `adress` = '$adress', `email` = '$email' WHERE `value_inputs`.`id` = '$id'");

header('Location: /');