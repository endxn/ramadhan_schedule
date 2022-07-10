<!Doctype html>
<html>
<head>
    <title> jadwal buka puasa </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
    include "koneksi.php";
?>

<header>
    <h2>JADWAL BUKA PUASA</h2>
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
            <th>Imsyak</th>
            <th>Subuh</th>
            <th>Dzuhur</th>
            <th>Ashar</th>
            <th>Maghrib</th>
            <th>Isya</th>
        </tr>
        </thead>

        <?php
            $tampil = mysqli_query($mysqli, "select * from jadwal");
            $no = 1;
            while($DATA = mysqli_fetch_array($tampil)){
        ?>
        <tbody>
        <tr>
            <th><?php echo $no++; ?></th>
            <th><?php echo $DATA['tanggal']; ?></th>
            <th><?php echo $DATA['imsyak']; ?></th>
            <th><?php echo $DATA['subuh']; ?></th>
            <th><?php echo $DATA['dzuhur']; ?></th>
            <th><?php echo $DATA['ashar']; ?></th>
            <th><?php echo $DATA['maghrib']; ?></th>
            <th><?php echo $DATA['isya']; ?></th>
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