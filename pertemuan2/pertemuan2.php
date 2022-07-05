<?php
// menghubungkan dengan database & database yang dipilih
$conn = mysqli_connect('localhost', 'root', '', 'pw_17220019');
// query kan data 
$result = mysqli_query($conn, "SELECT * FROM tugas");
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
// bikin variabel mahasiswa
$mahasiswa = $rows;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h3>Data Mahasiswa</h3>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php foreach ($mahasiswa as $m) : ?>
            <tr>
                <td>1</td>
                <td><img src="img/<?= $m['gambar']; ?>" width="70"></td>
                <td><?= $m['nrp']; ?></td>
                <td><?= $m['nama']; ?></td>
                <td><?= $m['email']; ?></td>
                <td><?= $m['jurusan']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>