<?php 
include "../koneksi.php";
$id_berita = $_POST['id_berita'];
$judul_berita = $_POST['judul_berita'];
$tanggal_berita = $_POST['tanggal_berita'];
$isi_berita = $_POST['isi_berita'];
$tanggal= date('Y-m-d');
$slug = str_replace('+', '-', urlencode($judul_berita));
//ambil data file
$namafile = $_FILES['gambar_berita']['name'];
$namasementara = $_FILES['gambar_berita']['tmp_name'];
//pindahkan upload
$terupload = move_uploaded_file($namasementara, '../asset/image/'.$namafile);

$query = mysqli_query($koneksi, "INSERT INTO tb_berita (id_berita, judul_berita, slug, tanggal_berita, isi_berita,  gambar_berita)
VALUES('$id_berita', '$judul_berita','$slug','$tanggal', '$isi_berita', '$namafile') ");
  //var_dump($query);die();

if ($query){
    echo "<script>
    alert('Data Berhasil Ditambahkan')
    window.location='../index.php?page=berita/index'
    </script>";
}
else {
    echo "<script>
    alert ('Data Gagal Ditambahkan')
    window.location='../index.php?page=berita/tambahdata' 
    </script>";
}