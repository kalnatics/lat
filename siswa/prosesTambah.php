<?php
    include 'crudSiswa.php';

    $nis= $_POST['nis'];
    $nama= $_POST['nama'];
    $jkel= $_POST['jkel'];
    $jurusan= $_POST['jurusan'];

    $hasil = tambahSiswa($nis, $nama, $jkel, $jurusan);

    if($hasil>0){
       header("location:viewSiswa.php");
    } else{
        header("location:d.php");
    }
?>