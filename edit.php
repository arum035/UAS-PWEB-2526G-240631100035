<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

require 'config/koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn,
"SELECT * FROM buku WHERE id_buku='$id'");

$row = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Buku</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="container">

<h1>✏️ Edit Buku</h1>

<div class="menu">
    <a href="index.php">🏠 Home</a>
    <a href="daftar.php">📖 Daftar Buku</a>
</div>

<div class="form-box">

<form action="proses/update.php" method="POST">

<input type="hidden"
name="id_buku"
value="<?= $row['id_buku']; ?>">

<label>Judul Buku</label>
<input type="text"
name="judul"
value="<?= $row['judul']; ?>">

<label>Penulis</label>
<input type="text"
name="penulis"
value="<?= $row['penulis']; ?>">

<label>Penerbit</label>
<input type="text"
name="penerbit"
value="<?= $row['penerbit']; ?>">

<label>Tahun Terbit</label>
<input type="number"
name="tahun_terbit"
value="<?= $row['tahun_terbit']; ?>">

<label>Stok</label>
<input type="number"
name="stok"
value="<?= $row['stok']; ?>">

<button type="submit">
🔄 Update Data
</button>

</form>

</div>

</div>

</body>
</html>