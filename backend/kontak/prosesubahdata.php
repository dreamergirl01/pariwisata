<?php 
include "../koneksi.php";

$id_contact = $_POST['id_contact'];
$nama_contact = $_POST['nama_contact'];
$email = $_POST['email'];
$isi_contact = $_POST['isi_contact'];

$query = mysqli_query($koneksi, "UPDATE tb_contact SET nama_contact='$nama_contact',email='$email',isi_contact='$isi_contact'
WHERE id_contact='$id_contact'");
//var_dump($query);die();

if ($query){
    echo "<script>
    alert('Data Berhasil Diubah')
    window.location='../index.php?page=kontak/index'
    </script>";
}
else {
    echo "<script>
    alert ('Data Gagal Diubah')
    window.location='../index.php?page=kontak/ubahdata' 
    </script>";
}
?>