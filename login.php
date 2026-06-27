<?php
session_start();

if(isset($_SESSION['login'])){
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Login</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="container">

<div class="form-box">

<h1>📚 Login Admin</h1>

<form action="proses/cek_login.php" method="POST">

<label>Username</label>
<input type="text" name="username" required>

<label>Password</label>
<input type="password" name="password" required>

<button type="submit">
🔐 Login
</button>

</form>

</div>

</div>

</body>
</html>