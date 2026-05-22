<?php
include '../public/database.config.php';

if(isset($_POST['add'])){

$title = $_POST['title'];
$author = $_POST['author'];
$category = $_POST['category'];
$status = $_POST['status'];

mysqli_query($conn,
"INSERT INTO books(title,author,category,status)
VALUES('$title','$author','$category','$status')");

header("Location: ../views/dashboard.php");
}
?>
