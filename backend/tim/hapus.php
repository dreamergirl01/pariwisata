<?php 
include "../koneksi.php";
$id_tim = $_GET['id_tim'];

$query=mysqli_query($koneksi, "DELETE FROM tb_tim WHERE id_tim='$id_tim'");
// var_dump($query);die();
if ($query){
    echo "<script>
    alert('Data Berhasil Dihapus')
    window.location='../index.php?page=tim/index'
    </script>";
}
else {
    echo "<script>
    alert ('Data Gagal Dihapus')
    window.location='../index.php?page=tim/index' 
    </script>";
}
?>