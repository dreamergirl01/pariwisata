
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Halaman Kategori</h4>
                        </div>
                    </div>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="index.php?page=kategori/tambahdata" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-responsive-sm" style="color: black;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Id Kategori</th>
                                                <th>Nama Kategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            $query = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
                                            while ($data = mysqli_fetch_array($query)) {
                                            ?>
                                           <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $data['id_kategori'] ?></td>
                                            <td><?php echo $data['nama_kategori'] ?></td>
                                            <td>
                                                <a href="index.php?page=kategori/ubahdata&id_kategori=<?php echo $data['id_kategori'] ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                <a href="kategori/hapus.php?id_kategori=<?php echo $data['id_kategori'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
