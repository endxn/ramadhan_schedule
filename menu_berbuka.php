<!Doctype html>
<html>
<head>
    <title> MENU BERBUKA </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
    include "koneksi.php";
?>
<header>
    <h2>JADWAL SHOLAT</h2>
</header>
<nav>
    <a href="jadwal_buka_puasa.php"> jadwal buka puasa </a>
    <a href="jadwal_sholat_tarawih.php"> jadwal sholat tarawih </a>
    <a href="menu_berbuka.php"> menu berbuka </a>
</nav>

<main>
    <table cellpadding="15" cellspacing="5">
        <thead>
        <tr>
            <th>Nomor</th>
            <th>Tanggal</th>
            <th>MENU TAKJIL</th>
            <th>MENU BUKA</th>
            <th>TEMPAT</th>
        </tr>
        </thead>

        <?php
            $tampil = mysqli_query($mysqli, "select * from menu_berbuka");
            $no = 1;
            while($DATA = mysqli_fetch_array($tampil)){
        ?>
        <tbody>
        <tr>
            <th><?php echo $no++; ?></th>
            <th><?php echo $DATA['tanggal']; ?></th>
            <th><?php echo $DATA['menu_takjil']; ?></th>
            <th><?php echo $DATA['menu_berbuka']; ?></th>
            <th><?php echo $DATA['tempat']; ?></th>
        </tr>
        </tbody>
        <?php
            }
        ?>
    </table>
</main>

<footer>
    
</footer>
</body>
</html>