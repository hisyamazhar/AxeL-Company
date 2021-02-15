<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
    $id_item = $_POST['id_item'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $size = $_POST['size'];
    $total = $_POST['total'];

    try {
        $sql = "INSERT INTO pesanan(id_item, nama, alamat, size, total) VALUES(:fid_item, :fnama, :falamat, :fsize, :ftotal)";
        $query = $db->prepare($sql);
        $query->bindParam('fid_item', $id_item);
        $query->bindParam('fnama', $nama);
        $query->bindParam('falamat', $alamat);
        $query->bindParam('fsize', $size);
        $query->bindParam('ftotal', $total);
        $query->execute();

        header('Location:../index.php');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

?>