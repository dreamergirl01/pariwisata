<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Halaman Wisata</h4>
                    <p class="mb-0">silahkan dilihat</p>
                </div>
            </div>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <a href="index.php?page=wisata/tambahdata" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-responsive-sm" style="color: black;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th>Judul Wisata</th>
                                        <th>Isi</th>
                                        <th>Tanggal Wisata</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = mysqli_query($koneksi, "SELECT * FROM tb_wisata
                                            JOIN tb_kategori on tb_wisata.id_kategori=tb_kategori.id_kategori
                                            ORDER BY id_wisata DESC");
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $data['nama_kategori'] ?></td>
                                            <td><?php echo $data['judul_wisata'] ?></td>
                                            <td><?php echo $data['isi']?></td> 
                                            <td><?php echo $data['tanggal_wisata'] ?></td>
                                            <td><img src="asset/image/<?php echo $data['gambar'] ?>" alt="" width="150px"></td>
                                            <td>
                                                <a href="index.php?page=wisata/ubahdata&id_wisata=<?php echo $data['id_wisata'] ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                <a onclick="return  confirm('Apakah Anda Yakin Ingin Hapus Data?')" href="wisata/hapus.php?id_wisata=<?php echo $data['id_wisata'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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