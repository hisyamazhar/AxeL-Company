<?php
require_once "koneksi.php";

try {

    $sql = "DELETE FROM katalog WHERE id = '$_GET[id]'";
    $db->exec($sql);
    header('Location:../admin/index.php');
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>