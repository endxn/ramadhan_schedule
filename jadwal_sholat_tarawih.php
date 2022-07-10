<!Doctype html>
<html>
<head>
    <title> jadwal Sholat Tarawih </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
    include "koneksi.php";
?>

<header>
<h2>JADWAL SHOLAT TARAWIH</h2>
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
        <th>Imam</th>
        <th>Masjid</th>
    </tr>
    </thead>

    <?php
        $tampil = mysqli_query($mysqli, "select * from sholat_terawih");
        $no = 1;
        while($DATA = mysqli_fetch_array($tampil)){
    ?>
    <tbody>
    <tr>
        <th><?php echo $no++; ?></th>
        <th><?php echo $DATA['tanngal']; ?></th>
        <th><?php echo $DATA['imam']; ?></th>
        <th><?php echo $DATA['masjid']; ?></th>
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