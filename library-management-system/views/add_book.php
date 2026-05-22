<!DOCTYPE html>
<html>
<head>
<title>Add Book</title>
<link rel="stylesheet" href="../public/style.css">
</head>
<body>

<div class="auth-box">
<h2>Add Book</h2>

<form action="../controllers/add_book.php" method="POST">
<input type="text" name="title" placeholder="Book Title" required>
<input type="text" name="author" placeholder="Author" required>
<input type="text" name="category" placeholder="Category" required>

<select name="status">
<option value="Available">Available</option>
<option value="Borrowed">Borrowed</option>
</select>

<button type="submit" name="add">Add Book</button>
</form>

</div>

</body>
</html>
