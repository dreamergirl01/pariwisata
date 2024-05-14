<?php 
include "../koneksi.php";

$id_tim = $_POST['id_tim'];
$nama_anggota = $_POST['nama_anggota'];
$jabatan = $_POST['jabatan'];

if ($_FILES['gambar_anggota']['name'] == '') {
    //jika gambar kosong
    $gambar = $_POST['gambar_lama'];
} else {
    //jika gambar diganti (gambar baru)
    // pindahkan file
    $gambar = $_FILES['gambar_anggota']['name'];
    $namaSementara = $_FILES['gambar_anggota']['tmp_name'];

    //hapus gambar lama
    // unlink('../asset/' . $_POST['gambar_lama']);
    //pindahkan gambar baru
    $terupload = move_uploaded_file($namaSementara, '../asset/image/' . $gambar);
}

$query = mysqli_query($koneksi, "UPDATE tb_tim SET nama_anggota='$nama_anggota',  jabatan='$jabatan',
gambar_anggota='$gambar' WHERE id_tim='$id_tim'");
// var_dump($query);die();

if ($query){
    echo "<script>
    alert('Data Berhasil Diubah')
    window.location='../index.php?page=tim/index'
    </script>";
}
else {
    echo "<script>
    alert ('Data Gagal Diubah')
    window.location='../index.php?page=tim/ubahdata&id_tim=$id_tim' 
    </script>";
}
