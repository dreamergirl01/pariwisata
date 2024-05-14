<?php 
include "../koneksi.php";

$id_berita = $_POST['id_berita'];
$judul_berita = $_POST['judul_berita'];
$tanggal_berita = $_POST['tanggal_berita'];
$isi_berita = $_POST['isi_berita'];
$slug = str_replace('+', '-', urlencode($judul_berita));

if ($_FILES['gambar_berita']['name'] == '') {
    //jika gambar kosong
    $gambar = $_POST['gambar_lama'];
} else {
    //jika gambar diganti (gambar baru)
    // pindahkan file
    $gambar = $_FILES['gambar_berita']['name'];
    $namaSementara = $_FILES['gambar_berita']['tmp_name'];

    //hapus gambar lama
    // unlink('../asset/' . $_POST['gambar_lama']);
    //pindahkan gambar baru
    $terupload = move_uploaded_file($namaSementara, '../asset/image/' . $gambar);
}

$query = mysqli_query($koneksi, "UPDATE tb_berita SET judul_berita='$judul_berita',slug='$slug', tanggal_berita='$tanggal_berita',  isi_berita='$isi_berita',
gambar_berita='$gambar' WHERE id_berita='$id_berita'");
// var_dump($query);die();

if ($query){
    echo "<script>
    alert('Data Berhasil Diubah')
    window.location='../index.php?page=berita/index'
    </script>";
}
else {
    echo "<script>
    alert ('Data Gagal Diubah')
    window.location='../index.php?page=berita/ubahdata&id_berita=$id_berita' 
    </script>";
}
