<?php 
// koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "dumbwaysid");

// ambil data dari tabel
$result = mysqli_query($koneksi, "SELECT * FROM book_tb");
$result2 = mysqli_query($koneksi, "SELECT * FROM category_tb");
$result3 = mysqli_query($koneksi, "SELECT * FROM writer_tb");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head>
<body>
    <h1>Data Buku</h1>
    <a href="tambah.php">Tambah Data Buku</a>
    <br>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
    
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>ID Jenis Buku</th>
        <th>ID Penulis</th>
        <th>Tahun Terbit</th>
        <th>Gambar</th>
    </tr>
    <?php $i=1 ?>
    <?php while($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $row["name"]; ?></td>
        <td><?= $row["category_id"]; ?></td>
        <td><?= $row["writer_id"]; ?></td>
        <td><?= $row["publication_year"]; ?></td>
        <td><img src="img/<?= $row["img"] ?>" width="50"></td>
    <tr>
    <?php $i++ ?>
    <?php endwhile; ?>
    </table>
    <br>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Jenis Buku</th>
    </tr>
    <?php while($row2 = mysqli_fetch_assoc($result2)) : ?>
    <tr>
        <td><?= $row2["id"]; ?></td>
        <td><?= $row2["name"]; ?></td>
    <tr>
    <?php endwhile; ?>
    </table>
    <br>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Penulis</th>
    </tr>
    <?php while($row3 = mysqli_fetch_assoc($result3)) : ?>
    <tr>
        <td><?= $row3["id"]; ?></td>
        <td><?= $row3["name"]; ?></td>
    <tr>
    <?php endwhile; ?>
    </table>
</body>
</html>