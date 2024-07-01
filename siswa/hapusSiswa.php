<?php
    include ('crudsiswa.php');

    $nis= $_GET['nis'];

    $hasil = hapusSiswa($nis);

    if($hasil>0){
         header("location:viewSiswa.php");
    } else{
         header("location:s.php");
    }
?>