<?php 
include "../koneksi.php";
$id_tim = $_POST['id_tim'];
$nama_anggota = $_POST['nama_anggota'];
$jabatan = $_POST['jabatan'];
//ambil data file
$namafile = $_FILES['gambar_anggota']['name'];
$namasementara = $_FILES['gambar_anggota']['tmp_name'];
//pindahkan upload
$terupload = move_uploaded_file($namasementara, '../asset/image/'.$namafile);

$query = mysqli_query($koneksi, "INSERT INTO tb_tim (id_tim, nama_anggota, jabatan,  gambar_anggota)
VALUES('$id_tim', '$nama_anggota','$jabatan', '$namafile') ");
 // var_dump($query);die();

if ($query){
    echo "<script>
    alert('Data Berhasil Ditambahkan')
    window.location='../index.php?page=tim/index'
    </script>";
}
else {
    echo "<script>
    alert ('Data Gagal Ditambahkan')
    window.location='../index.php?page=tim/tambahdata' 
    </script>";
}