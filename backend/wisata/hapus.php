<?php 
include "../koneksi.php";
$id_wisata = $_GET['id_wisata'];

$query=mysqli_query($koneksi, "DELETE FROM tb_wisata WHERE id_wisata='$id_wisata'");
// var_dump($query);die();
if ($query){
    echo "<script>
    alert('Data Berhasil Dihapus')
    window.location='../index.php?page=wisata/index'
    </script>";
}
else {
    echo "<script>
    alert ('Data Gagal Dihapus')
    window.location='../index.php?page=wisata/index' 
    </script>";
}
?>