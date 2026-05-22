<?php
session_start();
include '../public/database.config.php';

if(isset($_POST['register'])){

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

mysqli_query($conn,
"INSERT INTO users(fullname,email,password)
VALUES('$fullname','$email','$password')");

header("Location: ../views/login.php");
}
?>
