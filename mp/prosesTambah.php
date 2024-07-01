<?php
    include 'crudMp.php';

    $kodemapel= $_POST['kodemapel'];
    $namamapel= $_POST['namamapel'];
    $jmljam= $_POST['jmljam'];
    
    $hasil = tambahMapel($kodemapel, $namamapel, $jmljam);
    if($hasil>0){
        header("location:viewMapel.php");
    } else{
        header("location:gagal.php");
    }
     
?>