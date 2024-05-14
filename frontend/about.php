<?php
include "koneksi.php";
?>
<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" style="background-image: url('frontend/asset/images/sakura.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-5" data-aos="fade-up">
                    <h1 class="mb-3 text-white">About Us</h1>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="site-section py-5">
    <?php
    $query = mysqli_query($koneksi, "SELECT *FROM tb_profil");
    $data = mysqli_fetch_array($query);
    ?>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="heading-39101 mb-5">
                    <span class="backdrop">Story</span>
                    <span class="subtitle-39191">Discover Story</span>
                    <h3>Our Story</h3>
                </div>
                <p><?php echo $data['isi_profil'] ?></p>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <img src="backend/asset/image/<?php echo $data['gambar_profil'] ?>" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<!-- <div class="site-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 order-2 ml-auto">
                <div class="heading-39101 mb-5">
                    <span class="backdrop">Mission</span>
                    <span class="subtitle-39191">Our Mission</span>
                    <h3>Our Mission</h3>
                </div>
                <p><?php echo $data['isi_profil'] ?></p>
            </div>
            <div class="col-md-6 order-1" data-aos="fade-left">
                <img src="backend/asset/image/<?php echo $data['gambar_profil'] ?>" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</div> -->



<!-- <div class="site-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 order-2 ml-auto">
                <div class="heading-39101 mb-5">
                    <span class="backdrop">Mission</span>
                    <span class="subtitle-39191">Our Mission</span>
                    <h3>Our Mission</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quae expedita fugiat quo incidunt, possimus temporibus aperiam eum, quaerat sapiente.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis enim a pariatur molestiae.</p>
            </div>
            <div class="col-md-6 order-1" data-aos="fade-left">
                <img src="frontend/asset/images/hero_1.jpg" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</div> -->


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