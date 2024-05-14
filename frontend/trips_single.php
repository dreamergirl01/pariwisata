<?php
include "koneksi.php";
$slug = $_GET['slug'];
$query = mysqli_query($koneksi, "SELECT *FROM tb_wisata WHERE slug='$slug'");
$data = mysqli_fetch_array($query);
?>

<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" style="background-image: url('backend/asset/image/<?php echo $data['gambar'] ?>')">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-5" data-aos="fade-up">
                    <h1 class="mb-3 text-white"><?php echo $data['judul_wisata'] ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="site-section">

    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-12">
                <div class="heading-39101 mb-5">
                    <span class="backdrop text-center">Wisata Cagar Alam</span>
                    <span class="subtitle-39191">Wisata</span>
                    <h3>Your Journey Starts Here</h3>
                </div>
            </div>
        </div>


        <div class="row mt-5 pt-5">
            <div class="col-md-6">
                <p>

                </p>
                <p><?php echo $data['isi'] ?></p>
                <p><a href="https://api.whatsapp.com/send/?phone=6285831035849" class="btn btn-primary py-3 px-4 my-4">Contact Us</a></p>
            </div>
            <div class="col-md-6">
                <img src="backend/asset/image/<?php echo $data['gambar'] ?>" alt="Image" class="img-fluid">
            </div>
        </div>

    </div>
</div>