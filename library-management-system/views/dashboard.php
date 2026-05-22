<?php
session_start();
include '../public/database.config.php';

if(!isset($_SESSION['user'])){
header("Location: login.php");
}

$books = mysqli_query($conn, "SELECT * FROM books");
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="../public/style.css">
</head>
<body>

<nav>
<h2>Library Management System</h2>
</nav>

<div class="container">

<h2>Welcome <?php echo $_SESSION['user']; ?></h2>

<a href="add_book.php" class="add-btn" >Add Book</a>

<table>
<tr>
<th>ID</th>
<th>Title</th>
<th>Author</th>
<th>Category</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php while($book = mysqli_fetch_assoc($books)) { ?>

<tr>
<td><?php echo $book['id']; ?></td>
<td><?php echo $book['title']; ?></td>
<td><?php echo $book['author']; ?></td>
<td><?php echo $book['category']; ?></td>
<td><?php echo $book['status']; ?></td>
<td>
<a href="edit_book.php?id=<?php echo $book['id']; ?>">Edit</a>
<a href="../controllers/delete_book.php?id=<?php echo $book['id']; ?>">Delete</a>
</td>
</tr>

<?php } ?>

</table>

<a href="../controllers/logout.php" class="logout-btn">
    Logout
</a>

</div>

</body>
</html>
