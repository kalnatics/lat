<?php 
  session_start();
  include 'crudMp.php';
  check_login();
  include_once '../template/header.php';
  include_once '../template/navbar.php';
?>

<style>
  .head {
    width: 30%;
  }
  .right {
    float: right;
  }
  .left {
    float: left;
  }
  tr {
    padding: 1%;
  }
  table {
    width: 80%;
  }
</style>

<title>Tambah Mata Pelajaran</title>

<div class="head position-absolute top-50 start-50 translate-middle">
  <form method="post" action="prosesTambah.php" class="needs-validation" novalidate>
    <h2>TAMBAH DATA MATA PELAJARAN</h2>
    <hr />
    <br />
    <center>
      <table>
        <tr>
          <td>
            <div class="form-floating mb-3">
              <input type="text" name="kodemapel" class="form-control" id="floatingInput" placeholder="" required />
              <label for="floatingInput">Kode Mata Pelajaran</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="form-floating mb-3">
              <input type="text" name="namamapel" class="form-control" id="floatingInput" placeholder="" required />
              <label for="floatingInput">Nama Mata Pelajaran</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="form-floating mb-3">
              <input type="number" name="jmljam" class="form-control" id="floatingInput" placeholder="" required  />
              <label for="floatingInput">Jumlah Jam</label>
            </div>
          </td>
        </tr>
        <tr>
          <td align="center">
            <br />
            <input type="submit" value="Tambah" class="btn btn-success right" /> <a href="viewMapel.php" class="btn btn-danger">Kembali</a><input type="reset" value="Clear" class="btn btn-dark left" />
          </td>
        </tr>
      </table>
    </center>
  </form>
</div>

<?php
  include_once '../template/footer.php';
?>
