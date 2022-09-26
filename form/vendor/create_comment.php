<?php

require_once '../connect/connect.php';

$id = $_POST['id'];
$body = $_POST['body'];

mysqli_query($connect, "INSERT INTO `comments` (`id`, `value_id`, `body`) VALUES (NULL, '$id', '$body')");

header('Location: /product.php?id=' . $id);