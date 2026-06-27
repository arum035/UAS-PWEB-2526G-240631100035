<?php

session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

require 'config/koneksi.php';
include 'function.php';

$data = mysqli_query($conn,"SELECT * FROM buku");

?>

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Daftar Buku</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="container">

<h1>📖 Daftar Buku</h1>

<div class="menu">
    <a href="index.php">🏠 Dashboard</a>
    <a href="tambah.php">➕ Tambah Buku</a>
    <a href="profil.php">👤 Profil</a>
    <a href="logout.php">🚪 Logout</a>
</div>

<a href="tambah.php" class="btn-tambah">
    ➕ Tambah Buku Baru
</a>

<table>

<tr>
    <th>No</th>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Penerbit</th>
    <th>Tahun</th>
    <th>Stok</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;

while($row = mysqli_fetch_assoc($data)){
?>

<tr>

<td><?= $no++; ?></td>

<td><?= $row['judul']; ?></td>

<td><?= $row['penulis']; ?></td>

<td><?= $row['penerbit']; ?></td>

<td><?= $row['tahun_terbit']; ?></td>

<td><?= $row['stok']; ?></td>

<td><?= statusStok($row['stok']); ?></td>

<td>

<a
class="btn-edit"
href="edit.php?id=<?= $row['id_buku']; ?>">
✏️ Edit
</a>

<a
class="btn-hapus"
href="hapus.php?id=<?= $row['id_buku']; ?>"
onclick="return confirm('Yakin ingin menghapus data ini?')">
🗑 Hapus
</a>

</td>

</tr>

<?php
}
?>

</table>

</div>

</body>
</html>