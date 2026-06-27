<?php

session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>
<head>

<title>Tambah Buku</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="container">

<h1>➕ Tambah Buku</h1>

<div class="menu">
    <a href="index.php">🏠 Home</a>
    <a href="daftar.php">📖 Daftar Buku</a>
</div>

<div class="form-box">

<form action="proses/simpan.php" method="POST">

<label>Judul Buku</label>
<input type="text" name="judul" required>

<label>Penulis</label>
<input type="text" name="penulis" required>

<label>Penerbit</label>
<input type="text" name="penerbit" required>

<label>Tahun Terbit</label>
<input type="number" name="tahun_terbit" required>

<label>Stok</label>
<input type="number" name="stok" required>

<button type="submit" name="simpan">
💾 Simpan Data
</button>

</form>

</div>

</div>

</body>
</html>