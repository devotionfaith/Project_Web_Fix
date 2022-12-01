<?php
session_start();
if ($_SESSION['role'] != 'admin' || empty($_SESSION['username'])) {
    header("location: ../login.php?message=belum_login&value=0");
} ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Gustoro Coffee Shop</title>
</head>

<body>
    <nav class="nav nav-bg navbar-expand-lg fixed-top navbar-dark p-3">
        <div class="container-fluid">
            <a href="../logout.php" class="btn-logout position-absolute"> <button class="btn-danger">Logout</button></a>
        </div>
    </nav>
    <section class="bg-dark py-5" id="slide1">
        <div class="container px-2">
            <div class="row gx-3 d-flex align-items-center justify-content-center">
                <div class="col-6 col-lg-5 col-xl-5 col-xxl-4">
                    <div class="my-5 text-warning text-center text-xl-start">
                        <h2 class="display-2 fw-bolder mb-2">Gustoro Coffee</h2>
                        <h5 class="lead fw-normal mb-4">Selamat datang <?= $_SESSION["username"] ?></h5>
                    </div>
                    <a class="btn" href="input-product.php"> <button class="button-profile">Edit Produk
                        </button></a>
                    <a class="btn" href="../home.php"> <button class="button-profile">User Page
                        </button></a>
                    <a class="btn" href="lihatreservasi.php"> <button class="button-profile">Lihat Reservasi
                        </button></a>
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
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>