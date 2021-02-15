<?php

session_start();
include 'koneksi.php';

if (isset($_POST['submit'])){
    try {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM user WHERE username=:username AND password=:password";
        $query = $db->prepare($sql);
        $query->bindParam('username', $username);
        $query->bindParam('password', $password);
        $query->execute();

        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        if ($query->rowCount() > 0) {
            $_SESSION['login']='ok';
            $_SESSION['id']=$results[0]['id'];
            $_SESSION['username']=$results[0]['username'];
            echo 'ok';
            // header('Location:../admin/index.php');
        }else{
            header('Location:../login.php');
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    
}
?>