<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Halaman Berita</h4>
                </div>
            </div>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <a href="index.php?page=berita/tambahdata" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-responsive-sm" style="color: black;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Berita</th>
                                        <th>Judul Berita</th>
                                        <th>Tanggal Berita</th>
                                        <th>Isi Berita</th>
                                        <th>Gambar Berita</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = mysqli_query($koneksi, "SELECT * FROM tb_berita");
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $data['id_berita'] ?></td>
                                            <td><?php echo $data['judul_berita'] ?></td>
                                            <td><?php echo $data['tanggal_berita'] ?></td>
                                            <td><?php echo $data['isi_berita'] ?></td>
                                            <td><img src="asset/image/<?php echo $data['gambar_berita'] ?>" alt="" width="150px"></td>
                                            <td>
                                                <a href="index.php?page=berita/ubahdata&id_berita=<?php echo $data['id_berita'] ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                <a onclick="return  confirm('Apakah Anda Yakin Ingin Hapus Data?')" href="berita/hapus.php?id_berita=<?php echo $data['id_berita'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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