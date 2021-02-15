<?php

include '../config/koneksi.php';

$sql = $db->prepare("SELECT * FROM katalog WHERE id = :id");
$sql->bindParam(":id", $_GET['id']);
$sql->execute();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AxeL Empire</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <a class="navbar-brand" href="#">
                <img src="../images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Data Katalog <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pesanan.php">Data Pesanan</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title justify-between">Tambah Katalog</h5>

                <form class="mt-4" action="../config/update.php" method="POST" enctype="multipart/form-data">
                    <?php
                        while ($data = $sql->fetch()){
                    ?>
                    <div class="form-group">
                        <label for="name">Nama Item</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?=$data['name']?>">
                        <input type="hidden" class="form-control" id="id" name="id" value="<?=$data['id']?>">

                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Item</label>
                        <input type="number" class="form-control" id="harga" name="harga" value="<?=$data['harga']?>">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                    </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>