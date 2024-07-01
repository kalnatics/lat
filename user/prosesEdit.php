<?php
    include 'crudUser.php';

    $username= $_POST['username'];
    $password= $_POST['password'];
    $nama= $_POST['nama'];

    $hasil = edituser($username, $password, $nama);

    if($hasil>0){
       header("location:viewUser.php");
    } else{
        header("location:d.php");
    }
?>