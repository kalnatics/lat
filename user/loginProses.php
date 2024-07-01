<?php 
    session_start();
    include_once "crudUser.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(autentikasi($username, $password)){
        $_SESSION['username'] = $username;
        $dataUser=array();
        $dataUser=cariDariUsername($username);
        $_SESSION['nama'] = $dataUser['nama'];
        $_SESSION['password'] = $dataUser['password'];
        header("location:../utama.php");
    }else{
        header("location:../index.php?error");
    }

?>