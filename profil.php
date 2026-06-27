<?php

session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Profil Admin</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="container">

<h1>👤 Profil Admin</h1>

<div class="card">

<div style="font-size:80px;">
👨‍💼
</div>

<h2><?= $_SESSION['nama']; ?></h2>

<p><strong>Role :</strong> Administrator</p>

<p><strong>Aplikasi :</strong> Sistem Pendataan Buku</p>

<br>

<a href="index.php" class="action-btn">
🏠 Kembali ke Dashboard
</a>

</div>

</div>

</body>
</html>