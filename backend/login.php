<?php
session_start();
if (isset($_SESSION['id_admin'])) {
    echo "<script>alert('Anda Telah Login');
    window.location='index.php'
    </script>";
}

?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Pariwisata </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="asset/images/favicon.png">
    <link href="asset/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input name="username" type="text" class="form-control" placeholder="Masukkan Username">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input name="password" type="password" class="form-control">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="login" class="btn btn-primary btn-block">Sign me in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="asset/vendor/global/global.min.js"></script>
    <script src="asset/js/quixnav-init.js"></script>
    <script src="asset/js/custom.min.js"></script>

</body>

</html>

<?php
include "koneksi.php";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo md5($password);

    //cek data form ke database
    $user = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE email='$email' AND password='$password'");

    //cek jumlah data hasil query
    if (mysqli_num_rows($user) > 0) {
        //pecah data user
        $data = mysqli_fetch_array($user);
        // var_dump($data);
        // die();

        //simpan datanya ke session
        session_start();
        $_SESSION['id_admin'] = $data['id_admin'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = $data['level'];

        echo "<script>alert('Login Berhasil');
            window.location='index.php'
            </script>";
    } else {
        echo "<script>alert('Username Atau Password Salah');
            window.location='login.php'
            </script>";
    }
}

?>