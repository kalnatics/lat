<?php
    include 'crudUser.php';

    $username= $_POST['username'];
    $password= $_POST['password'];
    $nama= $_POST['nama'];
    
    $hasil = tambahUser($username, $password, $nama);
    if($hasil>0){
        header("location:viewUser.php");
    } else{
        header("location:gagal.php");
    }
     
?>