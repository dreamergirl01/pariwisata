<?php 
include "../koneksi.php";
$id_kategori = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];

$query = mysqli_query($koneksi, "INSERT INTO tb_kategori (id_kategori, nama_kategori)
VALUES('$id_kategori','$nama_kategori') ");
//  var_dump($query);die();

if ($query){
    echo "<script>
    alert('Data Berhasil Ditambahkan')
    window.location='../index.php?page=kategori/index'
    </script>";
}
else {
    echo "<script>
    alert ('Data Gagal Ditambahkan')
    window.location='../index.php?page=kategori/tambahdata' 
    </script>";
}