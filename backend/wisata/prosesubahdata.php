<?php 
include "../koneksi.php";

$id_wisata = $_POST['id_wisata'];
$id_kategori = $_POST['id_kategori'];
$judul_wisata = $_POST['judul_wisata'];
$isi = $_POST['isi'];
$tanggal_wisata = date('Y-m-d');
$slug = str_replace('+', '-', urlencode($judul_wisata));

if ($_FILES['gambar']['name'] == '') {
    //jika gambar kosong
    $gambar = $_POST['gambar_lama'];
} else {
    //jika gambar diganti (gambar baru)
    // pindahkan file
    $gambar = $_FILES['gambar']['name'];
    $namaSementara = $_FILES['gambar']['tmp_name'];

    //hapus gambar lama
    // unlink('../asset/' . $_POST['gambar_lama']);
    //pindahkan gambar baru
    $terupload = move_uploaded_file($namaSementara, '../asset/image/' . $gambar);
}

$query = mysqli_query($koneksi, "UPDATE tb_wisata SET judul_wisata='$judul_wisata', slug='$slug', isi='$isi', tanggal_wisata='$tanggal_wisata', 
gambar='$gambar' WHERE id_wisata='$id_wisata'");
// var_dump($query);die();

if ($query){
    echo "<script>
    alert('Data Berhasil Diubah')
    window.location='../index.php?page=wisata/index'
    </script>";
}
else {
    echo "<script>
    alert ('Data Gagal Diubah')
    window.location='../index.php?page=wisata/ubahdata' 
    </script>";
}
