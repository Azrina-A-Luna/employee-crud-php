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


// // Set a constant
// define("FILEREPOSITORY", "profile_images/");

// // Make sure that the file was POSTed.
// if (is_uploaded_file($_FILES['pimage']['tmp_name'])) {
//     // Was the file a JPEG?
//     if ($_FILES['pimage']['type'] != "image/jpeg") {
//         echo "<p>Profile image must be uploaded in JPEG format.</p>";
//     } else {

//         //$name = $_FILES['classnotes']['name'];
//         $filename = $id . ".jpg";

//         unlink(FILEREPOSITORY . $filename);
//         $result = move_uploaded_file(
//             $_FILES['pimage']['tmp_name'],
//             FILEREPOSITORY . $filename
//         );
//         //$result = move_uploaded_file($_FILES['pimg']['tmp_name'],
//         ("http://localhost/employee-crud-php/profile_images/28.jpg");
//         if ($result == 1) echo "<p>File successfully uploaded.</p>";
//         else echo "<p>There was a problem uploading the file.</p>";
//     }
// }

header('location:index.php');
