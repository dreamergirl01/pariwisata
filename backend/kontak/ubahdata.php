<!--**********************************
            Content body start
        ***********************************-->
<?php
$id_contact = $_GET['id_contact'];
$query_ubah = mysqli_query($koneksi, "SELECT *FROM tb_contact WHERE id_contact='$id_contact'");
$data = mysqli_fetch_array($query_ubah);
?>
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Edit Data Kontak</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="kontak/prosesubahdata.php" method="post" style="color: black;">
                                <input type="hidden" name="id_contact" value=" <?php echo $data['id_contact'] ?> ">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Nama Kontak</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" name="nama_contact" placeholder="Masukkan nama kontak.." value="<?php echo $data['nama_contact'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">email</label>
                                            <div class="col-lg-8">
                                                <input type="email" class="form-control" name="email" placeholder="Masukkan email.." value="<?php echo $data['email'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Isi Kontak</label>
                                            <div class="col-lg-8">
                                                <textarea name="isi_contact" class="form-control" id="" cols="68" rows="10" placeholder="Masukkan isi kontak" required><?php echo $data['isi_contact'] ?></textarea>
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