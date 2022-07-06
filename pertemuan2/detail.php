<?php
// koneksi kan dengan functions.php
require 'functions.php';
// ambil id berdasarkan URL
$id = $_GET['id'];
// query mahasiswa berdasarkan id
$mahasiswa = query("SELECT * FROM tugas WHERE id=$id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>

<body>
    <h3>Detail Mahasiswa</h3>

    <ul>
        <li>
            <img src="img/<?= $mahasiswa['gambar']; ?>">
        </li>
        <li>NRP :<?= $mahasiswa['nrp']; ?></li>
        <li>Nama :<?= $mahasiswa['nama']; ?></li>
        <li>Email :<?= $mahasiswa['email']; ?></li>
        <li>Jurusan :<?= $mahasiswa['jurusan']; ?></li>
        <li>
            <a href="#">ubah</a> | <a href="#">hapus</a>
        </li>
        <li><a href="pertemuan4.php">Kembali ke halaman daftar mahasiswa</a></li>
    </ul>
</body>

</html>