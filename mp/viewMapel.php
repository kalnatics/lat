<?php
    include_once '../template/header.php';
    include_once '../template/navbar.php';
    // session_start();
    include 'crudMp.php';
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
  .right{
    float: right;
  }
  #cari{
    margin: 5%;
    float: left;
    width: 1000px;
  }
  #btn, .logout{
    float: right;
  }
</style>
    
<title>Daftar Mata Pelajaran</title>
<div>
  <h2 class="text-center">DAFTAR MATA PELAJARAN</h2> <hr>
  <form method="get" action="viewMapel.php">
    <table>
      <tr>
        <td><?php echo"<p>User: ". $_SESSION['nama'] . " <br></p>"; ?></td>
        <td><a href="../logout.php" class="btn logout btn-danger">Logout</a></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <a href="tambahMapel.php" class="btn btn-outline-primary right">Tambah Data</a>
        </td>
      </tr>
    </table>
  </form>

  <?php
      $data = bacaMapel();
  ?>

  <table class="table table-striped table-hover">
    <tr align="center">
      <th scope="col">Kode Mata Pelajaran</th>
      <th scope="col">Nama Mata Pelajaran</th>
      <th scope="col">Jumlah Jam</th>
      <th scope="col">
        AKSI <br />
      </th>
    </tr>

    <?php
      foreach($data as $mapel){
        $kodemapel = $mapel['kodemapel'];
        $namamapel = $mapel['namamapel'];
        $jmljam = $mapel['jmljam'];

        echo"<tr align='center'>
            <td>$kodemapel</td>
            <td>$namamapel</td>
            <td>$jmljam</td>
            <td><a href='editMapel.php?kodemapel=$mapel[kodemapel]' class='btn btn-warning'>Edit</a> <a href='hapusMapel.php?kodemapel=$mapel[kodemapel]' class='btn btn-danger'>Hapus</a></td>
        </tr>";
      }
    ?>
  </table>
</div>

<?php
  include_once '../template/footer.php';
?>
