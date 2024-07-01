<?php
    include 'crudsiswa.php';
?>
<style>
  #cari{
    margin: 5%;
    float: left;
    width:max-content;
  }
  .btn{
    float: right;
  }
</style>
<title>Cari Siswa</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<div id="cari">
  

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nis = $_POST['nis'];
    $data = cariSiswaDariNis($nis);

    
    if($data==null){echo "record tidak ditemukan";} else{
      echo"<table border='1' class='table table-striped table-hover'>
      <tr align='center'>
          <th scope='col'>NIS</th>
          <th scope='col'>Nama</th>
          <th scope='col'>Jenis Kelamin</th>
          <th scope='col'>Jurusan</th>
      </tr>";
      foreach($data as $siswa){
        $nis = $siswa['nis'];
        $nama = $siswa['nama'];
        $jkel = $siswa['jkel'];
        $jurusan = $siswa['jurusan'];

        echo"<tr align='center'>
            <td style='padding: 10px;'>$nis</td>
            <td style='padding: 10px;'>$nama</td>
            <td style='padding: 10px;'>$jkel</td>
            <td style='padding: 10px;'>$jurusan</td>
        </tr>";
    }}
  }
?>

</div>


