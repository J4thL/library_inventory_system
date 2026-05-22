<?php
include '../public/database.config.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM books WHERE id='$id'");

header("Location: ../views/dashboard.php");
?>
