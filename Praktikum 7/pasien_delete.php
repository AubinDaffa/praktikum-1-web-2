<?php 
include_once('koneksi.php');

//Tangkap data
$id = $_GET['id'];


// Buat query Ins
$query = "DELETE FROM pasien WHERE id='$id'";
// eksekusi Query
if ($dbh->query($query)) {
    header('location: pasien.php');
} else{
    echo 'Gagal Menghapus data';
}
?>