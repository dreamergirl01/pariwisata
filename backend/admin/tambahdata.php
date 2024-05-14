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
                            <form class="form-valide" action="admin/prosestambahdata.php" method="post" style="color: black;">
                            <input type="hidden" name="id_admin" value=" <?php echo $data['id_admin'] ?> ">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Email</label>
                                            <div class="col-lg-8">
                                                <input type="email" class="form-control" name="email" placeholder="Masukkan email.." required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Password</label>
                                            <div class="col-lg-8">
                                                <input type="password" class="form-control" name="password" placeholder="Masukkan password.." required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Username</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" name="username" placeholder="Masukkan username.." required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Level</label>
                                            <div class="col-lg-8">
                                                <select name="level" id="" class="form-control" required>
                                                        <option value="">Pilih Level</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="author">Author</option>
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