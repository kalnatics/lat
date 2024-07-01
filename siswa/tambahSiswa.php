<?php 
  session_start();
  include 'crudSiswa.php';
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

<title>Tambah Siswa</title>

<div class="head position-absolute top-50 start-50 translate-middle">
  <form method="post" action="prosesTambah.php" class="needs-validation">
    <h2>TAMBAH DATA SISWA</h2>
    <hr />
    <br />
    <center>
      <table>
        <tr>
          <td>
            <div class="form-floating mb-3">
              <input type="text" name="nis" class="form-control" id="floatingInput" placeholder="" />
              <label for="floatingInput">Nis</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="form-floating mb-3">
              <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="" />
              <label for="floatingInput">Nama</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            Jenis Kelamin
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jkel" value="Laki-laki" id="flexRadioDefault1" />
              <label class="form-check-label" for="flexRadioDefault1"> Laki-laki </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jkel" value="Perempuan" id="flexRadioDefault2" />
              <label class="form-check-label" for="flexRadioDefault2"> Perempuan </label>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            Jurusan
            <select name="jurusan" class="form-select" aria-label="Default select example">
              <option value="null" selected disabled>- Jurusan -</option>
              <option value="RPL">RPL</option>
              <option value="UPW">UPW</option>
              <option value="PH">PH</option>
              <option value="TBG">TBG</option>
              <option value="TBS">TBS</option>
            </select>
          </td>
        </tr>
        <tr>
          <td align="center">
            <br />
            <input type="submit" value="Tambah" class="btn btn-success right" /> <a href="viewSiswa.php" class="btn btn-danger">Kembali</a><input type="reset" value="Clear" class="btn btn-dark left" />
          </td>
        </tr>
      </table>
    </center>
  </form>
</div>

<?php
  include_once '../template/footer.php';
?>
