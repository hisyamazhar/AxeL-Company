<?php
require_once 'koneksi.php';

try {
    $sql = "DELETE FROM pesanan WHERE id = '$_GET[id]'";
    $db->exec($sql);
    header('Location:../admin/pesanan.php');
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>