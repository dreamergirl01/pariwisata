<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" style="background-image: url('frontend/asset/images/sakura.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-5" data-aos="fade-up">
                    <h1 class="mb-3 text-white">Our Blog</h1>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="site-section">
    <div class="container">


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


        <div class="col-12 mt-5 text-center">
            <span class="p-3">1</span>
            <a href="#" class="p-3">2</a>
            <a href="#" class="p-3">3</a>
            <a href="#" class="p-3">4</a>
        </div>

    </div>
</div> <!-- END .site-section -->