<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="../public/style.css">
</head>
<body>

<div class="auth-box">
<h2>Login</h2>

<form action="../controllers/login.php" method="POST">
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit" name="login">Login</button>
</form>

<p><a href="register.php">Create Account</a></p>
</div>

</body>
</html>
