
<?php

session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}


include "function.php";
require "config/koneksi.php";

$totalBuku = mysqli_num_rows(
mysqli_query($conn,"SELECT * FROM buku")
);

$totalStok = mysqli_fetch_assoc(
mysqli_query($conn,"SELECT SUM(stok) as total FROM buku")
);

$bukuTersedia = mysqli_num_rows(
mysqli_query($conn,"SELECT * FROM buku WHERE stok > 0")
);
?>

<!DOCTYPE html>
<html>
<head>

<title>Sistem Pendataan Buku</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="container">

<h1>📚 Dashboard Perpustakaan</h1>

<div class="menu">
    <a href="index.php">🏠 Dashboard</a>
    <a href="tambah.php">➕ Tambah Buku</a>
    <a href="daftar.php">📖 Daftar Buku</a>
</div>

<div class="welcome-box">

<h2>👋 Selamat Datang</h2>

<p>
Kelola data buku perpustakaan dengan mudah,
modern dan cepat menggunakan PHP Native & MySQL.
</p>

</div>

<div class="stats">

<div class="stat-card">
    <div class="icon">📚</div>
    <h2><?= $totalBuku ?></h2>
    <p>Total Judul Buku</p>
</div>

<div class="stat-card">
    <div class="icon">📦</div>
    <h2><?= $totalStok['total']; ?></h2>
    <p>Total Stok Buku</p>
</div>

<div class="stat-card">
    <div class="icon">✅</div>
    <h2><?= $bukuTersedia ?></h2>
    <p>Buku Tersedia</p>
</div>

</div>

<div class="action-box">

<h3>⚡ Quick Action</h3>

<br>

<a href="tambah.php" class="action-btn">
➕ Tambah Buku Baru
</a>

<a href="daftar.php" class="action-btn">
📖 Lihat Daftar Buku
</a>

</div>

</div>

</body>
</html>