<?php
include_once('koneksi.php');

if(isset($_POST['nama'])) {
    $nama = $_POST['nama'];

    // Query insert
    $query = "INSERT INTO unit_kerja (nama) VALUES ('$nama')";

    // Eksekusi query
    try {
        // Jalankan query
        $result = $dbh->query($query);

        if ($result) {
            header('location: unit_kerja.php');
            exit(); 
        } else {
            echo "Gagal menyimpan data";
        }
    } catch (PDOException $e) {
        echo "Gagal menyimpan data: " . $e->getMessage();
    }
} else {
    echo "Nama tidak ditemukan dalam data yang dikirim";
}
?>