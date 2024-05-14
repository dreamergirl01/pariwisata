<?php 
include "../koneksi.php";

$id_profil = $_POST['id_profil'];
$judul_profil = $_POST['judul_profil'];
$isi_profil = $_POST['isi_profil'];

if ($_FILES['gambar_profil']['name'] == '') {
    //jika gambar kosong
    $gambar = $_POST['gambar_lama'];
} else {
    //jika gambar diganti (gambar baru)
    // pindahkan file
    $gambar = $_FILES['gambar_profil']['name'];
    $namaSementara = $_FILES['gambar_profil']['tmp_name'];

    //hapus gambar lama
    // unlink('../asset/' . $_POST['gambar_lama']);
    //pindahkan gambar baru
    $terupload = move_uploaded_file($namaSementara, '../asset/image/' . $gambar);
}

$query = mysqli_query($koneksi, "UPDATE tb_profil SET judul_profil='$judul_profil',  isi_profil='$isi_profil',
gambar_profil='$gambar' WHERE id_profil='$id_profil'");
// var_dump($query);die();

if ($query){
    echo "<script>
    alert('Data Berhasil Diubah')
    window.location='../index.php?page=profil/index'
    </script>";
}
else {
    echo "<script>
    alert ('Data Gagal Diubah')
    window.location='../index.php?page=profil/ubahdata&id_profil=$id_profil' 
    </script>";
}
