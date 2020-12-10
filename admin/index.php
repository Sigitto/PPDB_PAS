<?php session_start() ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK RUS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <style>
        .button {
            color: white; 
            display:inline-block; 
            padding:10px;
            border-radius: 4px;
        }

        .grey {
            background-color: grey; 
        }

        .black {
            background-color: black;
        }

      
    </style>
</head>



<body>
    <?php if(isset($_SESSION["loggedin"])) : ?>
<h4>Menu</h4>

<nav>
    <ul>
        <li><a href="form-daftar.php">Daftar Baru</a></li>
        <li><a href="list-siswa.php">Pendaftar</a></li>
        <li><a href="logout.php">Log out</a></li>

    </ul>
</nav>

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

        <?php else:?>
            <h2>ACCESS DENIED, PLEASE LOGIN!</h2>
            <a href="login.php" class="button grey">Click Here!</a>
            <a href="../index.php" class="button black">Back To Home</a>
    <?php endif;?>
    </body>
</html>