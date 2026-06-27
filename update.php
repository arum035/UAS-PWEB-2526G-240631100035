<?php

require '../config/koneksi.php';

$id = $_POST['id_buku'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun_terbit'];
$stok = $_POST['stok'];

mysqli_query($conn,
"UPDATE buku SET
judul='$judul',
penulis='$penulis',
penerbit='$penerbit',
tahun_terbit='$tahun',
stok='$stok'
WHERE id_buku='$id'");

header("Location: ../daftar.php");

?>