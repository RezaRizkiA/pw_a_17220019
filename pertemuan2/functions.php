<?php

// koneksikan dengan database & pilih database
function koneksi()
{
    return mysqli_connect('localhost', 'root', '', 'pw_17220019');
}
// function query
function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    // jika data yang dihasilkan sama dengan 1, maka tidak perlu dilooping
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
