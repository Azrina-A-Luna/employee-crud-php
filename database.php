<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'crudphp');

//Create database connection
$mysqli = mysqli_connect(HOST, USER, PASS,  DB);

if (!$mysqli) {
    die("Connection error: " . mysqli_connect_error());
}
