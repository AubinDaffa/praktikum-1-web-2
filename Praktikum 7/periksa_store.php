<?php
include_once('koneksi.php');

//tangkap data

$pasien_id = $_POST['pasien_id'];
$tanggal = $_POST['tanggal'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$tensi = $_POST['tensi'];
$keterangan = $_POST['keterangan'];

//queryinsert
$query = "INSERT INTO periksa (pasien_id, tanggal, berat, tinggi, tensi, keterangan) VALUES 
('$pasien_id', '$tanggal', '$berat', '$tinggi', '$tensi', '$keterangan')";


//eksekusi query
if ($dbh->query($query)){
    header('location: periksa.php');
} else {
    echo "Gagal menyimpan data";
}






?>