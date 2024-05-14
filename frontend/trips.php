<div class="site-section">

  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-md-7">
        <div class="heading-39101 mb-5">
          <span class="backdrop text-center">Journey</span>
          <span class="subtitle-39191">Journey</span>
          <h3>Your Journey Starts Here</h3>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
      include "koneksi.php";
      $query = mysqli_query($koneksi, "SELECT *FROM tb_wisata
      JOIN tb_kategori ON tb_wisata.id_kategori=tb_kategori.id_kategori");
      while ($data = mysqli_fetch_array($query)) {
      ?>
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
          <div class="listing-item" style="height: 250px;">
            <div class="listing-image">
              <img src="backend/asset/image/<?php echo $data['gambar'] ?>" alt="Image" class="img-fluid">
            </div>
            <div class="listing-item-content">
              <h2 class="mb-1"><a href="index.php?page=frontend/trips_single&slug=<?php echo $data['slug'] ?>"><?php echo$data['judul_wisata'] ?></a></h2>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

  </div>
</div>