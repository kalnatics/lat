<?php
    require_once '../koneksiakad.php';

    function bacaMapel(){
        $sql = "select * from matapelajaran where namamapel like '%%'";
        if(isset($_GET['search'])){
            $sc= $_GET['search'];
            $sql = "select * from matapelajaran where namamapel like '%$sc%'";
        }
        // if(isset($_GET['jurusan'])){
        //     $jur= $_GET['jurusan'];
        //     $sql .= " and jurusan like '%$jur%'";
        // }
        $data = bacaSemuaMapel($sql);
        return $data;
    }

    function bacaSemuaMapel($sql){
        $data = array();
        $koneksi= koneksiAkademik();
        $hasil = mysqli_query($koneksi, $sql);

        if(mysqli_num_rows($hasil)==0){
            mysqli_close($koneksi);
            return null;
        } 
        $i=0;
        while ($baris = mysqli_fetch_assoc($hasil)) {
            $data[$i]['kodemapel']=$baris['kodemapel'];
            $data[$i]['namamapel']=$baris['namamapel'];
            $data[$i]['jmljam']=$baris['jmljam'];
            $i++;
            } 
            mysqli_close($koneksi);
            return $data;
    };

    // function bacamatapelajaranPerJurusan($jurusan){
    //     $sql = "select * from matapelajaran where jurusan= '$jurusan'";
    //     $data = bacaSemuaMapel($sql);
    //     return $data;
    // }
    function carimatapelajaranDarikodemapel($kodemapel){
        $sql = "select * from matapelajaran where kodemapel= '$kodemapel'";
        $data = bacaSemuaMapel($sql);
        return $data;
    }

    function tambahMapel($kodemapel, $namamapel, $jmljam){
        $koneksi = koneksiAkademik();
        $sql = "insert into matapelajaran (kodemapel, namamapel, jmljam) values ('$kodemapel', '$namamapel', '$jmljam')";
        $hasil=0;
        if(mysqli_query($koneksi, $sql)){
            $hasil = 1;
        }
        mysqli_close($koneksi);
        return $hasil;
    }

    function hapusMapel($kodemapel){
        $koneksi = koneksiakademik();
        $sql = "delete from matapelajaran where kodemapel = '$kodemapel'";

        If(!mysqli_query($koneksi, $sql)){
            Die('error :' .mysqli_error());
        }

        $hasil=mysqli_affected_rows($koneksi);
        mysqli_close($koneksi);
        return $hasil;
    }
    function editMapel($kodemapel, $namamapel, $jmljam){
        $koneksi = koneksiakademik();
        $sql = "UPDATE matapelajaran SET namamapel='$namamapel' , jmljam='$jmljam'
        where kodemapel = '$kodemapel'";

        if(!mysqli_query($koneksi, $sql)){
            Die('error :' .mysqli_error());
        }
        $hasil=mysqli_affected_rows($koneksi);
        mysqli_close($koneksi);
        return $hasil;
    }
    function check_login() {
        if (!isset($_SESSION['username'])) {
            header("Location: ../index.php");
            exit;
        }
    }
?>