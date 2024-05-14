<?php 
include "../koneksi.php";
$id_admin = $_POST['id_admin'];
$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];
$level = $_POST['level'];

$query = mysqli_query($koneksi, "INSERT INTO tb_admin (id_admin, email, password, username, level)
VALUES('$id_admin', '$email','$password', '$username','$level') ");
//var_dump($query);die();

if ($query){
    echo "<script>
    alert('Data Berhasil Ditambahkan')
    window.location='../index.php?page=admin/index'
    </script>";
}
else {
    echo "<script>
    alert ('Data Gagal Ditambahkan')
    window.location='../index.php?page=admin/tambahdata' 
    </script>";
}