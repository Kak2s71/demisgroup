<?php

define('HOST', 'localhost');
define('USER', 'a0647259_test');
define('PASSWORD', '121278');
define('DATABASE', 'a0647259_test');

$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if (!$connect) {
    die('Error connect to database!');
}