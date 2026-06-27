<?php

require '../config/koneksi.php';

if(isset($_POST['simpan'])){

    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun_terbit'];
    $stok = $_POST['stok'];

    mysqli_query($conn,
    "INSERT INTO buku
    (judul,penulis,penerbit,tahun_terbit,stok)
    VALUES
    ('$judul','$penulis','$penerbit','$tahun','$stok')");

    header("Location: ../daftar.php");
}

?>