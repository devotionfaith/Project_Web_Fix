<?php
include '../koneksi.php';
include '../sessions.php';
?>

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
            <a href="logout.php?value=0" class="btn-logout position-absolute"> <button
                    class="btn-danger">Logout</button></a>
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsMiddle">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="homepage-admin.php" class="nav-link" aria-current="page">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="lihat-order.php" class="nav-link" aria-current="page">LIHAT ORDER</a>
                    </li>
                    <li class="nav-item">
                        <a href="lihatreservasi.php" class="nav-link" aria-current="page">RESERVASI</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
    $username = $_SESSION['username'];
    $sql_id = "SELECT * FROM user WHERE username = '$username'";
    $query = mysqli_query($connect, $sql_id);
    $data = mysqli_fetch_array($query);

    $id = $data['id_user'];
    $nama = $data['nama'];

    ?>


    <section class="py-5 position-relative bg-dark" id="section1">
        <div class=" gx-3 d-flex align-items-center justify-content-center">
            <div class="col-6 col-lg-5 col-xl-5 col-xxl-4">
                <div class="reservasi-box">
                    <h2 class="mb-5">RESERVASI</h2>

                </div>
            </div>
            <div class="col-6 col-lg-5 col-xl-5 col-xxl-4">
                <div class="daftar-reservasi">
                    <h3 class="mb-5">DAFTAR RESERVASI USER</h3>
                    <table class="table table-bordered table-dark">
                        <tr>
                            <td>No.</td>
                            <td>Nama</td>
                            <td>Tanggal</td>
                            <td>Jam</td>
                            <td>Jumlah Orang</td>
                        </tr>

                        <?php
                        $sql = "SELECT * FROM reservasi INNER JOIN user ON reservasi.id_user = user.id_user";
                        $query = mysqli_query($connect, $sql) or die(mysqli_error($connect));

                        while ($data = mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td><?= $data['id_reservasi']; ?></td>
                            <td><?= $data['nama']; ?></td>
                            <td><?= $data['tgl_reservasi']; ?></td>
                            <td><?= $data['jam']; ?></td>
                            <td><?= $data['jumlah_org']; ?></td>
                        </tr>

                        <?php } ?>
                    </table>
                </div>
            </div>

        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>