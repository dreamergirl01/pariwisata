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
                        <h4 class="card-title">Form Tambah Kontak</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="kontak/prosestambahdata.php" method="post" style="color: black;">
                            <input type="hidden" name="id_contact" value=" <?php echo $data['id_contact'] ?> ">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Nama Kontak</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control"  name="nama_contact" placeholder="Masukkan Nama Kontak..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Email</label>
                                            <div class="col-lg-8">
                                                <input type="email" class="form-control"  name="email" placeholder="Masukkan Email..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Isi Kontak</label>
                                            <div class="col-lg-8">
                                                <textarea name="isi_contact" id="" cols="68" rows="10"></textarea>
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