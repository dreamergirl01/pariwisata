<?php 
include "../koneksi.php";
$id_admin = $_GET['id_admin'];

$query=mysqli_query($koneksi, "DELETE FROM tb_admin WHERE id_admin='$id_admin'");
// var_dump($query);die();
if ($query){
    echo "<script>
    alert('Data Berhasil Dihapus')
    window.location='../index.php?page=admin/index'
    </script>";
}
else {
    echo "<script>
    alert ('Data Gagal Dihapus')
    window.location='../index.php?page=admin/index' 
    </script>";
}
?>