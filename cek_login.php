<?php

session_start();

require '../config/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn,
"SELECT * FROM admin
WHERE username='$username'
AND password='$password'");

if(mysqli_num_rows($query)>0){

    $data = mysqli_fetch_assoc($query);

    $_SESSION['login']=true;
    $_SESSION['nama']=$data['nama'];

    header("Location:../index.php");

}else{

    echo "
    <script>
    alert('Login Gagal');
    window.location='../login.php';
    </script>
    ";

}

?>