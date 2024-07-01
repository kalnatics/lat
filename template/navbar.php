<?php
// Check if session is not started before starting it
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body rounded" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <i class="bi bi-clipboard-data d-inline-block align-text-top"></i>
            Akademik
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php
                $pages = [
                  'utama.php' => 'Home',
                  'siswa/viewSiswa.php' => 'Siswa',
                  'mp/viewMapel.php' => 'Mata Pelajaran',
                  'user/viewUser.php' => 'User'
                ];

                foreach ($pages as $file => $title) {
                    $activeClass = ($current_page == $file) ? 'active' : '';
                    $ariaCurrent = ($current_page == $file) ? 'aria-current="page"' : '';
                    echo "<li class='nav-item'>
                            <a class='nav-link $activeClass' href='/lat/$file' $ariaCurrent>$title</a>
                          </li>";
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

<br><br>
