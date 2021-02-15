<?php

include 'config/koneksi.php';

try {
    $sql = "SELECT * FROM katalog WHERE id = '$_GET[id]'";
    $q = $db->query($sql);
    $b = $db->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    $b->setFetchMode(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Tidak bisa membuka database $db_name: ".$e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AxeL Empire</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</head>

<body>
    <nav class="navbar flex transparent navbar-expand">
        <div class="container transparent">
            <ul class="nav navbar-nav pull-sm-left">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.php">Shop</a>
                </li>
            </ul>
            <ul class="nav navbar-nav flex navbar-logo mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php"><img src="images/logo.png" class="img-fluid" alt=""></a>
                </li>
            </ul>
            <ul class="nav navbar-nav pull-sm-right">
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Chapter</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="row mb-4">
            <div class="col-lg-12">
                <h4>Pesanan Saya</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="upload/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <?php
                            while ($data = $q->fetch()) {
                        ?>
                        <h5 class="card-title"><?=$data['name']?></h5>
                        <p class="text-danger">Rp.<?=$data['harga']?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h3>Detail Pengiriman</h3>
                        </div>
                        <form action="config/pesan.php" method="POST">
                            <div class="form-group">
                                <?php
                                while ($r = $b->fetch()) {
                                ?>
                                <input type="hidden" class="form-control" name="id_item" value="<?=$r['id']?>">
                                <input type="hidden" class="form-control" name="total" value="<?=$r['harga']?>">

                                <?php
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat Lengkap</label>
                                <textarea name="alamat" id="alamat" cols="3" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="size">Size</label>
                                <select name="size" id="size" class="form-control">
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary">Checkout</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer py-3">
        Copyright 2020 - AxeL Empire - M. Hisyam Azhar R
        </div>
    </footer>
    </div>

</body>

</html>