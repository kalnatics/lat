<?php
    include ('crudUser.php');

    $username= $_GET['username'];

    $hasil = hapusUser($username);

    if($hasil>0){
         header("location:viewUser.php");
    } else{
         header("location:s.php");
    }
?>