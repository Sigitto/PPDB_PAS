<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK RUS</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>


<h4>Menu</h4>


<nav>
    <ul>
        <li><a href="form-daftar.php">Daftar Baru</a></li>
        <li><a href="list-siswa.php">Pendaftar</a></li>
        <li>Login</li>
    </ul>
</nav>

<body>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>SMK RUS</h1>
    </header>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>