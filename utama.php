<?php

    include_once 'template/header.php';
    include_once 'template/navbar.php';
    if (isset($_SESSION['nama']) == ""){
        header("Location: index.php");
        exit();
    }
        

?>
<style></style>
<title>Halaman Utama</title>
<?php 
    // session_start();
?>
<center>
    <h4>Selamat Datang <?php echo $_SESSION['nama'] . " <br>"; ?></h2>
    <br><a href="logout.php" class="btn btn-danger">Logout</a>
</center>
<?php
    include_once 'template/footer.php';
?>