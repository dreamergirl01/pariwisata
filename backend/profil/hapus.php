<?php 
include "../koneksi.php";
$id_profil = $_GET['id_profil'];

$query=mysqli_query($koneksi, "DELETE FROM tb_profil WHERE id_profil='$id_profil'");
// var_dump($query);die();
if ($query){
    echo "<script>
    alert('Data Berhasil Dihapus')
    window.location='../index.php?page=profil/index'
    </script>";
}
else {
    echo "<script>
    alert ('Data Gagal Dihapus')
    window.location='../index.php?page=profil/index' 
    </script>";
}
?>