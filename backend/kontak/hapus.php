<?php 
include "../koneksi.php";
$id_contact = $_GET['id_contact'];

$query=mysqli_query($koneksi, "DELETE FROM tb_contact WHERE id_contact='$id_contact'");
// var_dump($query);die();
if ($query){
    echo "<script>
    alert('Data Berhasil Dihapus')
    window.location='../index.php?page=kontak/index'
    </script>";
}
else {
    echo "<script>
    alert ('Data Gagal Dihapus')
    window.location='../index.php?page=kontak/index' 
    </script>";
}
?>