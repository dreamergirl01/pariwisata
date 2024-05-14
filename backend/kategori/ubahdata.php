<!--**********************************
            Content body start
        ***********************************-->
<?php
$id_kategori = $_GET['id_kategori'];
$query_ubah = mysqli_query($koneksi, "SELECT *FROM tb_kategori WHERE id_kategori='$id_kategori'");
$data = mysqli_fetch_array($query_ubah);
?>
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Edit Data Kategori</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="kategori/prosesubahdata.php" method="post" style="color: black;">
                                <input type="hidden" name="id_kategori" value=" <?php echo $data['id_kategori'] ?> ">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Nama Kategori</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" name="nama_kategori" placeholder="Masukkan nama kategori.." value="<?php echo $data['nama_kategori'] ?>" required>
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