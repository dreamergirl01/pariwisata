<!--**********************************
            Content body start
        ***********************************-->
<?php
$id_admin = $_GET['id_admin'];
$query_ubah = mysqli_query($koneksi, "SELECT *FROM tb_admin WHERE id_admin='$id_admin'");
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
                        <h4 class="card-title">Form Edit Data admin</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="admin/prosesubahdata.php" method="post" style="color: black;">
                                <input type="hidden" name="id_admin" value=" <?php echo $data['id_admin'] ?> ">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Email</label>
                                            <div class="col-lg-8">
                                                <input type="email" class="form-control" name="email" placeholder="Masukkan email.." value="<?php echo $data['email'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Password</label>
                                            <div class="col-lg-8">
                                                <input type="password" class="form-control" name="password" placeholder="Masukkan password.." value="<?php echo $data['password'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Username</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" name="username" placeholder="Masukkan username.." value="<?php echo $data['username'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Level</label>
                                            <div class="col-lg-8">
                                                <select name="level" id="" class="form-control" required>
                                                    <option value="">Pilih Level</option>
                                                    <option value="admin" <?php echo $data['level'] == 'admin' ? 'selected' :'' ?> >Admin</option>
                                                    <option value="author" <?php echo $data['level'] == 'author' ? 'selected' :'' ?> >Author</option>
                                                </select>
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