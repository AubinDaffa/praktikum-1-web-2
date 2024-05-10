<?php
include_once('koneksi.php');

if(isset($_POST['id']) && isset($_POST['nama'])) {
    // Tangkap data dari form
    $id = $_POST['id'];
    $nama = $_POST['nama'];

    // Buat query untuk update data unit kerja
    $query = "UPDATE unit_kerja SET nama='$nama' WHERE id=$id";

    // Eksekusi query
    try {
        $dbh->beginTransaction(); 
        $result = $dbh->query($query);
        $dbh->commit(); 
        header('location: unit_kerja.php');
        exit(); 
    } catch (PDOException $e) {
        $dbh->rollBack();
        echo "Gagal menyimpan data: " . $e->getMessage(); 
    }
} else {
    echo "Data 'id' atau 'nama' tidak ditemukan dalam data yang dikirim";
}

?>