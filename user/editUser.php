<?php
  session_start();
  include 'crudUser.php';
  check_login();
  include_once '../template/header.php';
  include_once '../template/navbar.php';
  $username= $_GET['username'];
  $data = getFromUsn($username);
  foreach($data as $user)
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

<title>Edit User</title>

<div class="head position-absolute top-50 start-50 translate-middle">
  <form method="post" action="prosesEdit.php">
      <h2>EDIT DATA USER</h2> <hr /> <br />
      <center>
        <table>
          <tr>
            <td>
              <div class="form-floating mb-3">
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username" value= "<?php echo $user['username'] ?>" readonly/>
                <label for="floatingInput">Username</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-floating mb-3">
                <input type="text" name="password" class="form-control" placeholder="password" value= "<?php echo $user['password'] ?>" />
                <label>Password</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
                <div class="form-floating mb-3">
                <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="Nama" value= "<?php echo $user['nama'] ?>" />
                <label for="floatingInput">Nama User</label>
                </div>
            </td>
          </tr>
          <tr>
            <td>
            </td>
          </tr>
          <tr>
            <td><br /><a href="viewUser.php" class="btn btn-danger">Kembali</a><input type="submit" value="Edit" class="btn btn-success" /></td>
          </tr>
        </table>
      </center>
  </form>
</div>

<?php
  include_once '../template/footer.php';
?>

