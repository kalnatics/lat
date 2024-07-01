<?php
    require_once '../koneksiakad.php';

    function bacaSiswa(){
        $sql = "select * from siswa where nama like '%%'";
        if(isset($_GET['search'])){
            $sc= $_GET['search'];
            $sql = "select * from siswa where nama like '%$sc%'";
        }
        if(isset($_GET['jurusan'])){
            $jur= $_GET['jurusan'];
            $sql .= " and jurusan like '%$jur%'";
        }
        $data = bacaSemuaSiswa($sql);
        return $data;
    }

    function bacaSemuaSiswa($sql){
        $data = array();
        $koneksi= koneksiAkademik();
        $hasil = mysqli_query($koneksi, $sql);

        if(mysqli_num_rows($hasil)==0){
            mysqli_close($koneksi);
            return null;
        } 
        $i=0;
        while ($baris = mysqli_fetch_assoc($hasil)) {
            $data[$i]['nis']=$baris['nis'];
            $data[$i]['nama']=$baris['nama'];
            $data[$i]['jkel']=$baris['jkel'];
            $data[$i]['jurusan']=$baris['jurusan'];
            $i++;
            } 
            mysqli_close($koneksi);
            return $data;
    };

    function bacaSiswaPerJurusan($jurusan){
        $sql = "select * from siswa where jurusan= '$jurusan'";
        $data = bacaSemuaSiswa($sql);
        return $data;
    }
    function cariSiswaDariNis($nis){
        $sql = "select * from siswa where nis= '$nis'";
        $data = bacaSemuaSiswa($sql);
        return $data;
    }

    function tambahSiswa($nis, $nama, $jkel, $jurusan){
        $koneksi = koneksiAkademik();
        $sql = "insert into siswa (nis, nama, jkel, jurusan) values ('$nis', '$nama', '$jkel', '$jurusan')";
        $hasil=0;
        if(mysqli_query($koneksi, $sql)){
            $hasil = 1;
        }
        mysqli_close($koneksi);
        return $hasil;
    }

    function hapusSiswa($nis){
        $koneksi = koneksiakademik();
        $sql = "delete from siswa where nis = '$nis'";

        If(!mysqli_query($koneksi, $sql)){
            Die('error :' .mysqli_error());
        }

        $hasil=mysqli_affected_rows($koneksi);
        mysqli_close($koneksi);
        return $hasil;
    }

    function editSiswa($nis, $nama, $jkel, $jurusan){
        $koneksi = koneksiakademik();
        $sql = "UPDATE siswa SET nama = '$nama', jkel = '$jkel', 
        jurusan = '$jurusan' where nis = '$nis'";

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