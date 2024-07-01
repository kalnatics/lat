<?php
  session_start();
  include 'crudSiswa.php';
  check_login();
  include_once '../template/header.php';
  include_once '../template/navbar.php';
  $nis= $_GET['nis'];
  $data = cariSiswaDariNis($nis);
  foreach($data as $siswa)
?>


<style>
  .head {
    width: 30%;
  }
  tr {
    padding: 1%;
  }
  .btn-success {
    float: right;
  }
  table {
    width: 80%;
  }
</style>

<title>Edit Siswa</title>

<div class="head position-absolute top-50 start-50 translate-middle">
  <form method="post" action="prosesEdit.php">
      <h2>EDIT DATA SISWA</h2> <hr /> <br />
      <center>
        <table>
          <tr>
            <td>
              <div class="form-floating mb-3">
                <input type="text" name= "nis" class="form-control" id="floatingInput" placeholder="" value= "<?php echo $siswa['nis']; ?>" readonly />
                <label for="floatingInput">Nis</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-floating mb-3">
                <input type="text" name= "nama" class="form-control" id="floatingInput" placeholder="" value= "<?php echo $siswa['nama']; ?>" />
                <label for="floatingInput">Nama</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              Jenis Kelamin
              <div class="form-check">
                <input class="form-check-input" type="radio" name= "jkel" value="Laki-laki" id="flexRadioDefault1" <?php if ($siswa['jkel']== "Laki-laki"){ echo " checked"; } ?>/>
                <label class="form-check-label" for="flexRadioDefault1"> Laki-laki </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name= "jkel" value="Perempuan" id="flexRadioDefault2" <?php if ($siswa['jkel']== "Perempuan"){ echo " checked"; } ?> />
                <label class="form-check-label" for="flexRadioDefault2"> Perempuan </label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              Jurusan
              <select name= "jurusan" class="form-select" aria-label="Default select example">
              <option value="null" disabled>- Jurusan -</option>
              <?php
                $jurusan = array("RPL", "UPW", "PH", "TBG", "TBS");
                foreach ($jurusan as $j) {
                  if ($siswa['jurusan'] == $j) {
                  echo "<option value= '$j' selected>$j</option>";
                  } else {
                  echo "<option value= '$j'>$j</option>";
                  }
                }
              ?>
            </select>
            </td>
          </tr>
          <tr>
            <td><br /><a href="viewSiswa.php" class="btn btn-danger">Kembali</a><input type="submit" value="Edit" class="btn btn-success" /></td>
          </tr>
        </table>
      </center>
  </form>
</div>

<?php
  include_once '../template/footer.php';
?>

