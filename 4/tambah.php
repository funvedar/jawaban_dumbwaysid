<?php 
$koneksi = mysqli_connect("localhost", "root", "", "dumbwaysid");
if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $category_id = $_POST["category_id"];
    $writer_id = $_POST["writer_id"];
    $publication_year = $_POST["publication_year"];
    $img = $_POST["img"];

    $query = "INSERT INTO book_tb
                VALUES
                ('','$name', '$category_id', '$writer_id', '$publication_year', '$img')
                ";
    mysqli_query($koneksi, $query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
</head>
<body>
    <h1>Tambah Data Buku</h1>

    <form action="" method="post">
        <label for="name">Nama</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="category_id">ID Jenis Buku</label>
        <input type="number" name="category_id" id="category_id">
        <br>
        <label for="writer_id">ID Penulis</label>
        <input type="number" name="writer_id" id="writer_id">
        <br>
        <label for="publication_year">Tahun Terbit</label>
        <input type="number" name="publication_year" id="publication_year">
        <br>
        <label for="img">Gambar</label>
        <input type="text" name="img" id="img">
        <br>
        <button type="submit" name="submit">Tambah Data</button>
    </form>
</body>
</html>