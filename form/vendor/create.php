<?php

require_once '../connect/connect.php';

$name = $_POST['name'];
$adress = $_POST['adress'];
$phone = $_POST['phone'];
$email = $_POST['email'];

mysqli_query($connect,"INSERT INTO `products` (`id`, `name`, `adress`, `phone`, `email`) VALUES (NULL, '$name', '$adress', '$phone', '$email')");

header('Location: /');