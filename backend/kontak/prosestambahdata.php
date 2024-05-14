<?php 
include "../koneksi.php";
$id_contact = $_POST['id_contact'];
$nama_contact = $_POST['nama_contact'];
$email = $_POST['email'];
$isi_contact = $_POST['isi_contact'];

$query = mysqli_query($koneksi, "INSERT INTO tb_contact (id_contact, nama_contact, email, isi_contact)
VALUES('$id_contact','$nama_contact', '$email', '$isi_contact') ");
//  var_dump($query);die();

if ($query){
    echo "<script>
    alert('Data Berhasil Ditambahkan')
    window.location='../index.php?page=kontak/index'
    </script>";
}
else {
    echo "<script>
    alert ('Data Gagal Ditambahkan')
    window.location='../index.php?page=kontak/tambahdata' 
    </script>";
}