<?php
    require_once '../koneksiakad.php';
    function cariDariUsername($username) {
        $koneksi = koneksiakademik();
        $sql = "select * from user where username='$username'";
        $hasil = mysqli_query($koneksi, $sql);
        $total = mysqli_num_rows($hasil);

        if(mysqli_num_rows($hasil)>0){
            $baris = mysqli_fetch_assoc($hasil);
            $data['username']=$baris['username'];
            $data['password']=$baris['password'];
            $data['nama']=$baris['nama'];
            mysqli_close($koneksi);
            return $data;
        } else{
            mysqli_close($koneksi);
            return null;
        }
    }
    function getFromUsn($username){
        $sql = "select * from user where username= '$username'";
        $data = bacaSemuaUser($sql);
        return $data;
    }
    function bacaUser(){
        $sql = "select * from user where username like '%%'";
        if(isset($_GET['search'])){
            $sc= $_GET['search'];
            $sql = "select * from user where username like '%$sc%'";
        }
        // if(isset($_GET['jurusan'])){
        //     $jur= $_GET['jurusan'];
        //     $sql .= " and jurusan like '%$jur%'";
        // }
        $data = bacaSemuaUser($sql);
        return $data;
    }
    function bacaSemuaUser($sql){
        $data = array();
        $koneksi= koneksiAkademik();
        $hasil = mysqli_query($koneksi, $sql);

        if(mysqli_num_rows($hasil)==0){
            mysqli_close($koneksi);
            return null;
        } 
        $i=0;
        while ($baris = mysqli_fetch_assoc($hasil)) {
            $data[$i]['username']=$baris['username'];
            $data[$i]['password']=$baris['password'];
            $data[$i]['nama']=$baris['nama'];
            $i++;
            } 
            mysqli_close($koneksi);
            return $data;
    };

    function check_login() {
        if (!isset($_SESSION['username'])) {
            header("Location:index.php");
            exit;}
    }
    function autentikasi($username, $password){
        $dataUser = array();
        $passmd5 = md5($password);
        $dataUser = cariDariUsername($username);

        if($dataUser!=null){
            if($passmd5==$dataUser['password']){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    function tambahUser($username, $password, $nama ){
        $koneksi = koneksiAkademik();
        $sql = "INSERT INTO user (username, password, nama) 
        VALUES ('$username', MD5('$password'), '$nama')";
        $hasil=0;
        if(mysqli_query($koneksi, $sql)){
            $hasil = 1;
        }
        mysqli_close($koneksi);
        return $hasil;
    }

    function hapusUser($username){
        $koneksi = koneksiakademik();
        $sql = "delete from user where username = '$username'";

        If(!mysqli_query($koneksi, $sql)){
            Die('error :' .mysqli_error());
        }
        $hasil=mysqli_affected_rows($koneksi);
        mysqli_close($koneksi);
        return $hasil;
    }

    function editUser($username, $password, $nama ){
        $koneksi = koneksiakademik();
        $sql = "UPDATE user 
        SET password = MD5('$password'), nama = '$nama' 
        WHERE username = '$username'";

        if(!mysqli_query($koneksi, $sql)){
            Die('error :' .mysqli_error());
        }
        $hasil=mysqli_affected_rows($koneksi);
        mysqli_close($koneksi);
        return $hasil;
    }
?>