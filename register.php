<?php
include 'koneksi.php';

$value = $_GET['value'];
?>

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

<body class="login-bg">
    <section class="py-5 position-relative" id="section1">
        <div class="gx-3 d-flex align-items-center justify-content-center">
            <div class="col-6 col-lg-5 col-xl-5 col-xxl-4">
                <div class="register-box">
                    <h2>REGISTER</h2>
                    <form method="post" action="p-register.php?value=<?= $value ?>">
                        <div class="user-box">
                            <input type="text" name="name" required="required" />
                            <label for="name">Nama</label>
                        </div>
                        <div class="d-flex flex-row justify-content-between ">
                            <div class="user-box">
                                <input type="text" class="username" name="username" required="required" />
                                <label for="username">Username</label>
                            </div>
                            <div class="user-box ml-3">
                                <input type="password" name="password" required="required" />
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="user-box">
                            <input type="tel" name="tel" required="required" />
                            <label for="tel">No. Telepon</label>
                        </div>
                        <div class="btn-form ">
                            <input type="submit" id="submit" value="Sign Up" />
                            <div class="register">
                                Dah Punya Akun? <br>
                                <a href="login.php?value=<?= $value ?>">Login di sini</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>