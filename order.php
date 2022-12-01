<?php
include 'koneksi.php';
include 'sessions.php';

$id_product = $_GET['id']

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
            <section class="py-5" id="section1">
                <div class=" gx-3 d-flex align-items-center justify-content-center">
                    <div class="col-6 col-lg-5 col-xl-5 col-xxl-4">
                        <div class="order-box">
                            <form action="p-order.php" method="POST">
                                <div class="text-warning text-center p-2 rounded-4">
                                    <h2>Order</h2>
                                    <hr class=" text-light">
                                </div>
                                <div class="p-1">
                                    <?php
                                    $id_product = $_GET['id'];
                                    $sql_product = "SELECT * FROM product WHERE id_product = '$id_product'";
                                    $query_product = mysqli_query($connect, $sql_product);
                                    $data_product = mysqli_fetch_array($query_product);

                                    $username = $_SESSION['username'];
                                    $sql_id = "SELECT * FROM user WHERE username = '$username'";
                                    $query = mysqli_query($connect, $sql_id);
                                    $data = mysqli_fetch_array($query);

                                    $id = $data['id_user'];
                                    $nama = $data['nama'];


                                    ?>
                                    <div class="user-box">
                                        <label for="nama" class="form-label">Atas Nama</label>
                                        <input type="text" name="nama" class="form-control" id=""
                                            value="<?php echo $nama; ?>" readonly>
                                        <input type="hidden" name="id_user" value="<?php echo $id ?>" />
                                    </div>
                                    <div class="user-box mb-2">
                                        <label for="nama-product" class="form-label">Nama Product</label>
                                        <input type="text" name="nama_product" class="form-control" id="nama-product"
                                            value="<?php echo $data_product['nama_product']; ?>" readonly>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between">

                                        <div class="user-box mb-2">
                                            <label for="alamat" class="form-label">Alamat Pengiriman</label>
                                            <input type="text-area" class="form-control" id="alamat" name="alamat">
                                        </div>
                                        <div class="user-box">
                                            <label for="quantity" class="form-label">Quantity</label>
                                            <input type="number" id="quantity" name="quantity" class="form-control">
                                        </div>
                                    </div>
                                    <div class="user-box mb-2">
                                        <label for="jenis_pembayaran" class="form-label">Jenis Pembayaran</label>
                                        <select name="jenis_pembayaran" id="jenis_pembayaran">
                                            <option value="cod">COD(Cash On Delivery)</option>
                                            <option value="e-wallet">E-Wallet</option>
                                        </select>
                                    </div>

                                    <input type="hidden" name="price" value="<?php echo $data_product['harga']; ?>">
                                    <div class="input">
                                        <input type="submit" class="btn btn-warning" value="Order">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-lg-5 pr-4">

                    </div>
                </div>
        </div>
        </section>

</body>

</html>