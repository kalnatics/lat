<?php
    include_once '../template/header.php';
    include_once '../template/navbar.php';
    // session_start();
    include_once 'crudUser.php';
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
    
<title>Daftar User</title>
<div>
  <h2 class="text-center">DAFTAR USER</h2> <hr>
  <form method="get" action="viewUser.php">
    <table>
      <tr>
        <td><?php echo"<p>User: ". $_SESSION['nama'] . " <br></p>";?></td>
        <td><a href="../logout.php" class="btn logout btn-danger">Logout</a></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <a href="tambahUser.php" class="btn btn-outline-primary right">Tambah Data</a>
        </td>
      </tr>
    </table>
  </form>

  <?php
      $data = bacaUser();
  ?>

  <table class="table table-striped table-hover">
    <tr align="center">
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Nama User</th>
      <th scope="col">
        AKSI <br />
      </th>
    </tr>

    <?php
      foreach($data as $user){
        $username = $user['username'];
        $password = $user['password'];
        $nama = $user['nama'];

        echo"<tr align='center'>
            <td>$username</td>
            <td>$password</td>
            <td>$nama</td>
            <td><a href='editUser.php?username=$user[username]' class='btn btn-warning'>Edit</a> <a href='hapusUser.php?username=$user[username]' class='btn btn-danger'>Hapus</a></td>
        </tr>";
      }
    ?>
  </table>
</div>

<?php
  include_once '../template/footer.php';
?>
