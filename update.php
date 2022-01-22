<?php
include('database.php');
$id = $_GET['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$joindate = $_POST['joindate'];
$post = $_POST['post'];
$salary = $_POST['salary'];

$mysqli->query("update employee_basics set name='$name', email='$email', 
address='$address', phone='$phone', join_date='$joindate', post='$post', salary= '$salary' where id=$id") or die($mysqli->error);

header('location:index.php');
