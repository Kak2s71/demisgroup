<?php

require_once '../connect/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `value_inputs` WHERE `value_inputs`.`id` = '$id'");

header('Location: /');