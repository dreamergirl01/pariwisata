<?php
include "../koneksi.php";
$id_wisata = $_POST['id_wisata'];
$id_kategori = $_POST['id_kategori'];
$judul_wisata = $_POST['judul_wisata'];
$isi = $_POST['isi'];
$tanggal_wisata = date('Y-m-d');
$slug = str_replace('+', '-', urlencode($judul_wisata));
//ambil data file
$namafile = $_FILES['gambar']['name'];
$namasementara = $_FILES['gambar']['tmp_name'];
//pindahkan upload
$terupload = move_uploaded_file($namasementara, '../asset/image/' . $namafile);

$query = mysqli_query($koneksi, "INSERT INTO tb_wisata (id_wisata, id_kategori,judul_wisata,slug, isi, tanggal_wisata, gambar)
VALUES('$id_wisata', '$id_kategori','$judul_wisata', '$slug', '$isi','$tanggal_wisata', '$namafile') ");
//var_dump($query);die();

if ($query) {
    echo "<script>
    alert('Data Berhasil Ditambahkan')
    window.location='../index.php?page=wisata/index'
    </script>";
} else {
    echo "<script>
    alert ('Data Gagal Ditambahkan')
    window.location='../index.php?page=wisata/tambahdata' 
    </script>";
}
