<?php

include 'config/koneksi.php';

try {
    $sql = 'SELECT * FROM katalog';
    $q = $db->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
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
                <h4>Updated Catalog</h1>
            </div>
        </div>
        <div class="row">
            <?php
                while ($data = $q->fetch()){
            ?>
            <div class="col-lg-3 text-center">
                <img src="upload/<?=$data['foto']?>" class="img-fluid mb-4" alt="" srcset="">
                <p><?=$data['name']?></p>
                <p class="text-danger">Rp.<?=$data['harga']?></p>
                <a href="pesan.php?id=<?=$data['id']?>" class="btn btn-primary">Order Now</a>
            </div>
            <?php } ?>
        </div>
        <footer class="footer py-3 mt-4">
            Copyright 2020 - AxeL Empire - M. Hisyam Azhar R
    </div>
    </footer>
    </div>

</body>

</html>