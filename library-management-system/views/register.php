<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="../public/style.css">
</head>
<body>

<div class="auth-box">
<h2>Register</h2>

<form action="../controllers/register.php" method="POST">
<input type="text" name="fullname" placeholder="Full Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit" name="register">Register</button>
</form>

</div>

</body>
</html>
