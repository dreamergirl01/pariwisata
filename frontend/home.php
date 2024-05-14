<div class="ftco-blocks-cover-1">
  <div class="site-section-cover overlay" style="background-image: url('frontend/asset/images/sakura.jpg')">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-5" data-aos="fade-right">
          <h1 class="mb-3 text-white">Let's Enjoy Your Tourist Journey</h1>
          <p class="d-flex align-items-center">
            <a href="https://youtu.be/G5RpJwCJDqc" data-fancybox class="play-btn-39282 mr-3"><span class="icon-play"></span></a>
            <span class="small">Watch the video</span>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="site-section py-5">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-md-6">
        <div class="heading-39101 mb-5">
          <span class="backdrop">Profil</span>
          <span class="subtitle-39191">Profil Perusahaan X</span>
          <h3>Profil Perusahaan X</h3>
          <?php
          include "koneksi.php";
          $query = mysqli_query($koneksi, "SELECT *FROM tb_profil");
          $data = mysqli_fetch_array($query);
          // var_dump($data);
          // die();
          ?>
        </div>
        <h4><?php echo $data['judul_profil'] ?></h4>
        <p> <?php echo $data['isi_profil'] ?></p>
      </div>

      <div class="col-md-6" data-aos="fade-right">
        <img src="backend/asset/image/<?php echo $data['gambar_profil'] ?> " alt="Image" class="img-fluid" style="width: 500px; height: 500px;">
      </div>
    </div>
  </div>
</div>

<div class="site-section">

  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-md-7">
        <div class="heading-39101 mb-5">
          <span class="backdrop text-center">Wisata</span>
          <span class="subtitle-39191">Wisata</span>
          <h3>Pilihan Wisata</h3>
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
              <h2 class="mb-1"><a href="index.php?page=frontend/trips_single&slug=<?php echo $data['slug'] ?>"><?php echo $data['judul_wisata'] ?></a></h2>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

  </div>
</div>

<div class="site-section">

  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-md-10">
        <div class="heading-39101 mb-5">
          <span class="backdrop text-center">Our Team</span>
          <span class="subtitle-39191">Amazing Staff</span>
          <h3>Meet Our Team</h3>
        </div>
      </div>
    </div>


    <div class="row">
      <?php
      $query = mysqli_query($koneksi, "SELECT *FROM tb_tim");
      while (($data = mysqli_fetch_array($query))) {
      ?>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="person-29191 text-center">
            <img src="backend/asset/image/<?php echo $data['gambar_anggota'] ?>" alt="Image" class="img-fluid mb-4">
            <div class="px-4">
              <h2 class="mb-2" style="height: 100px;"><?php echo $data['nama_anggota'] ?></h2>
              <p class="caption mb-4"><?php echo $data['jabatan'] ?></p>
              <div class="social_29128 mt-5">
                <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-instagram"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

  </div>
</div>


<div class="site-section">

  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-md-10">
        <div class="heading-39101 mb-5">
          <span class="backdrop text-center">Blog</span>
          <span class="subtitle-39191">Updates</span>
          <h3>Our Blog</h3>
        </div>
      </div>
    </div>

    <div class="row">
      <?php
      include "koneksi.php";
      $query = mysqli_query($koneksi, "SELECT *FROM tb_berita");
      while ($data = mysqli_fetch_array($query)) {
      ?>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="post-entry-1 h-100">
            <a href="single.html">
              <img src="backend/asset/image/<?php echo $data['gambar_berita'] ?>" alt="Image" class="img-fluid">
            </a>
            <div class="post-entry-1-contents">

              <h2><a href="index.php?page=frontend/single&slug=<?php echo $data['slug'] ?>"><?php echo $data['judul_berita'] ?></a></h2>
              <span class="meta d-inline-block mb-3"><?php echo $data['tanggal_berita'] ?><span class="mx-2">by</span> <a href="#">Admin</a></span>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>


<div class="site-section bg-image overlay" style="background-image: url('frontend/asset/images/sakura.jpg')">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 text-center">
        <h2 class="font-weight-bold text-white">Join and Trip With Us</h2>
        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus ut, doloremque quo molestiae nesciunt officiis veniam, beatae dignissimos!</p>
        <p class="mb-0"><a href="#" class="btn btn-primary text-white py-3 px-4">Get In Touch</a></p>
      </div>
    </div>
  </div>
</div>