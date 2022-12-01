<?php
include 'koneksi.php';
include 'sessions.php';
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
    <title>Gustoro Coffee</title>
</head>

<body>

    <nav class="nav nav-bg navbar-expand-lg fixed-top navbar-dark p-3">
        <div class="container-fluid">
            <a href="logout.php?value=0" class="btn-logout position-absolute"> <button
                    class="btn-danger">Logout</button></a>
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsMiddle">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link" aria-current="page">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="products.php" class="nav-link" aria-current="page">PRODUCTS</a>
                    </li>
                    <li class="nav-item">
                        <a href="lihatorder.php" class="nav-link" aria-current="page">LIHAT ORDER</a>
                    </li>
                    <li class="nav-item">
                        <a href="reservasi.php" class="nav-link" aria-current="page">RESERVASI</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="bg-dark position-relative d-flex align-items-center justify-content-center" id="slide1">
        <div class="row gx-3 d-flex align-items-center justify-content-center">
            <div class="col-6 col-lg-5 col-xl-5 col-xxl-4 ">
                <div class="my-5 text-warning text-center text-xl-start">
                    <h2 class="pb-3">DAFTAR ORDER</h2>
                    <table class="table table-bordered table-dark">
                        <tr>
                            <td>No ID</td>
                            <td>Nama</td>
                            <td>Product</td>
                            <td>Quantity</td>
                            <td>Total</td>
                            <td>Pembayaran</td>
                        </tr>

                        <?php
                        $username = $_SESSION['username'];
                        $sql_id = "SELECT * FROM user WHERE username = '$username'";
                        $query_id = mysqli_query($connect, $sql_id);
                        $data_id = mysqli_fetch_array($query_id);
                        $id = $data_id['id_user'];
                        $sql = "SELECT * FROM order_list INNER JOIN user ON order_list.id_user = user.id_user where order_list.id_user=$id";
                        $query = mysqli_query($connect, $sql) or die(mysqli_error($connect));

                        $cek = mysqli_num_rows($query);

                        if ($cek == 0) {
                            echo "TIDAK ADA ORDER YANG PERNAH DILAKUKAN";
                        } else {
                            while ($data = mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td><?= $data['id_order']; ?></td>
                            <td><?= $data['nama']; ?></td>
                            <td><?= $data['nama_product']; ?></td>
                            <td><?= $data['quantity']; ?></td>
                            <td><?= $data['full_price']; ?></td>
                            <td><?= $data['jenis_pembayaran']; ?></td>
                        </tr>

                        <?php } ?>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>


</body>

</html>