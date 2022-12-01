<?php
include '../koneksi.php';

$id = $_GET['id_product'];
$sql_join = "SELECT * FROM product INNER JOIN jenis_product on product.id_jenis=jenis_product.id_jenis WHERE id_product='$id'";
$query_join = mysqli_query($connect, $sql_join) or die(mysqli_error($connect));
$prev = mysqli_fetch_array($query_join);

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
    <title>Gustoro Coffee Shop</title>


</head>

<body>
    <header class="bg-dark py-5">
        <nav class="nav navbar-expand-lg fixed-top navbar-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsMiddle"
                    aria-controls="#navbarsMiddle" aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse justify-content-md-cstart" id="navbarsMiddle">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <a href="input-product.php" class="nav-link" aria-current="page">Back</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="py-5" id="section1">
            <div class="py-5 gx-3 d-flex align-items-center justify-content-center">
                <div class="col-6 col-lg-5 col-xl-5 col-xxl-4">
                    <div class="order-box">
                        <form action="p-edit-product.php" method="POST" enctype="multipart/form-data">
                            <div class="text-warning text-center p-2 rounded-4">
                                <h2>EDIT PRODUCT</h2>
                                <hr class=" text-light">
                            </div>
                            <div class="p-1">
                                <div class="user-box">
                                    <label for="nama-product" class="form-label">Nama Produk</label>
                                    <input type="text" name="nama_product" id="nama-product" class="form-control"
                                        value="<?php echo $prev['nama_product']; ?>">
                                    <input type="hidden" name="id_user" value="<?php echo $id ?>" />
                                </div>
                                <div class="user-box mb-2">
                                    <label for="harga-product" class="form-label">Harga Produk</label>
                                    <input type="text" name="harga_product" id="harga-product" class="form-control"
                                        value="<?php echo $prev['harga']; ?>">
                                </div>
                                <div class="d-flex flex-row justify-content-between">

                                    <div class="user-box mb-2">
                                        <label for="jenis-product" class="form-label">Jenis Produk</label>
                                        <select name="jenis_product" class="form-control" id="jenis-product">
                                            <option value="<?php echo $prev['id_jenis']; ?>">
                                                <?php echo $prev['nama_jenis'] ?>
                                            </option>
                                            <?php
                                            $sql = "SELECT * FROM jenis_product";
                                            $query = mysqli_query($connect, $sql) or die(mysqli_error($connect));
                                            while ($jenis = mysqli_fetch_array($query)) {
                                            ?>
                                            <option value="<?php echo $jenis['id_jenis'] ?>">
                                                <?php echo $jenis['nama_jenis'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="user-box">
                                        <label for="gambar-product" class="form-label">Gambar Produk</label>
                                        <input type="file" name="gambar_product" id="gambar-product"
                                            class="form-control" value="<?php echo $prev['gambar']; ?>">
                                    </div>
                                </div>
                                <div class="user-box mb-2">
                                    <label for="jumlah-product" class="form-label">Jumlah Produk Tersedia</label>
                                    <input type="number" name="jumlah_tersedia" id="jumlah-product" class="form-control"
                                        value="<?php echo $prev['jumlah_tersedia']; ?>">
                                </div>

                                <input type="hidden" name="id_product" value="<?php echo $prev['id_product']; ?>">
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

        </section>







        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
</body>

</html>