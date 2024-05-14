<!--**********************************
            Content body start
        ***********************************-->
<?php
$id_profil = $_GET['id_profil'];
$query_ubah = mysqli_query($koneksi, "SELECT *FROM tb_profil WHERE id_profil='$id_profil'");
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
                            <form class="form-valide" action="profil/prosesubahdata.php" method="post" enctype="multipart/form-data" style="color: black;">
                                <input type="hidden" name="id_profil" id="" value="<?php echo $data['id_profil'] ?>">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Judul Profil</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" name="judul_profil" placeholder="Masukkan judul profil.." value="<?php echo $data['judul_profil'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Isi Profil</label>
                                            <div class="col-lg-8">
                                            <textarea name="isi_profil" id="editor1" class="form-control" cols="3 0" rows="10"><?php echo$data['isi_profil'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Gambar</label>
                                            <div class="col-lg-8">
                                                <img src="asset/image/<?= $data['gambar_profil'] ?>" width="100px" alt="">
                                                <input type="file" class="form-control" name="gambar_profil">
                                                <input type="hidden" name="gambar_lama" value="<?= $data['gambar_profil'] ?>" id="">
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