<?php
include_once('koneksi.php');

//tangkap data

$id = $_POST['id'];
$pasien_id = $_POST ['pasien_id'];                                                            
$tanggal = $_POST['tanggal'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$tensi = $_POST['tensi'];
$keterangan = $_POST['keterangan'];




//queryinsert
$query = "UPDATE periksa SET pasien_id='$pasien_id', tanggal='$tanggal', berat='$berat', tinggi='$tinggi', tensi='$tensi', keterangan='$keterangan' WHERE id='$id'";


//eksekusi query
if ($dbh->query($query)){
    header('location: periksa.php');
} else {
    echo "Gagal menyimpan data";
}











?> 