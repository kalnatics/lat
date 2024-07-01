<?php
    include_once '../template/header.php';
    include_once '../template/navbar.php';
    // session_start();
    include 'crudsiswa.php';
    check_login();
    
?>

<style>
  div{
    width: 100%;
  }
  th{
    padding: 3%;
  }
  td{
    padding: 1%;
  }
  table{
    width: 100%
  }
  #cari{
    margin: 5%;
    float: left;
    width: 1000px;
  }
  #btn, .logout, .right{
    float: right;
  }
</style>
    
<title>Daftar Siswa</title>
<div>
  <h2 class="text-center">DAFTAR SISWA</h2> <hr>
  <form method="get" action="viewSiswa.php">
    <table>
      <tr>
        <td>
          <?php echo"<p>User: ". $_SESSION['nama'] . " <br></p>";?>
        </td>
        <td></td>
        <td></td>
        <td>
          <a href="../logout.php" class="btn logout btn-danger">Logout</a>
        </td>
      </tr>
      <tr>
        <td>
          <select name="jurusan" class="form-select">
            <option value="">All Jurusan</option>
            <?php
            $jurusan = array("RPL", "UPW", "PH", "TBG", "TBS");
            foreach ($jurusan as $j) {
              echo "<option value='$j'>$j</option>";
            }
            ?>
          </select>
        </td>
        <td>
          <input type="text" class="form-control" name="search" placeholder="search...">  
        </td>
        <td>
          <input class="btn btn-dark" type="submit" value="Search"/>
        </td>
        <td>
          <a href="tambahSiswa.php" class="btn btn-outline-primary right">Tambah Data</a>
        </td>
      </tr>
    </table>
  </form>

  <?php
      $data = bacaSiswa();
  ?>

  <table class="table table-striped table-hover">
    <tr align="center">
      <th scope="col">NIS</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Jurusan</th>
      <th scope="col">
        AKSI <br />
      </th>
    </tr>

    <?php
      foreach($data as $siswa){
        $nis = $siswa['nis'];
        $nama = $siswa['nama'];
        $jkel = $siswa['jkel'];
        $jurusan = $siswa['jurusan'];

        echo"<tr align='center'>
            <td>$nis</td>
            <td>$nama</td>
            <td>$jkel</td>
            <td>$jurusan</td>
            <td><a href='editSiswa.php?nis=$siswa[nis]' class='btn btn-warning'>Edit</a> <a href='hapusSiswa.php?nis=$siswa[nis]' class='btn btn-danger'>Hapus</a></td>
        </tr>";
      }
    ?>
  </table>
</div>

<?php
  include_once '../template/footer.php';
?>
