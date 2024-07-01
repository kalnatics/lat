<?php
    session_start();

    if (isset($_SESSION['nama']) && $_SESSION['nama'] != "") {
        header("Location: utama.php");
        exit(); 
    }

    include_once 'template/header.php';
?>

<title>Login</title>
<style>
    .container{
        width: fit-content;
        margin-top: 10%;
    }
</style>

<?php
    if(array_key_exists('error', $_GET)){
        echo"<div class='alert alert-danger alert-dismissible mb-4' role='alert'>
        <i class='bi bi-bell-slash-fill'></i></i> Username dan Password Salah! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
      </div>";
    }
?>
<div class="container border rounded p-4 w-50">
    <form action="user/loginProses.php" method="post">
        <h2 class="text-center">LOGIN</h2> <hr> <br>
        <div class="form-floating mb-3">
            <input type="text" name="username" class="form-control" id="floatingInput" placeholder="username"/>
            <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="password" class="form-control" id="floatingInput" placeholder="password"/>
            <label for="floatingInput">Password</label>
        </div> <br>
        <input type="submit" value="Login" class="btn btn-success" />
    </form>
</div>

<?php
    include_once 'template/footer.php';
?>

