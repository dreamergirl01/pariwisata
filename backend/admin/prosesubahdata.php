<?php 
include "../koneksi.php";

$id_admin = $_POST['id_admin'];
$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];
$level = $_POST['level'];

$query = mysqli_query($koneksi, "UPDATE tb_admin SET email='$email', password='$password', username='$username', level='$level'
 WHERE id_admin='$id_admin'");
// var_dump($query);die();

if ($query){
    echo "<script>
    alert('Data Berhasil Diubah')
    window.location='../index.php?page=admin/index'
    </script>";
}
else {
    echo "<script>
    alert ('Data Gagal Diubah')
    window.location='../index.php?page=admin/ubahdata' 
    </script>";
}
?>