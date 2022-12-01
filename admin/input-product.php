<?php
include '../koneksi.php';
$sql = "SELECT * FROM jenis_product";
$query = mysqli_query($connect, $sql) or die(mysqli_error($connect));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Gustoro Coffee Shop</title>

    <style>
    .product img {
        width: 300px;
    }

    .product .description {
        margin-left: 20px;
    }

    .product {
        padding: 10px;
        display: flex;
    }

    form .input {
        padding: 10px;
    }

    ul {
        list-style-type: none;
    }
    </style>

</head>

<body>
    <nav class="nav nav-bg navbar-expand-lg fixed-top navbar-dark p-3">
        <div class="container-fluid">
            <a href="../logout.php" class="btn-logout position-absolute"> <button class="btn-danger">Logout</button></a>
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsMiddle">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="homepage-admin.php" class="nav-link" aria-current="page">HOME</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="bg-dark position-relative d-flex align-items-center justify-content-center" id="section1">
        <div class="container px-2">
            <div class="row gx-3 d-flex align-items-start justify-content-center">
                <div class=" d-flex align-items-center flex-column justify-content-center">
                    <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_fpdvsz3i.json"
                        background="transparent" speed="1.5" style="width: 300px; height: 300px;" loop autoplay>
                    </lottie-player>
                    <div
                        class="text-warning text-center text-xl-center d-flex flex-column align-items-center justify-content-center">
                        <h1 class="display-2 fw-bolder mb-1 ">EDIT PRODUCT</h1>
                        <h5 class="lead fw-normal mb-3">Selamat Bekerja para Admin</h5>
                    </div>
                </div>
                <div class="col-6 col-xl-4 col-xxl-5 text-center">
                </div>
            </div>
        </div>
        </div>
    </section>


    <section class="section2">
        <div class="row">
            <div class="col-3 container-list">
                <div class="mx-1 category">
                    <h2 class="mb-2">Categories</h2>
                    <div data-toggle="modal" data-target="#tambah-kategori" class="p-3">
                        <a href="#" class="btn btn-dark">Tambah Kategori</a>
                    </div>
                    <div class="edit-category">
                        <ul>
                            <?php
                            while ($jenis = mysqli_fetch_array($query)) {
                            ?>
                            <li>
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="#<?php echo $jenis['id_jenis']; ?>"><?php echo $jenis['nama_jenis'] ?></a>
                                    <a href="delete-category.php?id_jenis=<?php echo $jenis['id_jenis']; ?>"
                                        style="color:black; margin-left:30px;">x</a>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9 container-product bg-light">
                <div class="mb-5 mt-5 text-center">
                    <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#tambah-product">Tambah
                        Product</a>
                </div>

                <div>
                    <?php
                    if (isset($_GET['message'])) {
                        if ($_GET['message'] == "gagal-delete") {
                            echo "Prroses hapus gagal";
                        } else if ($_GET['message'] == "berhasil-delete") {
                            echo "Proses hapus berhasil";
                        }
                    }
                    ?>
                </div>
                <ul>
                    <?php
                    $sql_product = "SELECT * FROM jenis_product";
                    $query_product = mysqli_query($connect, $sql_product) or die(mysqli_error($connect));

                    while ($list_product = mysqli_fetch_array($query_product)) {
                    ?>
                    <h2><?php echo $list_product['nama_jenis'] ?></h2>
                    <li>
                        <?php
                            $id_jenis = $list_product['id_jenis'];
                            $sql_product2 = "SELECT * FROM product WHERE id_jenis= $id_jenis";
                            $query_product2 = mysqli_query($connect, $sql_product2) or die(mysqli_error($connect));
                            while ($list =  mysqli_fetch_array($query_product2)) {
                            ?>

                        <div class="product" id="<?php echo $list['id_jenis']; ?>">
                            <div class="container-image">
                                <img src="gambar-product/<?php echo $list['gambar']; ?>">
                            </div>
                            <div class="description d-flex flex-column">
                                <h3> Nama : <?php echo $list['nama_product']; ?></h3>
                                <h5> Harga : <?php echo $list['harga']; ?></h5>
                                <h5> Harga : <?php echo $list['id_jenis']; ?></h5>
                                <h5> Jumlah :<?php echo $list['jumlah_tersedia']; ?></h5>
                                <h5> <?php echo $list['gambar']; ?></h5>
                                <div>
                                    <div class="d-inline">
                                        <a href="edit-product.php?id_product=<?php echo $list['id_product']; ?>"
                                            class="btn btn-info">Edit
                                            Product</a>

                                        <a href="delete-product.php?id_product=<?php echo $list['id_product']; ?>"
                                            class="btn btn-warning">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php } ?>
                    <?php } ?>

                </ul>
            </div>
        </div>
    </section>
    <!--MODAL UNTUK PRODUCT-->
    <div id="tambah-product" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Produk</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="p-input-product.php" method="POST" enctype="multipart/form-data">
                        <div class="">
                            <div class="">
                                <div class="input">
                                    <label for="nama-product" class="form-label">Nama Produk</label>
                                    <input type="text" name="nama_product" id="nama-product" class="form-control">
                                </div>
                                <div class="input">
                                    <label for="harga-product" class="form-label">Harga Produk</label>
                                    <input type="text" name="harga_product" id="harga-product" class="form-control">
                                </div>
                                <div class="input">
                                    <label for="jenis-product" class="form-label">Jenis Produk</label>
                                    <select name="jenis_product" class="form-control" id="jenis-product">
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
                                <div class="input">
                                    <label for="gambar-product" class="form-label">Gambar Produk</label>
                                    <input type="file" name="gambar_product" id="gambar-product" class="form-control">
                                </div>
                                <div class="input">
                                    <label for="jumlah-product" class="form-label">Jumlah Produk Tersedia</label>
                                    <input type="number" name="jumlah_tersedia" id="jumlah-product"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="input">
                                <input type="submit" class="btn btn-warning" value="Tambah">
                                <input type="button" class="btn btn-warning" data-dismiss="modal" value="Close">
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal daftar -->

    <!-- Modal login -->
    <div id="tambah-kategori" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Kategori Menu</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="p-tambah-jenis.php" method="POST">
                        <div class="input">
                            <label for="nama-jenis" class="form-label">Jenis Product</label>
                            <input type="text" class="form-control" name="nama-jenis" id="nama-jenis">
                        </div>
                        <div class="input">
                            <input type="submit" class="btn btn-warning">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>