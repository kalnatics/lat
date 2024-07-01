<?php 
  session_start();
  include 'crudUser.php';
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

<title>Tambah User</title>

<div class="head position-absolute top-50 start-50 translate-middle">
  <form method="post" action="prosesTambah.php" class="needs-validation" novalidate>
    <h2>TAMBAH DATA USER</h2>
    <hr />
    <br />
    <center>
      <table>
        <tr>
          <td>
            <div class="form-floating mb-3">
              <input type="text" name="username" class="form-control" id="floatingInput" placeholder="" required />
              <label for="floatingInput">Username</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="form-floating mb-3">
              <input type="text" name="password" class="form-control" id="floatingInput" placeholder="" required />
              <label for="floatingInput">Password</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="form-floating mb-3">
              <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="" required  />
              <label for="floatingInput">Nama User</label>
            </div>
          </td>
        </tr>
        <tr>
          <td align="center">
            <br />
            <input type="submit" value="Tambah" class="btn btn-success right" /> <a href="viewUser.php" class="btn btn-danger">Kembali</a><input type="reset" value="Clear" class="btn btn-dark left" />
          </td>
        </tr>
      </table>
    </center>
  </form>
</div>

<?php
  include_once '../template/footer.php';
?>
