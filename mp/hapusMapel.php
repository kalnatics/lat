<?php
    include ('crudMp.php');

    $kodemapel= $_GET['kodemapel'];

    $hasil = hapusMapel($kodemapel);

    if($hasil>0){
         header("location:viewMapel.php");
    } else{
         header("location:s.php");
    }
?>