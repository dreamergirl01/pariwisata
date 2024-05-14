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
                            <form class="form-valide" action="berita/prosestambahdata.php" method="post" enctype="multipart/form-data" style="color: black;">
                            <input type="hidden" name="id_berita" value=" <?php echo $data['id_berita'] ?> ">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Judul Berita</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" name="judul_berita" placeholder="Masukkan judul berita.." required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Tanggal Berita</label>
                                            <div class="col-lg-8">
                                                <input type="date" class="form-control" name="tanggal_berita" placeholder="Masukkan tanggal berita.." required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Isi Berita</label>
                                            <div class="col-lg-8">
                                            <textarea name="tanggal_berita" id="editor1" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Gambar Berita</label>
                                            <div class="col-lg-8">
                                                <input type="file" class="form-control" name="gambar_berita" required>
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