<?php
require_once 'koneksi.php';

try {
    $name = $_POST['name'];
    $harga = $_POST['harga'];

    $sql = $db->prepare("UPDATE katalog SET 
    name='$name',
    harga='$harga'
    WHERE id = :id ");

    $sql->bindParam(":id", $_POST['id']);
    $sql->execute();
    header('Location:../admin/index.php');
    // echo $sql->rowCount()."Record Updated";
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>