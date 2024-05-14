<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Halaman Tim</h4>
                </div>
            </div>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <a href="index.php?page=tim/tambahdata" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-responsive-sm" style="color: black;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Tim</th>
                                        <th>Nama Anggota</th>
                                        <th>Jabatan</th>
                                        <th>Gambar Anggota</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = mysqli_query($koneksi, "SELECT * FROM tb_tim");
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $data['id_tim'] ?></td>
                                            <td><?php echo $data['nama_anggota'] ?></td>
                                            <td><?php echo $data['jabatan'] ?></td>
                                            <td><img src="asset/image/<?php echo $data['gambar_anggota'] ?>" alt="" width="150px"></td>
                                            <td>
                                                <a href="index.php?page=tim/ubahdata&id_tim=<?php echo $data['id_tim'] ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                <a onclick="return  confirm('Apakah Anda Yakin Ingin Hapus Data?')" href="tim/hapus.php?id_tim=<?php echo $data['id_tim'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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