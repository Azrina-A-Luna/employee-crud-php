<?php
include('database.php');

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$joindate = $_POST['joindate'];
$post = $_POST['post'];
$salary = $_POST['salary'];

$mysqli->query("insert into employee_basics (name, email, address, join_date, phone, post, salary) 
values ('$name','$email', '$address','$joindate','$phone','$post', '$salary')") or die($mysqli->error);

$res = $mysqli->query("select id from employee_basics order by id desc");
$row = $res->fetch_row();
$id = $row[0];

header('location:index.php');
