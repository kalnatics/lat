<?php
  session_start();
  include 'crudMp.php';
  check_login();
  include_once '../template/header.php';
  include_once '../template/navbar.php';
  $kodemapel= $_GET['kodemapel'];
  $data = carimatapelajaranDarikodemapel($kodemapel);
  foreach($data as $mapel)
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

<title>Edit Mata Pelajaran</title>

<div class="head position-absolute top-50 start-50 translate-middle">
  <form method="post" action="prosesEdit.php">
      <h2>EDIT DATA MATA PELAJARAN</h2> <hr /> <br />
      <center>
        <table>
          <tr>
            <td>
              <div class="form-floating mb-3">
                <input type="text" name="kodemapel" class="form-control" id="floatingInput" placeholder="kode mapel" value= "<?php echo $mapel['kodemapel'] ?>" readonly/>
                <label for="floatingInput">Kode Mata Pelajaran</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-floating mb-3">
                <input type="text" name="namamapel" class="form-control" placeholder="namamapel" value= "<?php echo $mapel['namamapel'] ?>" />
                <label>Nama Mata Pelajaran</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
                <div class="form-floating mb-3">
                <input type="number" name="jmljam" class="form-control" id="floatingInput" placeholder="" value= "<?php echo $mapel['jmljam'] ?>" />
                <label for="floatingInput">Jumlah Jam</label>
                </div>
            </td>
          </tr>
          <tr>
            <td>
            </td>
          </tr>
          <tr>
            <td><br /><a href="viewMapel.php" class="btn btn-danger">Kembali</a><input type="submit" value="Edit" class="btn btn-success" /></td>
          </tr>
        </table>
      </center>
  </form>
</div>

<?php
  include_once '../template/footer.php';
?>

