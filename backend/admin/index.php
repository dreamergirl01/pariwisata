<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Halaman Admin</h4>
                </div>
            </div>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <a href="index.php?page=admin/tambahdata" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-responsive-sm" style="color: black;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Id Admin</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Username</th>
                                        <th>Level</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = mysqli_query($koneksi, "SELECT * FROM tb_admin");
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $data['id_admin'] ?></td>
                                            <td><?php echo $data['email'] ?></td>
                                            <td><?php echo $data['password'] ?></td>
                                            <td><?php echo $data['username'] ?></td>
                                            <td><?php echo $data['level'] ?></td>
                                            <td>
                                                <a href="index.php?page=admin/ubahdata&id_admin=<?php echo $data['id_admin'] ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                <a onclick="return  confirm('Apakah Anda Yakin Ingin Hapus Data?')" href="admin/hapus.php?id_admin=<?php echo $data['id_admin'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
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