<?php

include '../config/koneksi.php';

try {
    $sql = 'SELECT katalog.name, katalog.id, pesanan.id, pesanan.id_item, pesanan.nama, pesanan.alamat, pesanan.size, pesanan.total FROM katalog LEFT JOIN pesanan ON katalog.id = pesanan.id_item WHERE pesanan.id_item = katalog.id';
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
                <h5 class="card-title justify-between">Data Katalog</h5>
                <a href="tambah.php" class="btn btn-primary text-right">Tambah Data</a>
                <table class="table mt-4">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Pemesan</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Item</th>
                            <th scope="col">Size</th>
                            <th scope="col">Total</th>
                            <th scope="col">Aksi</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while ($data = $q->fetch()){
                        ?>
                        <tr>
                            <td><?=$data['id']?></td>
                            <td><?=$data['nama']?></td>
                            <td><?=$data['alamat']?></td>
                            <td><?=$data['name']?></td>
                            <td><?=$data['size']?></td>
                            <td><?=$data['total']?></td>
                            <td>
                                <a href="../config/hapus-pesanan.php?id=<?=$data['id'];?>"
                                    onclick="return confirm('Yakin Menghapus Data?')"
                                    class="btn btn-sm btn-danger">Hapus
                                    Data</a>

                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>