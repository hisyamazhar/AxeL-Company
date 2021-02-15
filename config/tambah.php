<?php
require_once 'koneksi.php';

if (isset($_REQUEST['submit'])) {
    try {
        $name = $_REQUEST['name'];
        $harga = $_REQUEST['harga'];


        $foto = $_FILES["foto"]["name"];
        $type = $_FILES["foto"]["type"];
        $size = $_FILES["foto"]["size"];
        $temp = $_FILES["foto"]["tmp_name"];

        $path = "upload/".$foto;

        move_uploaded_file($temp, "../upload/".$foto);
        $insert = $db->prepare("INSERT INTO katalog(name, harga, foto) VALUES(:fnama, :fharga, :ffoto)");
        $insert->bindParam(':fnama', $name);
        $insert->bindParam(':fharga', $harga);
        $insert->bindParam(':ffoto', $foto);

        if($insert->execute())
        {
            $insertmsg = "Berhasil!";
            header("Location:../admin/index.php");
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>