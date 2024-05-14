<!--**********************************
            Content body start
        ***********************************-->
<?php
$id_berita = $_GET['id_berita'];
$query_ubah = mysqli_query($koneksi, "SELECT *FROM tb_berita WHERE id_berita='$id_berita'");
$data = mysqli_fetch_array($query_ubah);
?>
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Edit Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="berita/prosesubahdata.php" method="post" enctype="multipart/form-data" style="color: black;">
                                <input type="hidden" name="id_berita" id="" value="<?php echo $data['id_berita'] ?>">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Judul Berita</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" name="judul_berita" placeholder="Masukkan judul berita.." value="<?php echo $data['judul_berita'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Tanggal berita</label>
                                            <div class="col-lg-8">
                                                <input type="date" class="form-control" name="tanggal_berita" placeholder="Masukkan tanggal berita.." value="<?php echo $data['tanggal_berita'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Isi Berita</label>
                                            <div class="col-lg-8">
                                                <textarea name="isi_berita" id="editor1" cols="30" rows="10"><?php echo $data['isi_berita'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Gambar</label>
                                            <div class="col-lg-8">
                                                <img src="asset/image/<?= $data['gambar_berita'] ?>" width="100px" alt="">
                                                <input type="file" class="form-control" name="gambar_berita">
                                                <input type="hidden" name="gambar_lama" value="<?= $data['gambar_berita'] ?>" id="">
                                            </div>
                                        </div>
                                        <div class="col-lg-8 ml-auto">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>


                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
    Content body end
 ***********************************-->