<?php
session_start();
if (empty($_SESSION['username'])) {
    $url = "login.php?value=1";
    $url2 = "login.php?value=2";
    $url3 = "login.php?value=3";
} else {
    $url = "lihatorder.php?value=0";
    $url2 = "reservasi.php?value=0";
    $url3 = "products.php?value=0";
} ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Gustoro Coffee Shop</title>
</head>

<body>
    <nav class="nav nav-bg navbar-expand-lg fixed-top navbar-dark p-3">
        <div class="container-fluid">
            <?php
            if (empty($_SESSION['username'])) { ?>
            <a href="login.php?value=0" class="btn-login position-absolute"> <button
                    class="button-profile">Login</button></a>
            <?php } else { ?>
            <a href="logout.php" class="btn-logout position-absolute"> <button class="btn-danger">Logout</button></a>
            <?php
            }
            ?>
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsMiddle">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#slide1" class="nav-link" aria-current="page">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="#slide2" class="nav-link" aria-current="page">PROFILE</a>
                    </li>
                    <li class="nav-item">
                        <a href="#slide3" class="nav-link" aria-current="page">PRODUCTS</a>
                    </li>
                    <li class="nav-item">
                        <a href="#slide4" class="nav-link" aria-current="page">LIHAT ORDER</a>
                    </li>
                    <li class="nav-item">
                        <a href="#slide5" class="nav-link" aria-current="page">RESERVASI</a>
                    </li>
                    <li class="nav-item">
                        <a href="#slide6" class="nav-link" aria-current="page">GALLERY</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="bg-dark py-5" id="slide1">
        <div class="container px-2">
            <div class="row gx-3 d-flex align-items-center justify-content-center">
                <div class="col-6 col-lg-5 col-xl-5 col-xxl-4">
                    <div class="my-5 text-warning text-center text-xl-start">
                        <h2 class="display-2 fw-bolder mb-2">Gustoro Coffee</h2>
                        <h5 class="lead fw-normal mb-4">Selamat datang & Nikmati Kopimu</h5>
                    </div>
                </div>
                <div class="col-6 col-xl-4 col-xxl-5 text-center">
                    <div class="lottie-product">
                        <div>
                            <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_wyopauto.json"
                                background="transparent" speed="1" loop autoplay></lottie-player>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5 container-fitur" id="slide2">
        <div class="container">
            <!-- Row  -->
            <div class="row mt-5">
                <!-- Column -->
                <div class="col-md-4 wrap-fitur-box">
                    <div class="card card-shadow border-0 mb-4">
                        <div class="p-4">
                            <div class="icon-space">
                                <div class="icon-round text-center d-inline-block rounded-circle">
                                    <img src="assets/icon-coffee.png" class="icon" />
                                </div>
                            </div>
                            <h6 class="font-weight-medium">Nikmati Kopi Pilihan Terbaik</h6>
                            <p class="mt-3">Biji kopi grade Specialty Arabica dan Fine Robusta dari 9 perkebunan terbaik
                                Indonesia</p>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-4 wrap-fitur-box">
                    <div class="card card-shadow border-0 mb-4">
                        <div class="p-4">
                            <div class="icon-space">
                                <div class="icon-round text-center d-inline-block rounded-circle">
                                    <img src="assets/happy.png" class="icon" />
                                </div>
                            </div>
                            <h6 class="font-weight-medium">Positive Vibe</h6>
                            <p class="mt-3">Tempat dimana luka dan trauma tak terasa. Disini hanya ada cerita, cinta,
                                dan bahagia.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-4 wrap-fitur-box">
                    <div class="card card-shadow border-0 mb-4">
                        <div class="p-4">
                            <div class="icon-space">
                                <div class="icon-round text-center d-inline-block rounded-circle">
                                    <img src="assets/karaoke.png" class="icon" />
                                </div>
                            </div>
                            <h6 class="font-weight-medium">Live Music Everyday</h6>
                            <p class="mt-3">Untaian nada-nada dari para musisi lokal yang tentunya akan menjadi rhapsody
                                bagi kita semua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark py-5 position-relative" id="slide3">
        <div class="py-5 container-gambar">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center text-white">
                        <h2 class="mb-4 ">OUR PRODUCT</h2>
                        <p>Dari minunan tradisional berbasis espresso sampai berbagai minuman
                            racikan kopi terkini.</p>
                        <a class="btn button-profile mt-3 text-uppercase" href="<?= $url3 ?>"><span>Product</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5 container-fitur" id="slide4">
        <div class="container py-3">
            <div class="row">
                <!-- Column -->
                <div class="col-lg-7 d-flex justify-content-center align-items-center">
                    <div class="text-box ">
                        <h1> LIHAT ORDER </h1>
                        <h6 class="mt-3"> Ayo lihat orderanmu sekarang juga <br> Pengen lihat orderanmu kan? <br> Klik
                            tombol di bawah
                            untuk melihat</h6>

                        <a class="btn btn-dark mt-3 text-uppercase" href="<?= $url ?>"><span>Lihat Order</span></a>
                    </div>
                </div>
                <div class="col-lg-5 pr-4">
                    <img src="assets/coffee3.jpg" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="bg-warning py-5 container-fitur" id="slide5">
        <div class="container py-3">
            <div class="row">
                <!-- Column -->
                <div class="col-lg-7 d-flex justify-content-center align-items-center">
                    <img src="assets/coffeeshop.jpg" class="img-fluid" alt="" style="height:80%; width:auto" />
                </div>
                <div class="col-lg-5 pr-4 d-flex flex-column justify-content-center align-items-start">
                    <div class="text-white">
                        <h1> Reservasi </h1>
                        <h6 class="mt-3"> Takut kehabisan meja untuk nongki?<br> Mau pacaran tapi meja udah penuh?
                            <br>Yuk, Booking meja sekarang!!
                    </div>
                    <a class="btn btn-dark mt-3 text-uppercase" href="<?= $url2 ?>"><span>Booking</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light pt-5 container-fitur d-flex flex-column" id="slide6">
        <h1 class="pt-2">GALLERY</h1>
        <div class="gallery mt-5">
            <div class="pic img-hover">
                <img src="assets/gallery1.jpg" />
            </div>
            <div class="pic img-hover">
                <img src="assets/gallery2.jpg" />
            </div>
            <div class="pic img-hover">
                <img src="assets/gallery3.jpg" />
            </div>
            <div class="pic img-hover">
                <img src="assets/gallery4.jpg" />
            </div>
            <div class="pic img-hover">
                <img src="assets/gallery5.jpg" />
            </div>
            <div class="pic img-hover">
                <img src="assets/gallery6.png" />
            </div>
            <div class="pic img-hover">
                <img src="assets/gallery7.jpg" />
            </div>
            <div class="pic img-hover">
                <img src="assets/gallery8.jpg" />
            </div>
        </div>
    </section>


    <div class="container-footer bg-dark">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <span class="mb-3 mb-md-0 text-white">&copy; 2022 Gustoro Coffee, Inc</span>
            </div>

            <ul class=" nav col-md-4 justify-content-end d-flex">
                <li class="ms-3" class="text-white"> Gustian
                </li>
                <li class="ms-3" class="text-white"> Yoga Paok
                </li>
            </ul>
        </footer>
    </div>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>