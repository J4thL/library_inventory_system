<?php
session_start();
include '../public/database.config.php';

if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($conn,
"SELECT * FROM users WHERE email='$email'");

$user = mysqli_fetch_assoc($query);

if(password_verify($password, $user['password'])){

$_SESSION['user'] = $user['fullname'];

header("Location: ../views/dashboard.php");

}else{
echo "Invalid credentials";
}

}
?>
