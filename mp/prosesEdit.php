<?php
    include 'crudMp.php';

    $kodemapel= $_POST['kodemapel'];
    $namamapel= $_POST['namamapel'];
    $jmljam= $_POST['jmljam'];

    $hasil = editMapel($kodemapel, $namamapel, $jmljam);

    if($hasil>0){
       header("location:viewMapel.php");
    } else{
        header("location:d.php");
    }
?>