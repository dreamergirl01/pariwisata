<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Tambah Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="wisata/prosestambahdata.php" method="post" enctype="multipart/form-data" style="color: black;">
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
                                                    while ($data = mysqli_fetch_array($query)) {
                                                    ?>
                                                        <option value="<?php echo $data['id_kategori'] ?>">
                                                            <?php echo $data['nama_kategori'] ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Judul wisata</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" name="judul_wisata" placeholder="Masukkan judul wisata.." required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Isi</label>
                                            <div class="col-lg-8">
                                                <textarea name="isi" id="editor1" class="form-control" cols="3 0" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Tanggal Wisata</label>
                                            <div class="col-lg-8">
                                                <input type="date" class="form-control" name="tanggal_wisata" placeholder="Masukkan tanggal wisata.." required>
                                            </div>
                                        </div> -->
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Gambar</label>
                                            <div class="col-lg-8">
                                                <input type="file" class="form-control" name="gambar" required>
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