<?php

session_start();
require_once 'koneksi.php';

if(isset($_POST['submit'])){
    try {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $sql = "INSERT INTO user(username, email, password) VALUES(:fusername, :femail, :fpassword)";
        $query = $db->prepare($sql);
        $query->bindParam('fusername', $username);
        $query->bindParam('femail', $email);
        $query->bindParam('fpassword', $password);
        $query->execute();

        header('Location:../login.php');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

?>