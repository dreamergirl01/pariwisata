<!--**********************************
            Content body start
        ***********************************-->
<?php
$id_wisata = $_GET['id_wisata'];
$query_ubah = mysqli_query($koneksi, "SELECT *FROM tb_wisata WHERE id_wisata='$id_wisata'");
$data = mysqli_fetch_array($query_ubah);
// var_dump($data);
// die();
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
                            <form class="form-valide" action="wisata/prosesubahdata.php" method="post" enctype="multipart/form-data" style="color: black;">
                                <input type="hidden" name="id_wisata" value=" <?php echo $data['id_wisata'] ?> ">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">ID Kategori</label>
                                            <div class="col-lg-8">
                                                <select name="id_kategori" id="" class="form-control" required>
                                                    <option value="">Pilih Kategori</option>
                                                    <?php
                                                    $query = mysqli_query($koneksi, "SELECT *FROM tb_kategori");
                                                    while ($data2 = mysqli_fetch_array($query)) {
                                                    ?>
                                                        <option value="<?php echo $data2['id_kategori'] ?>" <?php echo $data2['id_kategori'] == $data['id_kategori'] ? 'selected' : '' ?>>
                                                            <?php echo $data2['nama_kategori'] ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Judul wisata</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" name="judul_wisata" placeholder="Masukkan judul wisata.." value="<?php echo $data['judul_wisata'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Isi</label>
                                            <div class="col-lg-8">
                                                <textarea name="isi" id="editor1" class="form-control" cols="3 0" rows="10"><?php echo $data['isi'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Tanggal Wisata</label>
                                            <div class="col-lg-8">
                                                <input type="date" class="form-control" name="tanggal_wisata" placeholder="Masukkan tanggal wisata.." value="<?php echo $data['tanggal_wisata'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Gambar</label>
                                            <div class="col-lg-8">
                                                <img src="asset/image/<?= $data['gambar'] ?>" width="100px" alt="">
                                                <input type="file" class="form-control" name="gambar">
                                                <input type="hidden" name="gambar_lama" value="<?= $data['gambar'] ?>" id="">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
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