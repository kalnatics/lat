<?php
    include 'crudsiswa.php';
?>
    <h2>Daftar Siswa</h2>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Pilih Jurusan: 
    <select name="pilihan" class="form-select" aria-label="Default select example">
        <option value="null" selected>- Jurusan -</option>
        <option value="RPL">RPL</option>
        <option value="UPW">UPW</option>
        <option value="PH">PH</option>
        <option value="TBG">TBG</option>
        <option value="TBS">TB</option>
    </select>
    <input type="submit">
    </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pilihan = $_POST['pilihan'];
        $data = bacaSiswaPerJurusan($pilihan);
    
    if($data==null){?> <script> alert("record tidak ditemukan!"); </script> <?php } else{
        echo"<table border='1'>
    <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Jurusan</th>
    </tr>";
    
    foreach($data as $siswa){
        $nis = $siswa['nis'];
        $nama = $siswa['nama'];
        $jkel = $siswa['jkel'];
        $jurusan = $siswa['jurusan'];

        echo"<tr>
            <td style='padding: 10px;'>$nis</td>
            <td style='padding: 10px;'>$nama</td>
            <td style='padding: 10px;'>$jkel</td>
            <td style='padding: 10px;'>$jurusan</td>
        </tr>";
    }
    }
    }
?>

    