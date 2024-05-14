<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Halaman Profil</h4>
                </div>
            </div>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <a href="index.php?page=profil/tambahdata" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-responsive-sm" style="color: black;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Profil</th>
                                        <th>Judul Profil</th>
                                        <th>Isi Profil</th>
                                        <th>Gambar Profil</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = mysqli_query($koneksi, "SELECT * FROM tb_profil");
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $data['id_profil'] ?></td>
                                            <td><?php echo $data['judul_profil'] ?></td>
                                            <td><?php echo $data['isi_profil'] ?></td>
                                            <td><img src="asset/image/<?php echo $data['gambar_profil'] ?>" alt="" width="150px"></td>
                                            <td>
                                                <a href="index.php?page=profil/ubahdata&id_profil=<?php echo $data['id_profil'] ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                <a onclick="return  confirm('Apakah Anda Yakin Ingin Hapus Data?')" href="profil/hapus.php?id_profil=<?php echo $data['id_profil'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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