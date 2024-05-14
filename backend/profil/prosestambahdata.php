<?php 
include "../koneksi.php";
$id_profil = $_POST['id_profil'];
$judul_profil = $_POST['judul_profil'];
$isi_profil = $_POST['isi_profil'];
//ambil data file
$namafile = $_FILES['gambar_profil']['name'];
$namasementara = $_FILES['gambar_profil']['tmp_name'];
//pindahkan upload
$terupload = move_uploaded_file($namasementara, '../asset/image/'.$namafile);

$query = mysqli_query($koneksi, "INSERT INTO tb_profil (id_profil, judul_profil, isi_profil,  gambar_profil)
VALUES('$id_profil', '$judul_profil','$isi_profil', '$namafile') ");
  //var_dump($query);die();

if ($query){
    echo "<script>
    alert('Data Berhasil Ditambahkan')
    window.location='../index.php?page=profil/index'
    </script>";
}
else {
    echo "<script>
    alert ('Data Gagal Ditambahkan')
    window.location='../index.php?page=profil/tambahdata' 
    </script>";
}